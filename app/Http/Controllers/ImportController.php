<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Warehouse;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ImportController extends Controller
{
    public function index()
    {
        $imports = Transaction::where('type', 'import')->paginate(8);
        return view('imports.index', ['imports' => $imports]);
    }

    public function create()
    {
        $warehouses = Warehouse::all();
        $products = Product::all();
        return view('imports.create', compact('warehouses', 'products'));
    }

    public function store(Request $request)
    {
        // Để kiểm tra dữ liệu gửi từ form
        //dd("a");

        // Validate request data
        $validatedData = $request->validate([
            'id' => 'required|unique:transactions',
            'warehouse_id' => 'required|exists:warehouses,id',
            'products' => 'required|json'
        ]);
        Log::debug("start");

        $products = json_decode($validatedData['products'], true);
        Log::debug(" products");
        Log::debug($products);

        DB::beginTransaction();
        Log::debug("DB");

        try {
            // Tạo một giao dịch mới
            $transaction = new Transaction();
            $transaction->id = $validatedData['id'];
            $transaction->warehouse_id = $validatedData['warehouse_id'];
            $transaction->type = 'import';
            $transaction->save();
            Log::debug("running 1");

            // Lặp qua mỗi sản phẩm trong danh sách
            foreach ($products as $product) {
                Log::debug("start foreach");

                DB::table('transactions_inventory')->insert([
                    'transaction_id' => $transaction->id,
                    'product_id' => $product['id'],
                    'quantity' => $product['quantity']
                ]);
                Log::debug("end foreach");
            }
            Log::debug("DB");

            DB::commit();
            Log::debug("running 2");

            return redirect()->route('imports.index')->with('success', 'Phiếu nhập kho đã được tạo thành công.');
            Log::debug("running 3");
        } catch (\Exception $e) {
            DB::rollBack();
            Log::debug("running 3.5");
        }
        Log::debug("running 4");
    }
    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
        // Find the import transaction
        $import = Transaction::findOrFail($id);

        // Delete the import transaction and related products
        Transaction::where('id', $import->id)->where('type', 'import')->delete();

        // Redirect after successful deletion
        return redirect()->route('imports.index')->with('success', 'Import receipt deleted successfully.');
    }
}
