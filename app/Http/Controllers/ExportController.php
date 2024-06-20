<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function index() {
        // Hiển thị danh sách phiếu xuất kho
        return view('exports.index');
    }

    public function create() {
        // Hiển thị form tạo phiếu xuất kho mới
        return view('exports.create');
    }

    public function store(Request $request) {
        // Lưu phiếu xuất kho mới vào database
    }

    public function update(Request $request, $id) {
        // Cập nhật phiếu xuất kho vào database
    }

    public function destroy($id) {
        // Xóa phiếu xuất kho
    }
}
