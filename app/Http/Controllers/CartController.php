<?php

namespace App\Http\Controllers;

use App\Models\Product_car;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use MongoDB\Driver\Session;

session_start();

class CartController extends Controller
{
    //
    public function save_cart(Request $request){
        $data1=[];

        $product_id = $request->productid_hidden;
        $product_info = DB::table('product_cars')
            ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
            ->where('product_id','=',$product_id)->get();
        foreach ($product_info as $value){
            $data1['id']=$product_id;
            $data1['qty']='1';
            $data1['name']=$value->name_car;
            $data1['price']=$value->deposit;
            $data1['weight']='123';
            $data1['options']['type_id']=$value->type_id;
            $data1['options']['type']=$value->type_name;
            $data1['options']['image']=$value->thumbnails;
        }


        Cart::add($data1);
        //Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        Cart::destroy();
        return redirect()->back();

    }
    public function addCart(Request $request,$id)
    {
        $product_id = $id;
        $product = DB::table('product_cars')
            ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
            ->where('product_id', '=', $product_id)->first();
        $cart = session()->get('cart');
        if ($cart != null) {
            $is_available = 0;
            foreach ($cart as $key => $value) {
                if ($value['product_id'] == $product->product_id) {
                    $is_available++;
                }

            }
            if ($is_available == 0) {
                $cart[$product_id] = [
                    'product_id' => $product_id,
                    'name_car' => $product->name_car,
                    'quantity' => 1,
                    'type_id' => $product->type_id,
                    'deposit' => $product->deposit,
                    'thumbnails' => $product->thumbnails,
                    'type_name' => $product->type_name
                ];
                Session()->put('cart', $cart);
            }
        } else {
            $cart[$product_id] = [
                'product_id' => $product_id,
                'name_car' => $product->name_car,
                'quantity' => 1,
                'type_id' => $product->type_id,
                'deposit' => $product->deposit,
                'thumbnails' => $product->thumbnails,
                'type_name' => $product->type_name
            ];
            Session()->put('cart', $cart);
        }

        session()->put('cart', $cart);
    }
    public function show_cart(){
        $data=[];
        $categoryPostType = DB::table('post_types')->get();
        $categoryBrand = DB::table('brand_products')->get();
        $categoryTypeVehicles = DB::table('type_vehicles')->get();
        $data['post_types']=$categoryPostType;
        $data['brand_products']=$categoryBrand;
        $data['type_vehicles']=$categoryTypeVehicles;
        return view('pages.cart.show_cart',$data);

    }
    public function update_cart_quantity(Request $request){
        $data = $request->all();

        $cart = Session()->get('cart');
        if ($cart == true){
            foreach ($data['cart_qty'] as $key =>$value){
                if ($value != 0 || $value != null){
                    foreach ($cart as $key1 =>$value1){
                        echo $key;
                        if ($value1['product_id'] == $key){
                            $cart[$key1]['quantity'] =$value;
                        }
                    }
                }
            }
            Session()->put('cart', $cart);
            return redirect()->back();
        }


        //return view('pages.cart.show_cart');
    }

    public function delete_cart($id){

        $cart = Session()->get('cart');
        if ($cart == true){
            foreach ($cart as $key =>$value){
                if ($key= $id){
                    unset($cart[$key]);
                }
            }
            Session()->put('cart', $cart);
            return redirect()->back();
        }

    }
    public function delete_cart_all(){
        $cart = Session()->get('cart');
        if ($cart == true){
            Session()->put('cart',null);
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }
}
