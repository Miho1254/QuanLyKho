<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index() {
        // Hiển thị danh sách nhân viên
        $users = User::paginate(8);

        // Chuyển dữ liệu tới view
        return view('admins.index', compact('users'));
    }

    public function create() {
        // Hiển thị form tạo nhân viên mới
        return view('admins.create');
    }

    public function store(Request $request) {
        // Validate dữ liệu từ form
        $request->validate([
            'fullname' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string',
        ]);
    
        // Tạo mới một người dùng
        $user = User::create([
            'fullname' => $request->fullname,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    
        // Kiểm tra và chuyển hướng sau khi lưu
        if ($user) {
            return redirect()->route('admins.index')->with('success', 'Thêm người dùng thành công.');
        } else {
            return redirect()->back()->with('error', 'Thêm người dùng thất bại. Vui lòng thử lại.');
        }
    }
    
    public function edit($id) {
        // Hiển thị form chỉnh sửa nhân viên
        return view('admins.edit');
    }

    public function update(Request $request, $id) {
        // Cập nhật nhân viên vào database
    }

    public function destroy($id) {
        // Xóa nhân viên
    }
}
