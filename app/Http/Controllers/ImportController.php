<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function index() {
        // Hiển thị danh sách phiếu nhập kho
        return view('imports.index');
    }

    public function create() {
        return view('imports.create');
        // Hiển thị form tạo phiếu nhập kho mới
    }

    public function store(Request $request) {
        // Lưu phiếu nhập kho mới vào database
    }

    public function update(Request $request, $id) {
        // Cập nhật phiếu nhập kho vào database
    }

    public function destroy($id) {
        // Xóa phiếu nhập kho
    }
}
