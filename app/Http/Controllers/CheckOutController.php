<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Cart;
use function GuzzleHttp\Psr7\uri_for;

class CheckOutController extends Controller
{
    //
    public function checkout()
    {
        $cart = session()->get('cart');
        foreach ($cart as $value) {
            $product = DB::table('product_cars')->where('product_id', '=', $value['product_id'])->first();
            if ($product->quantity == $value['quantity'] || $product->quantity > $value['quantity']) {
                return view('pages.cart.checkout');
            } else {
                return redirect()->back();
            }

        }

    }

    public function save_checkout(Request $request)
    {

        $request->session()->put('full_name_ship', $request->full_name_ship);
        $request->session()->put('email_ship', $request->email_ship);
        if (isset($request->city)) {
            $request->session()->put('address_ship', $request->address . ',' . $request->city);
        } else {
            $request->session()->put('address_ship', $request->address);
        }
        $request->session()->put('phone_no_ship', $request->phone_no_ship);
        $request->session()->put('description_ship', $request->description_ship);

        return redirect()->route('user.payment');
    }

    public function payment()
    {
        return view('pages.cart.payment');
    }

    public function save_payment(Request $request)
    {

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        try {
            if (Session('cart') != null) {
                $dataShip = [];
                $ship_id = $dataShip['ship_id'] = mt_rand();
                $dataShip['full_name_ship'] = Session()->get('full_name_ship');
                $dataShip['email_ship'] = Session()->get('email_ship');
                $dataShip['address_ship'] = Session()->get('address_ship');
                $dataShip['phone_no_ship'] = Session()->get('phone_no_ship');
                $dataShip['description_ship'] = Session()->get('description_ship');
                $dataShip['created_ship'] = $date;

                DB::table('ships')->insert($dataShip);

                $request->session()->put('ship_id', $ship_id);

                $data = [];
                $payment_id = $data['payment_id'] = mt_rand();
                $payment_method = $data['payment_method'] = $request->payment_method;
                $data['payment_status'] = '0';
                $data['payment_created'] = $date;

                DB::table('payments')->insertGetId($data);
                //--
                $orderData = [];
                $priceAll = Session()->get('total');
                $priceOrder = str_replace(',', '', $priceAll);
                $priceOrder = str_replace('.00', '', $priceOrder);
                $order_id = $orderData['order_id'] = mt_rand();
                $orderData['user_id'] = Session()->get('user_id');
                $orderData['ship_id'] = Session()->get('ship_id');
                $orderData['payment_id'] = $payment_id;
                $orderData['total'] = $priceOrder;
                $orderData['order_status'] = "0";
                $orderData['order_create'] = $date;
                $result1 = DB::table('orders')->insertGetId($orderData);

                $content = Session('cart');
                foreach ($content as $key => $valueC) {
                    $orderDetailData = [];
                    $price = str_replace(',', '', $valueC['deposit']);
                    $price = str_replace('.', '', $price);
                    $orderDetailData['order_details_id'] = mt_rand();
                    $orderDetailData['order_id'] = $order_id;
                    $orderDetailData['product_id'] = $valueC['product_id'];
                    $orderDetailData['product_price'] = $price;
                    $orderDetailData['product_quantity'] = $valueC['quantity'];
                    if ($valueC['type_id'] == '2') {
                        $orderDetailData['order_detail_create'] = $valueC['date_begin'];
                        $orderDetailData['order_detail_end'] = $valueC['date_end'];
                    } else {
                        $orderDetailData['order_detail_create'] = now();
                        $orderDetailData['order_detail_end'] = now();
                    }
                    DB::table('order_details')->insertGetId($orderDetailData);
                }
            }else{
                return redirect()->route('user.order.cart');
            }
            Session()->put('total', null);
            Session()->put('cart', null);
            $request->session()->put('date_begin', null);
            $request->session()->put('date_end', null);
            $request->session()->put('full_name_ship', null);
            $request->session()->put('email_ship', null);
            $request->session()->put('address_ship', null);
            $request->session()->put('phone_no_ship', null);
            $request->session()->put('description_ship', null);
            $request->session()->put('ship_id', null);


            if ($payment_method == '2') {
                return view('pages.cart.handcash');
            } else if ($payment_method == '1') {
                return view('pages.cart.handcash');
            } else {
                return view('pages.cart.handcash');
            }
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Lỗi');
        }


    }
}
