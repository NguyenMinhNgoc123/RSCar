<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $user_id =$request->session()->get('user_id');
        $data=[];
        $order = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.user_id')
            ->join('ships', 'orders.ship_id', '=', 'ships.ship_id')
            ->join('payments', 'orders.payment_id', '=', 'payments.payment_id')
            ->where('orders.order_status','=',0)
            ->where('users.user_id','=',$user_id)
            ->orderBy('order_create', 'desc')
            ->get();
        $data['order']=$order;
        return view('user.myOrder',$data);

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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data=[];
        $order = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.user_id')
            ->join('ships', 'orders.ship_id', '=', 'ships.ship_id')
            ->join('payments', 'orders.payment_id', '=', 'payments.payment_id')
            ->where('orders.order_id', '=',$id)
            ->get();
        $data['order']=$order;
        $orderDetail = DB::table('order_details')->where('order_id','=',$id)
            ->join('products', 'order_details.product_id', '=', 'products.product_id')
            ->join('post_types', 'post_types.type_id', '=', 'products.type_id')
            ->join('type_shoes', 'type_shoes.type_shoes_id', '=', 'products.type_shoes_id')
            ->where('products.deleted_at',null)
            ->get();
        $data['orderDetail'] = $orderDetail;
        return view('user.myOrderDetail',$data);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request, $id)
    {
        //
        DB::table('orders')->where('order_id', $id)->update(['order_status', 2]);
        return redirect()->route('user.order.list')->with('message','Vui lòng chờ ');
    }
    public function history_order(Request $request){
        $user_id =$request->session()->get('user_id');
        $data=[];
        $order = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.user_id')
            ->join('ships', 'orders.ship_id', '=', 'ships.ship_id')
            ->join('payments', 'orders.payment_id', '=', 'payments.payment_id')
            ->where('users.user_id','=',$user_id)
            ->where('orders.order_status','=',1)
            ->where('payments.payment_status','=',1)
            ->orderBy('order_create', 'desc')
            ->get();
        $data['order']=$order;
        return view('user.historyOrder',$data);
    }
}
