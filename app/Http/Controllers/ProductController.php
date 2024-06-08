<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        // Hiển thị danh sách sản phẩm
    }

    public function create() {
        // Hiển thị form tạo sản phẩm mới
    }

    public function store(Request $request) {
        // Lưu sản phẩm mới vào database
    }

    public function show($id) {
        // Hiển thị chi tiết 1 sản phẩm
    }

    public function edit($id) {
        // Hiển thị form chỉnh sửa sản phẩm
    }

    public function update(Request $request, $id) {
        // Cập nhật sản phẩm vào database
    }

    public function destroy($id) {
        // Xóa sản phẩm
    }

    public function outOfStock() {
        // Hiển thị sản phẩm hết hàng
    }
}
