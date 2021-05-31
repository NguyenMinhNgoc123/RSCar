<?php

namespace App\Http\Controllers;

use App\Models\Product_car;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        //Cart::destroy();
        return redirect()->route('user.show-cart');

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
        $rowId=$request->rowId_cart;
        $quantity =$request->cart_quantity;

        Cart::update($rowId, $quantity);
        return view('pages.cart.show_cart');
    }

    public function delete_cart($rowId){
        Cart::update($rowId, 0);
        return redirect()->route('user.show-cart');
    }
}
