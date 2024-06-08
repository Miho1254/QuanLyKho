<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckSession // Correct class name
{
    public function handle(Request $request, Closure $next)
    {
        $path = $request->path();

        // Kiểm tra nếu người dùng đã đăng nhập
        if (Auth::check()) {
            // Ngăn chặn người dùng đã đăng nhập truy cập vào trang login
            if ($path === 'login') {
                Log::debug('Đã đăng nhập, chuyển hướng về trang chủ.');
                return redirect('/');
            }

            // Cho phép tiếp tục nếu không phải là trang login
            return $next($request);
        }

        // Ngăn chặn người dùng chưa đăng nhập truy cập vào bất kỳ trang nào khác ngoài trang login
        if ($path !== 'login') {
            Log::debug('Chưa đăng nhập, chuyển hướng về trang login.');
            return redirect('/login');
        }

        // Cho phép tiếp tục nếu là trang login
        return $next($request);
    }
}
