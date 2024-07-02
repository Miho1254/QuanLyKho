<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::paginate(8);
        return view('admins.index', compact('users'));
    }

    public function create()
    {
        return view('admins.create');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        
        // Mã hóa mật khẩu nếu có
        if (isset($requestData['password'])) {
            $requestData['password'] = Hash::make($requestData['password']);
        }

        // Xử lý ảnh đại diện nếu có
        if ($request->hasFile('image_path')) {
            $fileName = time() . $request->file('image_path')->getClientOriginalName();
            $path = $request->file('image_path')->storeAs('public/images/upload/users', $fileName);
            $requestData["image_path"] = str_replace('public/', 'storage/', $path);
        }

        // Tạo người dùng mới
        User::create($requestData);

        return redirect()->route('admins.index')->with('success', 'Thêm người dùng thành công!');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admins.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Validate input
        $request->validate([
            'fullname' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|in:admin,user',
            // Add other validation rules as needed
        ]);

        // Update user data
        $user->fullname = $request->fullname;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        // Check if password is being updated
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Handle image upload if provided
        if ($request->hasFile('image_path')) {
            // Xóa ảnh cũ nếu có
            if ($user->image_path) {
                Storage::delete(str_replace('storage/', 'public/', $user->image_path));
            }

            // Process image upload here, save to storage or public directory
            $fileName = time() . $request->file('image_path')->getClientOriginalName();
            $path = $request->file('image_path')->storeAs('public/images/upload/users', $fileName);
            $user->image_path = str_replace('public/', 'storage/', $path);
        }

        // Save updated user data
        $user->save();

        return redirect()->route('admins.index')
            ->with('success', 'Cập nhật người dùng thành công.');        
    }
                        
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            // Xóa ảnh đại diện nếu có
            if ($user->image_path) {
                Storage::delete(str_replace('storage/', 'public/', $user->image_path));
            }

            $user->delete();
            return redirect()->route('admins.index')->with('success', 'Người dùng đã được xóa thành công!');
        } else {
            return redirect()->route('admins.index')->with('error', 'Người dùng không tồn tại!');
        }
    }
}
