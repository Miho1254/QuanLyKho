<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        // Hiển thị danh sách nhân viên
        return view('admins.index');
    }

    public function create() {
        // Hiển thị form tạo nhân viên mới
        return view('admins.create');
    }

    public function store(Request $request) {
        // Lưu nhân viên mới vào database
    }

    public function edit($id) {
        // Hiển thị form chỉnh sửa nhân viên
    }

    public function update(Request $request, $id) {
        // Cập nhật nhân viên vào database
    }

    public function destroy($id) {
        // Xóa nhân viên
    }
}
