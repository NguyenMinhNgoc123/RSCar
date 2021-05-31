<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function login_user(){
        return view('user.login');
    }
    public function register(){
        return view('user.register');
    }
    public function logout(){
        Session()->put('email',null);
        Session()->put('user_id',null);
        Cart::destroy();
        return redirect('/');
    }
    public function save_user(Request $request){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');

        $data =[];
        if ($request->password == $request->confirm_password){
            $check = DB::table('users')->where('email',$request->email_regis)->count();
            if ($check == '0'){
                $id = $data['user_id']= mt_rand();
                $data['email']=$request->email_regis;
                $data['full_name']=$request->full_name;
                $data['phone_no']=$request->phone_no;
                $data['sex']=$request->sex;
                $data['password']=md5($request->password);
                $data['code']='';
                $data['created_at']=$date;
                DB::table('users')->insertGetId($data);

                $request->session()->put('user_id',$id);
                $request->session()->put('email',$request->email_regis);
                return redirect()->route('user.show-cart')->with('message', 'Đăng ký tài khoản thành công ');
            }else{
                return redirect()->back()->with('error','email đã tồn tại');
            }
        }else{
            return redirect()->back()->with('error','Mật khẩu không trùng');
        }
    }
    public function dashboard(Request $request){
        $user = User::where('email',$request->email)->first();
        if ($user){
            if (md5($request->password) == $user->password){
                $request->session()->put('user_id',$user->user_id);
                $request->session()->put('email',$user->email);
                return redirect('user/show-cart');
            }else{
                return back()->with('message','sai mật khẩu hoặc tài khoản');
            }
        }else{
            return back()->with('message','sai mật khẩu hoặc tài khoản');
        }
    }
}
