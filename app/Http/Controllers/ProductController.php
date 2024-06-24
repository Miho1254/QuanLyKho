<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
        // Lưu sản phẩm mới vào database
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
    }

    public function destroy($id)
    {
        // Xóa sản phẩm
    }

    public function outOfStock()
    {
        // Hiển thị sản phẩm hết hàng
    }
}
