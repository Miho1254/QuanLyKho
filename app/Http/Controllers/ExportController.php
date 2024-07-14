<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionInventory;
use App\Models\Warehouse;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ExportController extends Controller
{
    public function index()
    {
        $exports = Transaction::where('type', 'export')->paginate(8);
        return view('exports.index', ['exports' => $exports]);
    }

    public function create()
    {
        $warehouses = Warehouse::all();
        $products = Product::all();
        return view('exports.create', compact('warehouses', 'products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer',
            'warehouse_id' => 'required|integer',
            'products' => 'required|json',
        ]);

        // Tạo mới một transaction với id được cung cấp từ form
        $transaction = new Transaction([
            'id' => $validated['id'],
            'warehouse_id' => $validated['warehouse_id'],
            'type' => 'export',
        ]);
        $transaction->save();

        $products = json_decode($validated['products'], true);

        foreach ($products as $product) {
            // Kiểm tra nếu key 'product_id' tồn tại trong mảng $product
            if (isset($product['product_id'])) {
                // Tạo bản ghi mới trong transactions_inventory
                TransactionInventory::create([
                    'transaction_id' => $transaction->id,
                    'product_id' => $product['product_id'],
                    'quantity' => $product['quantity'],
                ]);

                // Trừ số lượng sản phẩm trong warehouse_inventory
                DB::table('warehouse_inventory')
                    ->where('warehouse_id', $validated['warehouse_id'])
                    ->where('product_id', $product['product_id'])
                    ->decrement('quantity', $product['quantity']);
            } else {
                // Ghi log hoặc xử lý lỗi khi không tìm thấy key 'product_id'
                Log::error('Product array missing key product_id', $product);
            }
        }

        return redirect()->route('exports.index')->with('success', 'Phiếu xuất kho đã được tạo thành công.');
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
        // Find the export transaction
        $export = Transaction::findOrFail($id);

        // Delete the export transaction and related products
        Transaction::where('id', $export->id)->where('type', 'export')->delete();

        // Redirect after successful deletion
        return redirect()->route('exports.index')->with('success', 'Export receipt deleted successfully.');
    }
    public function getProductsByWarehouse($id)
    {
        $products = DB::table('warehouse_inventory')
            ->join('products', 'warehouse_inventory.product_id', '=', 'products.id')
            ->where('warehouse_inventory.warehouse_id', $id)
            ->select('products.*', 'warehouse_inventory.quantity')
            ->get();

        Log::info('Products fetched for warehouse ID ' . $id . ': ', $products->toArray());

        return response()->json($products);
    }
}
