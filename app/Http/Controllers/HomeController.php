<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data = [];
        //xe giảm giá trong tuần
        $saleWeek = DB::table('product_cars')
            ->join('brand_products', 'product_cars.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
            ->join('type_vehicles', 'product_cars.type_vehicles_id', '=', 'type_vehicles.type_vehicles_id')
            ->join('show_products', 'product_cars.product_id', '=', 'show_products.product_id')
            ->where('sale_week', '!=', '0')
            ->where('status','!=','4')
            ->where('updated_sale_week','>',now())
            ->orderBy('product_cars.created_at', 'desc')
            ->get();
        //xe bán
        $Sell = DB::table('product_cars')
            ->join('brand_products', 'product_cars.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
            ->join('type_vehicles', 'product_cars.type_vehicles_id', '=', 'type_vehicles.type_vehicles_id')
            ->join('show_products', 'product_cars.product_id', '=', 'show_products.product_id')
            ->where('product_cars.type_id', '=', '1')
            ->where('status','!=','4')
            ->where('updated_sale_week','>',now())
            ->orderBy('product_cars.created_at', 'desc')
            ->get();
        //Xe cho thuê
        $Rent = DB::table('product_cars')
            ->join('brand_products', 'product_cars.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
            ->join('type_vehicles', 'product_cars.type_vehicles_id', '=', 'type_vehicles.type_vehicles_id')
            ->join('show_products', 'product_cars.product_id', '=', 'show_products.product_id')
            ->where('product_cars.type_id', '=', '2')
            ->where('status','!=','4')
            ->where('updated_sale_week','>',now())
            ->orderBy('product_cars.created_at', 'desc')
            ->get();
        $data['Rent']=$Rent;
        $data['Sell']=$Sell;
        $data['saleWeek'] = $saleWeek;

        return view('pages.home',$data);
    }

    public function list(Request $request){
        $data=[];
        $product = DB::table('product_cars')
            ->join('brand_products', 'product_cars.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
            ->join('type_vehicles', 'product_cars.type_vehicles_id', '=', 'type_vehicles.type_vehicles_id')
            ->join('show_products', 'product_cars.product_id', '=', 'show_products.product_id')
            ->where('status','!=','4')
            ->orderBy('product_cars.created_at', 'desc')
            ->paginate(10);
        //--show danh mục
        if (!empty($request->type_id_search)){
            $product = DB::table('product_cars')
                ->join('brand_products', 'product_cars.brand_id', '=', 'brand_products.brand_id')
                ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
                ->join('type_vehicles', 'product_cars.type_vehicles_id', '=', 'type_vehicles.type_vehicles_id')
                ->join('show_products', 'product_cars.product_id', '=', 'show_products.product_id')
                ->where('status','!=','4')
                ->where('product_cars.type_id','=',$request->type_id_search)
                ->orderBy('product_cars.created_at', 'desc')
                ->paginate(10);
        }

        $categoryPostType = DB::table('post_types')->get();
        $categoryBrand = DB::table('brand_products')->get();
        $categoryTypeVehicles = DB::table('type_vehicles')->get();
        $data['post_types']=$categoryPostType;
        $data['brand_products']=$categoryBrand;
        $data['type_vehicles']=$categoryTypeVehicles;
        $data['product']=$product;
        return view('pages.list',$data);
    }
    public function list_pagination(Request $request){
        $data=[];
        if ($request->ajax()){
            $product = DB::table('product_cars')
                ->join('brand_products', 'product_cars.brand_id', '=', 'brand_products.brand_id')
                ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
                ->join('type_vehicles', 'product_cars.type_vehicles_id', '=', 'type_vehicles.type_vehicles_id')
                ->join('show_products', 'product_cars.product_id', '=', 'show_products.product_id')
                ->where('status','!=','4')
                ->orderBy('product_cars.created_at', 'desc')
                ->paginate(10);
            $data['product']=$product;
            return view('pages.list',$data)->render();
        }
    }

    public function detail($id){
        $data=[];
        $detailProduct = DB::table('product_cars')
            ->join('brand_products', 'product_cars.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
            ->join('type_vehicles', 'product_cars.type_vehicles_id', '=', 'type_vehicles.type_vehicles_id')
            ->join('show_products', 'product_cars.product_id', '=', 'show_products.product_id')
            ->where('status','!=','4')
            ->where('product_cars.product_id','=',$id)
            ->orderBy('product_cars.created_at', 'desc')
            ->get();
        $photo = DB::table('product_photos')
            ->where('product_id','=',$id)
            ->get();
        $data['photo']=$photo;
        foreach ($detailProduct as $keyDP =>$valueDP){
            $brand_id = $valueDP->brand_id;
            $tv = $valueDP->type_vehicles_id;
        }
        $relatedProduct = DB::table('product_cars')
            ->join('brand_products', 'product_cars.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
            ->join('type_vehicles', 'product_cars.type_vehicles_id', '=', 'type_vehicles.type_vehicles_id')
            ->join('show_products', 'product_cars.product_id', '=', 'show_products.product_id')
            ->where('status','!=','4')
            ->where('brand_products.brand_id','=',$brand_id)
            ->where('type_vehicles.type_vehicles_id','=',$tv)
            ->whereNotIn('product_cars.product_id',[$id])
            ->orderBy('product_cars.created_at', 'desc')
            ->get();
        $data['relatedProduct']=$relatedProduct;
        $data['detailProduct']=$detailProduct;

        return view('pages.detail',$data);
    }

    public function show_category_type ($id){
        $data=[];
        $product_type = DB::table('product_cars')
            ->join('brand_products', 'product_cars.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
            ->join('type_vehicles', 'product_cars.type_vehicles_id', '=', 'type_vehicles.type_vehicles_id')
            ->join('show_products', 'product_cars.product_id', '=', 'show_products.product_id')
            ->where('status','!=','4')
            ->where('product_cars.type_id','=',$id)
            ->orderBy('product_cars.created_at', 'desc')
            ->get();
        $categoryPostType = DB::table('post_types')->get();
        $categoryBrand = DB::table('brand_products')->get();
        $categoryTypeVehicles = DB::table('type_vehicles')->get();
        $data['post_types']=$categoryPostType;
        $data['brand_products']=$categoryBrand;
        $data['type_vehicles']=$categoryTypeVehicles;
        $data['product_type']=$product_type;
        return view('pages.category.category_type',$data);
    }
    public function show_category_brand ($id){
        $data=[];
        $product_brand = DB::table('product_cars')
            ->join('brand_products', 'product_cars.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
            ->join('type_vehicles', 'product_cars.type_vehicles_id', '=', 'type_vehicles.type_vehicles_id')
            ->join('show_products', 'product_cars.product_id', '=', 'show_products.product_id')
            ->where('status','!=','4')
            ->where('product_cars.brand_id','=',$id)
            ->orderBy('product_cars.created_at', 'desc')
            ->get();
        $categoryPostType = DB::table('post_types')->get();
        $categoryBrand = DB::table('brand_products')->get();
        $categoryTypeVehicles = DB::table('type_vehicles')->get();
        $data['post_types']=$categoryPostType;
        $data['brand_products']=$categoryBrand;
        $data['type_vehicles']=$categoryTypeVehicles;
        $data['product_brand']=$product_brand;
        return view('pages.category.category_brand',$data);
    }
    public function show_category_tv ($id){
        $data=[];
        $product_tv = DB::table('product_cars')
            ->join('brand_products', 'product_cars.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
            ->join('type_vehicles', 'product_cars.type_vehicles_id', '=', 'type_vehicles.type_vehicles_id')
            ->join('show_products', 'product_cars.product_id', '=', 'show_products.product_id')
            ->where('status','!=','4')
            ->where('product_cars.type_vehicles_id','=',$id)
            ->orderBy('product_cars.created_at', 'desc')
            ->get();
        $categoryPostType = DB::table('post_types')->get();
        $categoryBrand = DB::table('brand_products')->get();
        $categoryTypeVehicles = DB::table('type_vehicles')->get();
        $data['post_types']=$categoryPostType;
        $data['brand_products']=$categoryBrand;
        $data['type_vehicles']=$categoryTypeVehicles;
        $data['product_tv']=$product_tv;
        return view('pages.category.category_tv',$data);
    }
    public function search_product(Request $request){

        $product = DB::table('product_cars')
            ->join('brand_products', 'product_cars.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
            ->join('type_vehicles', 'product_cars.type_vehicles_id', '=', 'type_vehicles.type_vehicles_id')
            ->join('show_products', 'product_cars.product_id', '=', 'show_products.product_id')
            ->where('status','!=','4')
            ->where('caption','like','%' . $request->get('searchQuest') .'%')
            ->get();

        return json_encode($product);
    }
}
