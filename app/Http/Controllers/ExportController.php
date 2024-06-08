<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function index() {
        // Hiển thị danh sách phiếu xuất kho
    }

    public function create() {
        // Hiển thị form tạo phiếu xuất kho mới
    }

    public function store(Request $request) {
        // Lưu phiếu xuất kho mới vào database
    }

    public function edit($id) {
        // Hiển thị form chỉnh sửa phiếu xuất kho
    }

    public function update(Request $request, $id) {
        // Cập nhật phiếu xuất kho vào database
    }

    public function destroy($id) {
        // Xóa phiếu xuất kho
    }
}
