<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use mysql_xdevapi\Exception;
use Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [];
        $order = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.user_id')
            ->join('ships', 'orders.ship_id', '=', 'ships.ship_id')
            ->join('payments', 'orders.payment_id', '=', 'payments.payment_id')
            ->where('order_status','=', '0')
            ->where('payments.payment_status','!=', '1')
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
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
            ->join('products', 'products.product_id', '=', 'order_details.product_id')
            ->join('post_types', 'products.type_id', '=', 'post_types.type_id')
            ->where('order_id','=',$id)
            ->where('products.deleted_at',null)
            ->get();
        $data['orderDetails']=$orderDetails;

        return view('order.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        try {
            $data1 = [];
            $data = [];

            $data1['payment_status'] = $request->payment_status;
            if ($data1['payment_status']) {
                DB::table('payments')
                    ->join('orders', 'orders.payment_id', '=', 'payments.payment_id')
                    ->where('orders.order_id', $id)
                    ->update($data1);
            }

            if (isset($request->order_status)) {
                $data['order_status'] = $request->order_status;
                DB::table('orders')
                    ->where('order_id', $id)
                    ->update($data);

                return redirect()->route('admin.order.list')->with('message','Đơn đã hoàn tất');
            }

        } catch (\Exception $exception) {
            return redirect()->back()->with('error','không được để trống');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request, $id)
    {

        try {
            $data = DB::table('order_details')
                ->where('order_id', '=', $id)
                ->get();
            $data_orders = DB::table('orders')
                ->where('order_id', '=', $id)
                ->first();
            foreach ($data as $value) {
                $data_product = DB::table('products')
                    ->where('product_id', $value->product_id)
                    ->where('products.deleted_at',null)
                    ->first();
                if ($data_product) {
                    DB::table('products')
                        ->where('product_id', $value->product_id)
                        ->where('products.deleted_at',null)
                        ->update(['quantity' => $data_product->quantity + $value->product_quantity]);
                }
            }
            DB::table('order_details')
                ->where('order_id', '=', $id)
                ->delete();
            DB::table('orders')
                ->where('order_id', '=', $id)->delete();
            DB::table('payments')
                ->where('payment_id', '=', $data_orders->payment_id)->delete();
            DB::table('ships')
                ->where('ship_id', '=', $data_orders->ship_id)->delete();

            return redirect()->route('admin.order.list')->with('message', 'Xóa đơn hàng thành công');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Xóa đơn hàng không thành công');
        }
    }
    public function list_completed(){
        $data = [];
        $order = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.user_id')
            ->join('ships', 'orders.ship_id', '=', 'ships.ship_id')
            ->join('payments', 'orders.payment_id', '=', 'payments.payment_id')
            ->where('order_status','=', '1')
            ->where('payments.payment_status','=', '1')
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
            ->join('products', 'products.product_id', '=', 'order_details.product_id')
            ->join('post_types', 'products.type_id', '=', 'post_types.type_id')
            ->where('order_id','=',$id)
            ->where('products.deleted_at',null)
            ->get();
        $data['orderDetails']=$orderDetails;

        return view('complete-bill.detail', $data);
    }
}
