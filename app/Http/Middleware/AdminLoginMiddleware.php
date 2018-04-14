<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
    public function handle($request, Closure $next)
    {   
        if(Auth::check()) {
            $user = Auth::user();
            if ($user->quyen == 1)
                return $next($request);
            else return redirect('/home')->with('thongbao','Admin mới có thể truy cập, mời đăng xuất');
        }
        else
            return redirect('/home')->with('thongbao','Tài khoản hoặc mật khẩu không đúng');
    }    
}
