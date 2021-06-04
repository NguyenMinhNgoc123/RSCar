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
        $data=[];
        $order = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.user_id')
            ->join('ships', 'orders.ship_id', '=', 'ships.ship_id')
            ->join('payments', 'orders.payment_id', '=', 'payments.payment_id')
            ->orderBy('order_create', 'desc')
            ->get();
        $data['order']=$order;
        return  view('order.list',$data);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data=[];
        $orderDetail = DB::table('order_details')->where('order_id','=',$id)
            ->join('product_cars', 'order_details.product_id', '=', 'product_cars.product_id')
            ->join('post_types', 'post_types.type_id', '=', 'product_cars.type_id')
            ->join('type_vehicles', 'type_vehicles.type_vehicles_id', '=', 'product_cars.type_vehicles_id')
            ->get();
        $data['orderDetail']=$orderDetail;
        return view('order.detail',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data=[];
        $order = Order::findOrFail($id);
        $data['order']=$order;
        return view('order.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if (isset($request->order_status)){
            $data1=[];
            $data=[];
            if (isset($request->payment_status)){
                $data1['payment_status']=$request->payment_status;
                $data1['order_status'] =$request->order_status;
                DB::table('payments')
                    ->join('orders','orders.payment_id','=','payments.payment_id')
                    ->where('orders.order_id', $id)
                    ->update($data1);
            }

//            $data['order_status']=$request->order_status;
//            DB::table('orders')
//                ->where('order_id', $id)
//                ->update($data);
            return redirect()->route('admin.order.list');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
        $order = DB::table('orders')->where('order_id','=',$id)->get();
        foreach ($order as $value){
             $request->session()->put('order_id',$value->order_id);
             $request->session()->put('ship_id',$value->ship_id);
             $request->session()->put('payment_id',$value->payment_id);
        }

        DB::table('order_details')
            ->where('order_id','=',$request->session()->get('order_id'))
            ->delete();
        DB::table('orders')
            ->where('order_id','=',$request->session()->get('order_id'))->delete();
        DB::table('payments')
            ->where('payment_id','=',$request->session()->get('payment_id'))->delete();
        DB::table('ships')
            ->where('ship_id','=',$request->session()->get('ship_id'))->delete();
        session()->put('order_id',null);
        session()->put('ship_id',null);
        session()->put('payment_id',null);

        return redirect()->route('admin.order.list')->with('message','Xóa đơn hàng thành công');
    }
}
