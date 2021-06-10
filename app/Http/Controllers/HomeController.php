<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $data = [];
        //xe giảm giá trong tuần
        $saleWeek = DB::table('product_cars')
            ->join('brand_products', 'product_cars.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
            ->join('type_vehicles', 'product_cars.type_vehicles_id', '=', 'type_vehicles.type_vehicles_id')
            ->join('show_products', 'product_cars.product_id', '=', 'show_products.product_id')
            ->where('sale_week', '!=', '0')
            ->where('status','!=','4')
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
            ->orderBy('product_cars.created_at', 'desc')
            ->get();
        //Bài viết giá tốt
        $newPost = DB::table('product_cars')
            ->join('brand_products', 'product_cars.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
            ->join('type_vehicles', 'product_cars.type_vehicles_id', '=', 'type_vehicles.type_vehicles_id')
            ->join('show_products', 'product_cars.product_id', '=', 'show_products.product_id')
            ->where('best_seller', '!=', '0')
            ->where('status','!=','4')
            ->orderBy('product_cars.created_at', 'desc')
            ->get();
        $categoryBrand = DB::table('brand_products')
            ->inRandomOrder(10)->limit(3)->get();
//        BrandProduct::all()->random(3);
        $data['brand_products']=$categoryBrand;
        $data['newPost']=$newPost;
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
            ->simplePaginate(12);
            //->get();

//        //--show danh mục
//        if (!empty($request->type_id_search)){
//            $product = DB::table('product_cars')
//                ->join('brand_products', 'product_cars.brand_id', '=', 'brand_products.brand_id')
//                ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
//                ->join('type_vehicles', 'product_cars.type_vehicles_id', '=', 'type_vehicles.type_vehicles_id')
//                ->join('show_products', 'product_cars.product_id', '=', 'show_products.product_id')
//                ->where('status','!=','4')
//                ->where(DB::raw('CONCAT(caption)'), 'LIKE', "%{$request->type_id_search}%")
//                ->orderBy('product_cars.created_at', 'desc')
//                ->paginate(12);
//                //->get();
//        }

        $categoryPostType = DB::table('post_types')->get();
        $categoryBrand = DB::table('brand_products')->get();
        $categoryTypeVehicles = DB::table('type_vehicles')->get();
        $data['post_types']=$categoryPostType;
        $data['brand_products']=$categoryBrand;
        $data['type_vehicles']=$categoryTypeVehicles;
        $data['product']=$product;
        return view('pages.list',$data);
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

        $data=[];
        //--show danh mục
        //if (!empty($request->search_name)){
            $product = DB::table('product_cars')
                ->join('brand_products', 'product_cars.brand_id', '=', 'brand_products.brand_id')
                ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
                ->join('type_vehicles', 'product_cars.type_vehicles_id', '=', 'type_vehicles.type_vehicles_id')
                ->join('show_products', 'product_cars.product_id', '=', 'show_products.product_id')
                ->where('status','!=','4')
                ->where(DB::raw('CONCAT(caption,price,deposit)'), 'LIKE', "%{$request->search_name}%")
                ->orderBy('product_cars.created_at', 'desc')
                ->paginate(12);
                //->get();
            $data['product']=$product;
            $output="";
            $output .='<ul class="products-grid" id="dynamic-row">';
            foreach ($product as $valueP){
                $status ='';
                if($valueP->hot_car != '0' && $valueP->status == '0'){
                    $status='Hot';
                }else if($valueP->status == '1'){
                    $status='Đã bán';
                }else if ($valueP->status == '2'){
                    $status='Đã Cọc';
                }else if($valueP->status == '3'){
                    $status='Đã thuê';
                }else{
                    $status ='';
                }

                if ($valueP->discount != '0'){
                    $discount =$valueP->discount.'%';
                }else{
                    $discount='Giá cực tốt';
                }

                if ($valueP->type_id == '1'){
                    $gia = number_format($valueP->price). 'vnđ';
                }else{
                    $gia = number_format($valueP->deposit). 'vnđ/ngày';
                }

                $output .='<li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
            <div class="item-inner">
                <div class="item-img">
                    <div class="item-img-info"><a href="'.route('detail',$valueP->product_id).'"
                                                  title="Retis lapen casen"
                                                  class="product-image"><img
                                src="'.asset("/product-images/{$valueP->thumbnails}").'"
                                alt="Retis lapen casen"></a>

                        <div class="new-label new-top-left">'. $status .'</div>

                        <div class="sale-label sale-top-left">'.$discount.'</div>

                        <div class="item-box-hover">
                            <div class="box-inner">
                                <div class="add_cart">

                                        <button class="button btn-cart" type="submit" data-login="'.Session()->get('user_id').'" data-id="'.$valueP->product_id.'" ></button>

                                </div>
                                <div class="product-detail-bnt">
                                    <a
                                        href="'.route('detail',$valueP->product_id).'"
                                        class="button detail-bnt"><span>Quick View</span></a>
                                </div>
                                <div class="actions"><span class="add-to-links"><a
                                            href="#" class="link-wishlist"
                                            title="Add to Wishlist"><span>Add to Wishlist</span></a> </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="item-info">
                    <div class="info-inner">
                        <div class="item-title"><a href="'.route('detail',$valueP->product_id).'"
                                                   title="Retis lapen casen">'.$valueP->caption.'</a>
                        </div>
                        <div class="item-content">
                            <div class="rating">
                                <div class="ratings">
                                    <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                    </div>
                                    <p class="rating-links"><a href="#">1
                                            Review(s)</a> <span
                                            class="separator">|</span> <a href="#">Add
                                            Review</a></p>
                                </div>
                            </div>
                            <div class="item-price">
                                <div class="price-box">
                                        <span class="regular-price"><span class="price">'.$gia.'</span> </span>

                                </div>
                            </div>
                            <div class="other-info">
                                <div class="col-km"><i class="fa fa-tachometer"></i>
                                    '.$valueP->number_kilometers.'
                                </div>
                                <div class="col-engine"><i class="fa fa-gear"></i>
                                    '.$valueP->type_name.'
                                </div>
                                <div class="col-date"><i class="fa fa-calendar"
                                                         aria-hidden="true"></i>
                                    '.$valueP->model.'
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        ';
        }
            $output.='</ul>';
            echo $output;
        }
//    }
}
