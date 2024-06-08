<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function index() {
        // Hiển thị danh sách phiếu nhập kho
    }

    public function create() {
        // Hiển thị form tạo phiếu nhập kho mới
    }

    public function store(Request $request) {
        // Lưu phiếu nhập kho mới vào database
    }

    public function edit($id) {
        // Hiển thị form chỉnh sửa phiếu nhập kho
    }

    public function update(Request $request, $id) {
        // Cập nhật phiếu nhập kho vào database
    }

    public function destroy($id) {
        // Xóa phiếu nhập kho
    }
}
