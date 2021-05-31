<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\LoginAdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

//session_start();
class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.admin_login');
    }
    public function show_dashboard(){
        return view('admin.dashboard');
    }
    public function dashboard(Request $request){
        $admin = Admin::where('email',$request->admin_email)->first();
        if ($admin){
            if (md5($request->admin_password) == $admin->password){
                $request->session()->put('name',$admin->name);
                return redirect('admin/dashboard');
            }else{
                return back()->with('message','sai mật khẩu hoặc tài khoản');
            }
        }else{
            return back()->with('message','sai mật khẩu hoặc tài khoản');
        }
    }
    public function logout(){
        Session()->put('name',null);
        Session()->put('admin_id',null);
        return redirect('/');
    }
}
