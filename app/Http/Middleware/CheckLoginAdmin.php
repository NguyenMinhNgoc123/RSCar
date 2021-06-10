<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class CheckLoginAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('name') && !in_array(Route::currentRouteName(), ['admin.admin-login', 'admin.admin-dashboard'])){
            return redirect('admin/admin-login')->with('error','bạn chưa login');
        }

        if (session()->has('name') && url('admin/admin-login') == $request->url() && in_array(Route::currentRouteName(), ['admin.admin-login', 'admin.admin-dashboard'])){
            return redirect('admin/dashboard');
        }
        return $next($request);
    }
}
