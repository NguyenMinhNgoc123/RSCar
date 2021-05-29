<?php

namespace App\Http\Controllers;

use App\Models\Product_car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cart;
session_start();

class CartController extends Controller
{
    //
    public function save_cart(Request $request){
        $categoryPostType = DB::table('post_types')->get();
        $categoryBrand = DB::table('brand_products')->get();
        $categoryTypeVehicles = DB::table('type_vehicles')->get();
        $data['post_types']=$categoryPostType;
        $data['brand_products']=$categoryBrand;
        $data['type_vehicles']=$categoryTypeVehicles;

        $product_id = $request->productid_hidden;
        $product_info = Product_car::where('product_id','=',$product_id)->get();

        Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        return view('pages.cart.show_cart',$data);
    }
}
