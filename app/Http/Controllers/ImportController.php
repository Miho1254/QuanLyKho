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
        // Validate request data
        $validatedData = $request->validate([
            'id' => 'required|unique:transactions',
            'warehouse_id' => 'required|exists:warehouses,id',
            'products' => 'required|json'
        ]);
    
        Log::debug('Validated data:', $validatedData);
    
        $products = json_decode($validatedData['products'], true);
    
        DB::beginTransaction();
    
        try {
            // Tạo một giao dịch mới
            $transaction = new Transaction();
            $transaction->id = $validatedData['id'];
            $transaction->warehouse_id = $validatedData['warehouse_id'];
            $transaction->type = 'import'; // Đây là giao dịch nhập kho
            $transaction->save();
    
            Log::debug('Created new transaction:', $transaction->toArray());
    
            // Duyệt qua từng sản phẩm trong danh sách
            foreach ($products as $product) {
                // Kiểm tra xem sản phẩm có sẵn trong kho không
                $warehouseProduct = DB::table('warehouse_inventory')
                                    ->where('warehouse_id', $validatedData['warehouse_id'])
                                    ->where('product_id', $product['id'])
                                    ->first();
    
                if ($warehouseProduct) {
                    // Nếu sản phẩm đã có trong kho, cập nhật số lượng
                    DB::table('warehouse_inventory')
                        ->where('warehouse_id', $validatedData['warehouse_id'])
                        ->where('product_id', $product['id'])
                        ->increment('quantity', $product['quantity']);
    
                    Log::debug('Updated quantity of existing product in warehouse.', [
                        'product_id' => $product['id'],
                        'new_quantity' => $product['quantity'],
                    ]);
                } else {
                    // Nếu sản phẩm chưa có trong kho, thêm mới vào kho
                    DB::table('warehouse_inventory')->insert([
                        'warehouse_id' => $validatedData['warehouse_id'],
                        'product_id' => $product['id'],
                        'quantity' => $product['quantity'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
    
                    Log::debug('Added new product to warehouse inventory.', [
                        'product_id' => $product['id'],
                        'quantity' => $product['quantity'],
                    ]);
                }
    
                // Thêm vào bảng transactions_inventory để ghi nhận giao dịch
                DB::table('transactions_inventory')->insert([
                    'transaction_id' => $transaction->id,
                    'product_id' => $product['id'],
                    'quantity' => $product['quantity'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
    
                Log::debug('Added transaction inventory record for product.', [
                    'transaction_id' => $transaction->id,
                    'product_id' => $product['id'],
                    'quantity' => $product['quantity'],
                ]);
            }
    
            DB::commit();
    
            Log::info('Transaction successfully committed.');
    
            return redirect()->route('imports.index')->with('success', 'Phiếu nhập kho đã được tạo thành công.');
        } catch (\Exception $e) {
            DB::rollBack();
    
            Log::error('Error occurred during transaction:', [
                'error_message' => $e->getMessage(),
                'trace' => $e->getTrace(),
            ]);
    
            return back()->with('error', 'Đã có lỗi xảy ra: ' . $e->getMessage());
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
        $import->delete();

        // Delete the import transaction and related products
        Transaction::where('id', $import->id)->where('type', 'import')->delete();

        // Redirect after successful deletion
        return redirect()->route('imports.index')->with('success', 'Import receipt deleted successfully.');
    }
}
