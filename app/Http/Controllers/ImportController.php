<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Warehouse;
use App\Models\Product;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function index()
    {
        // Hiển thị danh sách phiếu nhập kho
        $imports = Transaction::paginate(8); // Phân trang với mỗi trang 10 bản ghi

        return view('imports.index', ['imports' => $imports]);
    }

   public function create()
   {
       $warehouses = Warehouse::all(); // Lấy danh sách kho hàng
       $products = Product::all(); // Lấy danh sách sản phẩm
       return view('imports.create', compact('warehouses', 'products'));
   }

    /**
     * Lưu phiếu nhập kho vào CSDL.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'receipt_id' => 'required|string',
            'warehouse_id' => 'required|exists:warehouses,id',
            'products' => 'required|array|min:1',
            'products.*.product_id' => 'required|string|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
        ]);

        // Create transactions for each product
        foreach ($request->products as $product) {
            Transaction::create([
                'product_id' => $product['product_id'],
                'quantity' => $product['quantity'],
                'type' => 'import', // Loại giao dịch nhập kho
                // Có thể thêm các trường khác nếu cần
            ]);
        }

        return redirect()->back()->with('success', 'Phiếu nhập kho đã được tạo thành công.');
    }

    public function update(Request $request, $id)
    {
        // Cập nhật phiếu nhập kho vào database
    }

    public function destroy($id)
    {
        // Xóa phiếu nhập kho
    }
}
