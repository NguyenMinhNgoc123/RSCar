<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Mail;

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
                $request->session()->put('full_name',$request->full_name);
                return redirect('/')->with('message', 'Đăng ký tài khoản thành công ');
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
                $request->session()->put('full_name',$user->full_name);
                return redirect('user/show-cart');
            }else{
                return back()->with('error','sai mật khẩu hoặc tài khoản');
            }
        }else{
            return back()->with('error','sai mật khẩu hoặc tài khoản');
        }
    }
    public function profile(Request $request){
        $data=[];
        $profile = User::where('user_id',$request->session()->get('user_id'))->get();
        $data['profile']=$profile;
        return view('user.profile',$data);
    }
    public function change_password(){
        return view('user.changePassword');
    }
    public function save_password(Request $request){
        $data=[];
        $user_id =  $request->session()->get('user_id');
        $password_old = md5($request->password_old);
        $result = DB::table('users')
            ->where('user_id','=',$user_id)
            ->where('password','=',$password_old)
            ->count();
        if (isset($result)){
            if (isset($request->new_password)){
                if ($request->new_password == $request->confirm_password){
                    $data['password'] = md5($request->new_password);
                    DB::table('users')->where('user_id','=',$user_id)->update($data);
                    return redirect()->route('user.profile')->with('message', 'Cập nhật thành công');
                }else{
                    return redirect()->back()->with('error', 'Mật khẩu mới không khớp');
                }
            }else{
                return redirect()->back()->with('error', 'Mật khẩu mới chưa nhập');
            }
        }else{
            return redirect()->back()->with('error', 'Mật khẩu cũ không khớp');
        }
        return view('user.changePassword');
    }
    public function input_email(){
        return view('resetPass.inputEmail');
    }
    public function check_email(Request $request){
        $data = [];
        $check_email = DB::table('users')->where('email','=',$request->email)
            ->count();
        if ($check_email > 0){
            $code = mt_rand();
            $data['code']=$code;
            DB::table('users')->where('email','=',$request->email)->update($data);

            $request->session()->put('email_forgot',$request->email);
            $request->session()->put('otp',$code);
            $user['body']='mã otp reset password của bạn :'.$code;
            $user['to']=$request->email;
            $detail=[
                'title'=>$user['body']
            ];
            Mail::to($user['to'])->send(new \App\Mail\MailNotify($detail));

//            Mail::send('resetPass.inputOtp',$detail,function ($messages) use ($user){
//               $messages->to($user['to']);
//               $messages->subject($user['body']);
//            });
            return view('resetPass.inputOtp');
        }else{
            return redirect()->back()->with('error', 'Email không đúng');
        }
    }
    public function check_otp(Request $request){
        $email = $request->session()->get('email_forgot');
        if (isset($request->otp)){
            $result = DB::table('users')
                ->where('email','=',$email)
                ->where('code','=',$request->otp)
                ->count();
            if ($result > 0){
                return redirect()->route('guest.form-change-password');
            }else{
                return redirect()->back()->with('error', 'otp không đúng');
            }
        }
    }
    public function form_change_password (){
        return view('resetPass.changePassword');
    }
    public function change_password_forgot(Request $request){
        $data=[];
        $email = $request->session()->get('email_forgot');
        if (isset($request->password_new)){
            if ($request->password_new == $request->confirm_password){
                $password =md5($request->password_new);
                $data['password']=$password;
                DB::table('users')
                    ->where('email','=',$email)
                    ->update($data);
                session()->put('email_forgot',null);
                session()->put('code',null);
                return redirect()->route('user.login-user')->with('message', 'Cập nhật thành công');
            }else{
                return redirect()->back()->with('error', 'Không trùng mật khẩu ');
            }
        }else{
            return redirect()->back()->with('error', 'Trường bị rỗng');
        }
    }
}
