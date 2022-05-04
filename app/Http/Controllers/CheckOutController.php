<?php

namespace App\Http\Controllers;

use App\Mail\paymentMail;
use App\Models\Ship;
use App\Models\User;
use Faker\Core\Number;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Cart;
use Mail;

class CheckOutController extends Controller
{
    public function checkout()
    {
        if ($this->back_page() == 0) {
            return redirect()->route('user.show-cart');
        };

        $carts = DB::table('carts as c')
            ->join('products as p', 'p.product_id', '=', 'c.product_id')
            ->where('user_id', Session()->get('user_id'))
            ->select(['c.quantity as cart_quantity', 'p.quantity as quantity_product', 'p.*'])
            ->get();
        foreach ($carts as $val) {
            if ($val->cart_quantity > $val->quantity_product)  {
                return redirect()->back()->with('error', 'Đã đạt giới hạn số lượng');
            }
        }
        $data['info'] = DB::table('users')
            ->where('user_id', Session()->get('user_id'))
            ->first();
        return view('pages.cart.checkout', $data);
    }

    public function save_checkout(Request $request)
    {
        if ($this->back_page() == 0) {
            return redirect()->route('user.show-cart');
        };
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date1 = date('Y/m/d H:i:s');
        if (isset($request->full_name_ship) && isset($request->email_ship) && isset($request->address) && isset($request->phone_no_ship)) {
            $data = [
                'full_name_ship' => $request->full_name_ship,
                'email_ship' => $request->email_ship,
                'address_ship' => $request->address,
                'phone_no_ship' => $request->phone_no_ship,
                'description_ship' => $request->description_ship,
                'created_ship' => $date1
            ];
            return redirect()->route('user.payment', $data);
        } else {
            return redirect()->back()->with('error', 'Không được để trống các trường');
        }
    }

    public function payment()
    {
        if ($this->back_page() == 0) {
            return redirect()->route('user.show-cart');
        };

        $data['carts'] = DB::table('carts as c')
            ->join('products as p', 'p.product_id', '=', 'c.product_id')
            ->where('user_id', Session()->get('user_id'))
            ->select(['c.quantity as cart_quantity', 'p.quantity as quantity_product', 'p.*'])
            ->get();
        $sum_cart = 0;

        foreach ($data['carts'] as $key => $value) {
            if ($value->price && $value->quantity) {
                $sum_cart = $sum_cart + ($value->price * $value->cart_quantity);
            }
        }
        $data['sum_cart'] = (($sum_cart * 2) / 100) + $sum_cart;
        return view('pages.cart.payment', $data);
    }

    public function save_payment(Request $request)
    {
        if ($this->back_page() == 0) {
            return redirect()->route('user.show-cart');
        };

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        if ($request->payment_method) {
            try {
                $dataShip = [];
                $ship_id = $dataShip['ship_id'] = mt_rand();
                $dataShip['full_name_ship'] = $request->full_name_ship;
                $dataShip['email_ship'] = $request->email_ship;
                $dataShip['address_ship'] = $request->address_ship;
                $dataShip['phone_no_ship'] = $request->phone_no_ship;
                $dataShip['description_ship'] = $request->description_ship;
                $dataShip['created_ship'] = $date;

                DB::table('ships')->insert($dataShip);

                $data = [];
                $payment_id = $data['payment_id'] = mt_rand();
                $payment_method = $data['payment_method'] = $request->payment_method;
                $data['payment_status'] = '0';
                $data['payment_created'] = $date;

                DB::table('payments')->insertGetId($data);

                $carts = DB::table('carts as c')
                    ->join('products as p', 'p.product_id', '=', 'c.product_id')
                    ->where('user_id', Session()->get('user_id'))
                    ->select(['c.quantity as cart_quantity', 'p.quantity as quantity_product', 'p.*'])
                    ->get();
                $sum_cart = 0;

                foreach ($carts as $key => $value) {
                    if ($value->price && $value->quantity) {
                        $sum_cart = $sum_cart + ($value->price * $value->cart_quantity);
                    }
                }
                $sum = (($sum_cart * 2) / 100) + $sum_cart;

                $orderData = [];
                $priceAll = $sum;
                $priceOrder = str_replace(',', '', $priceAll);
                $priceOrder = str_replace('.00', '', $priceOrder);
                $order_id = $orderData['order_id'] = mt_rand();
                $orderData['user_id'] = Session()->get('user_id');
                $orderData['ship_id'] = $ship_id;
                $orderData['payment_id'] = $payment_id;
                $orderData['total'] = $priceOrder;
                $orderData['order_status'] = "0";
                $orderData['order_create'] = $date;
                DB::table('orders')->insertGetId($orderData);

                $product_ids = [];
                foreach ($carts as $valueC) {
                    array_push($product_ids, ['product_id' => $valueC->product_id, 'quantity' => $valueC->quantity_product]);
                }

                foreach ($carts as $valueC) {

                    $orderDetailData = [];
                    $orderDetailData['order_details_id'] = mt_rand();
                    $orderDetailData['order_id'] = $order_id;
                    $orderDetailData['product_id'] = $valueC->product_id;
                    $orderDetailData['product_price'] = $valueC->price;
                    $orderDetailData['product_quantity'] = $valueC->quantity_product;
                    $orderDetailData['order_detail_create'] = now();
                    $orderDetailData['order_detail_end'] = now();
                    DB::table('order_details')->insert($orderDetailData);

                    $quantity_root = $this->get_quantity_product($product_ids, $valueC->product_id) - $valueC->quantity_product;
                    DB::table('products')
                        ->where('products.deleted_at',null)
                        ->where('product_id', $valueC->product_id)
                        ->update(['quantity' => $quantity_root]);
                }

                $order = DB::table('orders')
                    ->where('user_id', Session()->get('user_id'))
                    ->where('order_id', $order_id)
                    ->first();
                if ($order) {
                    DB::table('carts')
                        ->where('user_id', Session()->get('user_id'))
                        ->delete();
                }
                $data['total'] = $order->total;
                return view('pages.cart.handcash', $data);

            } catch (\Exception $exception) {
                return redirect()->back()->with('error', 'Lỗi');
            }
        }
    }

    public function send_payment()
    {
        $user['to'] = Session()->get('email');

        $detail = [
            'title' => 'CẢM ƠN BẠN ĐÃ MUA GIÀY CỦA CHÚNG TÔI',
            'url' => route('user.print-payment')
        ];

        $admin = DB::table('admins')->where('admin_id', '=', '1')->get();
        $order_customer = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.user_id')
            ->join('ships', 'orders.ship_id', '=', 'ships.ship_id')
            ->join('payments', 'orders.payment_id', '=', 'payments.payment_id')
            ->where('order_id', '=', Session()->get('order_id'))
            ->get();
        $details = DB::table('order_details')
            ->where('order_id', '=', Session()->get('order_id'))->get();

        Session()->put('data', $order_customer);
        Session()->put('data1', $admin);
        Session()->put('data2', $details);

        Mail::to($user['to'])->send(new paymentMail($detail));

        Session()->put('data', null);
        Session()->put('data1', null);
        Session()->put('data2', null);

        return redirect()->route('user.order.list')->with('message', 'Đã gửi hóa đơn vào email');


    }

    public function print_payment()
    {
        $data = [];
        $admin = DB::table('admins')->where('admin_id', '=', '1')->first();
        $order_customer = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.user_id')
            ->join('ships', 'orders.ship_id', '=', 'ships.ship_id')
            ->join('payments', 'orders.payment_id', '=', 'payments.payment_id')
            ->where('order_id', '=', Session()->get('order_id'))
            ->first();
        $details = DB::table('order_details')
            ->where('order_id', '=', Session()->get('order_id'))->get();
        $data['details'] = $details;
        $data['admin'] = $admin;
        $data['order_customer'] = $order_customer;
        return view('pages.cart.formEmail', $data);
    }

    function back_page(): int
    {
        $data = DB::table('carts as c')
            ->join('products as p', 'p.product_id', '=', 'c.product_id')
            ->where('user_id', Session()->get('user_id'))
            ->select(['c.quantity as cart_quantity', 'p.quantity as quantity_product', 'p.*'])
            ->count();

        return $data != 0 ? 1 : 0;
    }

    function get_quantity_product($data, $id): int
    {
        $quantity = 0;
        foreach ($data as $key => $value) {
            if ($value['product_id'] == $id) {
                $quantity = $value['quantity'];
            }
        }
        return $quantity;
    }
}
