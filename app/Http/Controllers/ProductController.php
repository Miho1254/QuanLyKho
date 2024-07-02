<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{
    public function index()
    {
        // Lấy tất cả sản phẩm từ cơ sở dữ liệu
        $products = Product::paginate(8);

        // Chuyển dữ liệu tới view
        return view('products.index', compact('products'));
    }

    public function create()
    {
        // Hiển thị form tạo sản phẩm mới
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validate request data
        // Validate request data
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'brand' => 'nullable',
        ]);

        // Handle image upload if exists
        $imagePath = null;
        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('public/images/upload/products');
            $imagePath = str_replace('public/', 'storage/', $imagePath);
        }

        // Format price to integer (remove non-numeric characters)
        $price = (int) preg_replace("/[^0-9]/", "", $request->price);

        // Create new product
        Product::create([
            'id' => $request->id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $price,
            'image_path' => $imagePath,
            'brand' => $request->brand,
        ]);

        // Redirect with success message
        return redirect()->route('products.index')->with('success', 'Thêm sản phẩm thành công!');
    }
    
    public function show($id)
    {
        // Hiển thị chi tiết 1 sản phẩm
    }

    public function edit($id)
    {
        // Lấy sản phẩm từ ID và truyền vào view
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Cập nhật sản phẩm vào database
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'brand' => 'nullable',
        ]);

        // Tìm sản phẩm để cập nhật
        $product = Product::findOrFail($id);

        // Xử lý upload hình ảnh nếu có
        if ($request->hasFile('image_path')) {
            // Xóa hình ảnh cũ trước khi upload hình mới
            if ($product->image_path) {
                Storage::delete(str_replace('storage/', 'public/', $product->image_path));
            }

            // Upload hình ảnh mới
            $imagePath = $request->file('image_path')->store('public/images/upload/products');
            $product->image_path = str_replace('public/', 'storage/', $imagePath);
        }

        // Format giá sản phẩm thành số nguyên (loại bỏ ký tự không phải số)
        $price = (int) preg_replace("/[^0-9]/", "", $request->price);

        // Cập nhật thông tin sản phẩm
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $price;
        $product->brand = $request->brand;

        // Lưu lại vào cơ sở dữ liệu
        $product->save();

        // Redirect về trang danh sách sản phẩm với thông báo
        return redirect()->route('products.index')->with('success', 'Cập nhật sản phẩm thành công!');

        
    }

    public function destroy($id)
    {
        // Xóa sản phẩm
        $product = Product::findOrFail($id); // Tìm sản phẩm theo id, nếu không tìm thấy sẽ trả về 404

        // Xóa sản phẩm
        $product->delete();
    
        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được xóa thành công.');
    
    }

    public function outOfStock()
    {
        // Hiển thị sản phẩm hết hàng
    }
}
