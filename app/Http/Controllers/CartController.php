<?php

namespace App\Http\Controllers;

use App\Models\Product_car;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use MongoDB\Driver\Session;
use mysql_xdevapi\Table;

session_start();

class CartController extends Controller
{
    //
    public function save_cart(Request $request)
    {
        $data1 = [];

        $product_id = $request->productid_hidden;
        $product_info = DB::table('products')
            ->join('post_types', 'products.type_id', '=', 'post_types.type_id')
            ->where('products.deleted_at',null)
            ->where('product_id', '=', $product_id)->get();
        if (!$product_info) {
            return redirect()->back();
        }

        return redirect()->back();

    }

    public function addCart(Request $request, $id)
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        $product_id = $id;
        $product = DB::table('products')
            ->join('post_types', 'products.type_id', '=', 'post_types.type_id')
            ->where('products.deleted_at',null)
            ->where('product_id', '=', $product_id)->first();

        if ($product) {
            $check_exist_cart = DB::table('carts')
                ->where('user_id', Session()->get('user_id'))
                ->where('product_id', $product_id)
                ->first();
            if ($check_exist_cart) {
                $data_update['quantity'] = $check_exist_cart->quantity + 1;
                DB::Table('carts')
                    ->where('id', $check_exist_cart->id)
                    ->update($data_update);
            } else {
                $data_update['product_id'] = $product_id;
                $data_update['user_id'] = Session()->get('user_id');
                $data_update['quantity'] = 1;
                $data_update['created_at'] = $date;
                $data_update['updated_at'] = $date;
                DB::Table('carts')->insert($data_update);
            }
        }


    }

    public function show_cart()
    {
        $data['carts'] = DB::table('carts as c')
            ->join('products as p', 'p.product_id', '=', 'c.product_id')
            ->where('user_id', Session()->get('user_id'))
            ->select(['c.quantity as cart_quantity', 'c.id as id_cart', 'p.quantity as quantity_product', 'p.*'])
            ->get();
        $sum_cart = 0;
        $data['sold'] = 0;
        foreach ($data['carts'] as $value) {
            if ($value->price) {
                $value->sum_product = $value->price * $value->cart_quantity;
                $sum_cart = $sum_cart + ($value->price * $value->cart_quantity);
            }
            if ($value->quantity == 0 || $value->quantity < $value->cart_quantity) {
                $data['sold'] = 1;
            }
        }
        $data['count_product'] = count($data['carts']);
        $data['sum_cart'] = $sum_cart;
        return view('pages.cart.show_cart', $data);
    }

    public function update_cart_quantity(Request $request)
    {
        if ($request->cart_qty) {
            foreach ($request->cart_qty as $key => $item) {
                $product = DB::table('products')
                    ->where('products.deleted_at',null)
                    ->where('product_id', $key)
                    ->first();
                if ($product->quantity >= $item) {
                    DB::table('carts')
                        ->where('product_id', $key)
                        ->where('user_id', Session()->get('user_id'))
                        ->update(['quantity' => $item]);
                } else {
                    return redirect()->back()->with('error', 'Đã đạt giới hạn số lượng');
                }
            }
            return redirect()->back();
        }
    }

    public function delete_cart($id)
    {
        $check_exist = DB::table('carts')->where('id', $id)->count();
        if ($check_exist != 0) {
            DB::table('carts')->where('id', $id)->delete();
        }

        return $this->show_cart();
    }

    public function delete_cart_all()
    {

        DB::table('carts')
            ->where('user_id', Session()->get('user_id'))
            ->delete();
        return redirect()->back();
    }
}
