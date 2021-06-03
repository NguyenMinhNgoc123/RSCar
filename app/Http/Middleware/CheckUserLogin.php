<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CheckUserLogin
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
//        && !in_array(Route::currentRouteName(), ['user.login-checkout', 'user.user-dashboard'])
        if (!session()->has('email') && !session()->has('user_id') && !in_array(Route::currentRouteName(), ['user.login-user', 'user.user-dashboard']) ){
            return redirect('user/login-user')->with('message','bạn chưa login');
        }


        if (session()->has('email') && session()->has('user_id') && url('user/login-user') == $request->url() && in_array(Route::currentRouteName(), ['user.login-user', 'user.user-dashboard'])){
            return redirect('/');
        }
        if (session()->has('email') && url('/register') == $request->url() && in_array(Route::currentRouteName(), ['register', 'add-user'])){
            return redirect('/');
        }
        return $next($request);
    }
}
