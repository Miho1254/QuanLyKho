<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        Log::debug("Đang chạy hàm login");

        $credentials = $request->only('email', 'password');
	Log::debug($credentials);
        if (Auth::attempt($credentials)) {
            Log::debug("đã login");
            Log::debug(Auth::check());
            return redirect()->intended('/');
	}
	else {
	   Log::debug("khong auth login duoc");
	}

        return redirect()->back()->withErrors(['email' => 'Email hoặc mật khẩu không chính xác']);
    }


    public function logout(Request $request)
    {
        Log::debug('Logout called'); // Log để kiểm tra yêu cầu
    
        Auth::logout(); // Đăng xuất người dùng
    
        $request->session()->invalidate(); // Vô hiệu hóa session hiện tại
        $request->session()->regenerateToken(); // Tạo lại CSRF token
    
        return redirect('/login'); // Chuyển hướng đến trang đăng nhập
    }
    
}
