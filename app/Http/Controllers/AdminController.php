<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\LoginAdminRequest;
use App\Models\Admin;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product_car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;
class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.admin_login');
    }
    public function show_dashboard(){
        $data = [];
        $countOrder = Order::where('order_status','=',0)->count();
        $countOrderFinish = Payment::where('payment_status',1)->count();
        $countTotalProduct = DB::table('products')
            ->where('products.deleted_at',null)
            ->count();
        $countUser = DB::table('users')->count();
        $data['countOrder']=$countOrder;
        $data['countOrderFinish']=$countOrderFinish;
        $data['countTotalproduct']=$countTotalProduct;
        $data['countUser']=$countUser;
        return view('admin.dashboard',$data);
    }
    public function dashboard(Request $request){
        $admin = Admin::where('email',$request->admin_email)->first();
        if ($admin){
            if (md5($request->admin_password) == $admin->password){
                $request->session()->put('name',$admin->name);
                $request->session()->put('status_admin',$admin->status_admin);
                $request->session()->put('email_admin',$admin->email);
                return redirect('admin/dashboard');
            }else{
                return back()->with('message','sai mật khẩu hoặc tài khoản');
            }
        }else{
            return back()->with('message','sai mật khẩu hoặc tài khoản');
        }
    }
    public function logout(){
        session()->put('status_admin',null);
        session()->put('status_admin',null);
        Session()->put('name',null);
        Session()->put('admin_id',null);
        return redirect('/');
    }
    public function list_admin(){
        $data=[];
        if (Session()->get('status_admin') =='1'){
            $admins = Admin::get();
        }else{
            $admins = Admin::where('email',Session()->get('email_admin'))->get();
        }
        $data['admin'] = $admins;
        return view('account-admin.list',$data);
    }
    public function add_admin(){
        return view('account-admin.add');
    }
    public function save_admin(Request $request){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        $data=[];
        $request->validate([
            'name'=>'required',
            'email'=> 'required|email',
            'password'=>'required',
            'confirm_password'=>'required|same:password',
            'phone_no'=>'required',
            'status_admin'=>'required',

        ]);

            $check =DB::table('admins')->where('email','=',$request->email)->get();
            if (count($check) > 0){
                return redirect()->back()->with('error','Email đã tồn tại !');
            }else{
                    $data['admin_id']=null;
                    $data['name']=$request->name;
                    $data['email']=$request->email;
                    $data['password']=md5($request->password);
                    $data['phone_no']=$request->phone_no;
                    $data['status_admin']=$request->status_admin;
                    $data['created_at']=$date;
                    DB::table('admins')->insertGetId($data);
                    return \redirect()->route('admin.list-admin')->with('message','Tạo tài khoản thành công !');

            }

    }
    public function edit_admin($id){
        $data=[];
        $admin=Admin::where('admin_id',$id)->first();
        $data['admin']=$admin;
        return view('account-admin.edit',$data);
    }
    public function update_admin(Request $request,$id){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        $data=[];
        $checkPass = DB::table('admins')
            ->where('admin_id','=',$id)
            ->where('password','=',md5($request->old_password))->count();
        if ($checkPass > 0 ){
            if ($request->password == $request->confirm_password){
                $data['name']=$request->name;
                $data['phone_no']=$request->phone_no;
                $data['password']=md5($request->password);
                $data['updated_at']=$date;
                $data['admin_status']=$request->status_admin;
                DB::table('admins')->where('admin_id','=',$id)
                    ->update($data);
                return \redirect()->route('admin.list-admin')->with('message','Cập nhật tài khoản thành công !');
            }else{
                return redirect()->back()->with('error','Mật khẩu mới không trùng !');
            }
        }else{
            return redirect()->back()->with('error','Mật khẩu cũ không trùng !');
        }
    }
    //manage user
    public function list_user(){
        $data =[];
        $user = DB::table('users')->get();
        $data['user']=$user;
        return view('account-user.list',$data);
    }
    public function delete_user(Request  $request, $id){

        try {

            $check_exist_order = DB::table('orders')
                ->where('user_id', $id)
                ->first();
            if (!$check_exist_order) {
                DB::table('users')
                    ->where('user_id','=', $id)->delete();

                return redirect()->route('admin.manage-user.list')->with('message','Xóa Tài khoản khách thành công');
            }
            return redirect()->back()->with('error','Không thể xóa khách hàng');
        } catch (\Exception $exception){
            return redirect()->back()->with('error','Không thể xóa khách hàng');
        }

    }
}
