<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [];
        $order = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.user_id')
            ->join('ships', 'orders.ship_id', '=', 'ships.ship_id')
            ->join('payments', 'orders.payment_id', '=', 'payments.payment_id')
            ->where('order_status','!=', '5')
            ->orderBy('order_create', 'desc')
            ->get();
        $data['order'] = $order;
        return view('order.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = [];
        $admin = DB::table('admins')
            ->where('admin_id','=','1')->get();
        $data['admin']=$admin;

        $order = DB::table('orders')->where('order_id', '=', $id)
            ->join('payments', 'orders.payment_id', '=', 'payments.payment_id')
            ->join('ships', 'orders.ship_id', '=', 'ships.ship_id')
            ->get();
        $data['order'] = $order;

        $orderDetails = DB::table('order_details')
            ->join('product_cars', 'product_cars.product_id', '=', 'order_details.product_id')
            ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
            ->where('order_id','=',$id)
            ->get();
        $data['orderDetails']=$orderDetails;

        return view('order.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = [];
        $order = DB::table('orders')
            ->join('payments', 'orders.payment_id', '=', 'payments.payment_id')
            ->where('order_id', '=', $id)->first();

        $data['order'] = $order;
        return view('order.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        try {
            $data1 = [];
            $dataCar = [];
            $data = [];
            if (isset($request->payment_status)) {
                if ($request->payment_status == '1') {
                    $dataCar['updated_at'] = $date;
                    $data1['payment_status'] = $request->payment_status;
                    $order_details = DB::table('order_details')
                        ->where('order_id', '=', $id)->get();
                    foreach ($order_details as $key => $value) {
                        $id_product = $value->product_id;
                        $type = DB::table('product_cars')
                            ->where('product_id', '=', $id_product)->first();
                        if ($type->type_id == '2'){
                            $dataCar['status'] = '3';
                        }else{
                            $dataCar['status'] = '1';
                        }
                        DB::table('product_cars')
                            ->where('product_id', '=', $id_product)
                            ->update($dataCar);
                    }
                } else {
                    $dataCar['status'] = 0;
                    $dataCar['updated_at'] = $date;
                    $data1['payment_status'] = $request->payment_status;
                    $order_details = DB::table('order_details')
                        ->where('order_id', '=', $id)->get();
                    foreach ($order_details as $key => $value) {
                        $id_product = $value->product_id;
                        DB::table('product_cars')
                            ->where('product_id', '=', $id_product)
                            ->update($dataCar);
                    }
                }
                DB::table('payments')
                    ->join('orders', 'orders.payment_id', '=', 'payments.payment_id')
                    ->where('orders.order_id', $id)
                    ->update($data1);

            }

            if (isset($request->order_status)) {
                $dataStatus=[];
                $data['order_status'] = $request->order_status;
                DB::table('orders')
                    ->where('order_id', $id)
                    ->update($data);
                if ($request->order_status == 5 ){
                    $order_details = DB::table('order_details')
                        ->where('order_id', '=', $id)->get();
                    foreach ($order_details as $key => $value) {
                        $id_product = $value->product_id;
                        $type = DB::table('product_cars')
                            ->where('product_id', '=', $id_product)->first();
                        if ($type->type_id == '2'){
                            $dataStatus['status']='0';
                        }else{
                            $dataStatus['status']='1';
                        }
                        DB::table('product_cars')
                            ->where('product_id', '=', $id_product)
                            ->update($dataStatus);
                    }
                    return redirect()->route('admin.order.list')->with('message','Đơn đã hoàn tất');
                }
            }
            return redirect()->route('admin.order.list');

        } catch (\Exception $exception) {
            return redirect()->back()->with('error','không được để trống');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $order = DB::table('orders')->where('order_id', '=', $id)->get();
        foreach ($order as $value) {
            $request->session()->put('order_id', $value->order_id);
            $request->session()->put('ship_id', $value->ship_id);
            $request->session()->put('payment_id', $value->payment_id);
        }

        DB::table('order_details')
            ->where('order_id', '=', $request->session()->get('order_id'))
            ->delete();
        DB::table('orders')
            ->where('order_id', '=', $request->session()->get('order_id'))->delete();
        DB::table('payments')
            ->where('payment_id', '=', $request->session()->get('payment_id'))->delete();
        DB::table('ships')
            ->where('ship_id', '=', $request->session()->get('ship_id'))->delete();
        session()->put('order_id', null);
        session()->put('ship_id', null);
        session()->put('payment_id', null);

        return redirect()->route('admin.order.list')->with('message', 'Xóa đơn hàng thành công');
    }
    public function list_completed(){
        $data = [];
        $order = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.user_id')
            ->join('ships', 'orders.ship_id', '=', 'ships.ship_id')
            ->join('payments', 'orders.payment_id', '=', 'payments.payment_id')
            ->where('order_status','=', '5')
            ->orderBy('order_create', 'desc')
            ->get();
        $data['order'] = $order;
        return view('complete-bill.list', $data);
    }
    public function show_completed($id){
        $data = [];
        $admin = DB::table('admins')
            ->where('admin_id','=','1')->get();
        $data['admin']=$admin;

        $order = DB::table('orders')->where('order_id', '=', $id)
            ->join('payments', 'orders.payment_id', '=', 'payments.payment_id')
            ->join('ships', 'orders.ship_id', '=', 'ships.ship_id')
            ->get();
        $data['order'] = $order;

        $orderDetails = DB::table('order_details')
            ->join('product_cars', 'product_cars.product_id', '=', 'order_details.product_id')
            ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
            ->where('order_id','=',$id)
            ->get();
        $data['orderDetails']=$orderDetails;

        return view('complete-bill.detail', $data);
    }
}
