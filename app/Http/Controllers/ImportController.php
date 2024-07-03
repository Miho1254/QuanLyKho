<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Warehouse;
use App\Models\Product;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function index() {
        // Hiển thị danh sách phiếu nhập kho
        $imports = Transaction::paginate(8); // Phân trang với mỗi trang 10 bản ghi
    
        return view('imports.index', ['imports' => $imports]);
    }

    public function create() {
        $products = Product::all(); // Giả sử bạn có model Product để lấy danh sách sản phẩm
        $warehouses = Warehouse::all(); // Lấy danh sách kho hàng từ model Warehouse

        return view('imports.create', compact('products', 'warehouses'));
                // Hiển thị form tạo phiếu nhập kho mới
    }

    public function store(Request $request)
    {
    // Validate incoming request
    $request->validate([
        'id' => 'required|string|max:255', // Thêm các quy định validation cho các trường khác nếu cần thiết
        'products' => 'required|array|min:1', // Đảm bảo danh sách sản phẩm không được rỗng và là một mảng
        'products.*.id' => 'required|exists:products,id', // Đảm bảo mỗi sản phẩm có tồn tại trong bảng products
        'products.*.quantity' => 'required|integer|min:1', // Đảm bảo số lượng sản phẩm là số nguyên dương
    ]);

    // Tạo phiếu nhập kho mới
    $transaction = new Transaction();
    $transaction->type = 'import'; // Loại giao dịch là nhập kho
    $transaction->id = $request->input('id');
    $transaction->save();

    // Lưu chi tiết các sản phẩm được nhập vào phiếu nhập kho
    foreach ($request->input('products') as $product) {
        // Tạo một mảng để lưu thông tin sản phẩm vào bản ghi transaction
        $transaction->product_id = $product['id'];
        $transaction->quantity = $product['quantity'];
        $transaction->save();
    }

    // Redirect về trang tạo phiếu nhập kho với thông báo thành công
    return redirect()->back()->with('success', 'Đã tạo phiếu nhập kho thành công.');
    }
    
    public function update(Request $request, $id) {
        // Cập nhật phiếu nhập kho vào database
    }

    public function destroy($id) {
        // Xóa phiếu nhập kho
    }
}
