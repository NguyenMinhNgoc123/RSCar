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
        //giảm giá trong tuần
        $saleWeek = DB::table('products')
            ->join('brand_products', 'products.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'products.type_id', '=', 'post_types.type_id')
            ->join('type_shoes', 'products.type_shoes_id', '=', 'type_shoes.type_shoes_id')
            ->join('show_products', 'products.product_id', '=', 'show_products.product_id')
            ->where('sale_week', '!=', '0')
            ->where('products.deleted_at',null)
            ->where('status', '!=', '4')
            ->orderBy('products.created_at', 'desc')
            ->get();
        // bán
        $Sell = DB::table('products')
            ->join('brand_products', 'products.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'products.type_id', '=', 'post_types.type_id')
            ->join('type_shoes', 'products.type_shoes_id', '=', 'type_shoes.type_shoes_id')
            ->join('show_products', 'products.product_id', '=', 'show_products.product_id')
            ->where('products.type_id', '=', '1')
            ->where('status', '!=', '4')
            ->where('products.deleted_at',null)
            ->orderBy('products.created_at', 'desc')
            ->get();
        // cho thuê
        $Rent = DB::table('products')
            ->join('brand_products', 'products.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'products.type_id', '=', 'post_types.type_id')
            ->join('type_shoes', 'products.type_shoes_id', '=', 'type_shoes.type_shoes_id')
            ->join('show_products', 'products.product_id', '=', 'show_products.product_id')
            ->where('products.type_id', '=', '2')
            ->where('products.deleted_at',null)
            ->where('status', '!=', '4')
            ->orderBy('products.created_at', 'desc')
            ->get();
        //Bài viết giá tốt
        $newPost = DB::table('products')
            ->join('brand_products', 'products.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'products.type_id', '=', 'post_types.type_id')
            ->join('type_shoes', 'products.type_shoes_id', '=', 'type_shoes.type_shoes_id')
            ->join('show_products', 'products.product_id', '=', 'show_products.product_id')
            ->where('best_seller', '!=', '0')
            ->where('products.deleted_at',null)
            ->where('status', '!=', '4')
            ->orderBy('products.created_at', 'desc')
            ->get();
        $categoryBrand = DB::table('brand_products')
            ->inRandomOrder(10)->limit(3)->get();
//        BrandProduct::all()->random(3);
        $data['brand_products'] = $categoryBrand;
        $data['newPost'] = $newPost;
        $data['Rent'] = $Rent;
        $data['Sell'] = $Sell;
        $data['saleWeek'] = $saleWeek;

        return view('pages.home', $data);
    }

    public function list(Request $request)
    {
        $data = [];
        $product = DB::table('products')
            ->join('brand_products', 'products.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'products.type_id', '=', 'post_types.type_id')
            ->join('type_shoes', 'products.type_shoes_id', '=', 'type_shoes.type_shoes_id')
            ->join('show_products', 'products.product_id', '=', 'show_products.product_id')
            ->where('status', '!=', '4')
            ->where('products.deleted_at',null)
            ->simplePaginate(15);
        //->get();


        $categoryPostType = DB::table('post_types')->get();
        $categoryBrand = DB::table('brand_products')->get();
        $categoryTypeVehicles = DB::table('type_shoes')->get();
        $data['post_types'] = $categoryPostType;
        $data['brand_products'] = $categoryBrand;
        $data['type_shoes'] = $categoryTypeVehicles;
        $data['product'] = $product;
        return view('pages.list', $data);
    }

    public function detail($id)
    {
        $data = [];
        $detailProduct = DB::table('products')
            ->join('brand_products', 'products.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'products.type_id', '=', 'post_types.type_id')
            ->join('type_shoes', 'products.type_shoes_id', '=', 'type_shoes.type_shoes_id')
            ->join('show_products', 'products.product_id', '=', 'show_products.product_id')
            ->where('status', '!=', '4')
            ->where('products.deleted_at',null)
            ->where('products.product_id', '=', $id)
            ->orderBy('products.created_at', 'desc')
            ->get();
        $photo = DB::table('product_photos')
            ->where('product_id', '=', $id)
            ->get();
        $data['photo'] = $photo;
        foreach ($detailProduct as $keyDP => $valueDP) {
            $brand_id = $valueDP->brand_id;
            $tv = $valueDP->type_shoes_id;
        }
        $relatedProduct = DB::table('products')
            ->join('brand_products', 'products.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'products.type_id', '=', 'post_types.type_id')
            ->join('type_shoes', 'products.type_shoes_id', '=', 'type_shoes.type_shoes_id')
            ->join('show_products', 'products.product_id', '=', 'show_products.product_id')
            ->where('status', '!=', '4')
            ->where('products.deleted_at',null)
            ->where('brand_products.brand_id', '=', $brand_id)
            ->where('type_shoes.type_shoes_id', '=', $tv)
            ->whereNotIn('products.product_id', [$id])
            ->orderBy('products.created_at', 'desc')
            ->get();
        $data['relatedProduct'] = $relatedProduct;
        $data['detailProduct'] = $detailProduct;

        return view('pages.detail', $data);
    }

    public function show_category(Request $request)
    {
        $data = [];
        $products = DB::table('products')
            ->join('brand_products', 'products.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'products.type_id', '=', 'post_types.type_id')
            ->join('type_shoes', 'products.type_shoes_id', '=', 'type_shoes.type_shoes_id')
            ->join('show_products', 'products.product_id', '=', 'show_products.product_id');
        $products->where('products.deleted_at',null);
        if ($request->brand) {
            $products->whereIn('products.brand_id', $request->brand);
        }
        if ($request->tv_name) {
            $products->whereIn('products.type_shoes_id', $request->tv_name);
        }
        if ($request->type) {
            $products->whereIn('products.type_id', $request->type);
        }
        $products->select('*');
        $product = $products->paginate(15);
        $data['product'] = $product;
        $output = "";
        $output .= '<ul class="products-grid" id="dynamic-row">';
        foreach ($product as $valueP) {
            $status = '';
            if ($valueP->hot_car != '0' && $valueP->status == '0') {
                $status = '<div class="new-label new-top-left">Hot</div>';
            } else if ($valueP->status == '1') {
                $status = '<div class="new-label new-top-left">Bán Chạy</div>';
            } else if ($valueP->status == '2') {
                $status = '<div class="new-label new-top-left">Đã Cọc</div>';
            } else if ($valueP->status == '3') {
                $status = '<div class="new-label new-top-left">Đã thuê</div>';
            } else {
                $status = '';
            }

            $payment = '';
            if ($valueP->quantity == 0) {
                $payment = '<div class="add_cart">

                                        <button class="button btn-cart" type="submit" data-login="' . Session()->get('user_id') . '" data-id="' . $valueP->product_id . '" ></button>

                                </div>';
            }

            if ($valueP->discount != '0') {
                $discount = $valueP->discount . '%';
            } else {
                $discount = 'Giá cực tốt';
            }

            if ($valueP->type_id == '1') {
                $gia = number_format($valueP->price) . 'vnđ';
            } else {
                $gia = number_format($valueP->deposit) . 'vnđ/ngày';
            }

            $output .= '<li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
            <div class="item-inner">
                <div class="item-img">
                    <div class="item-img-info"><a href="' . route('detail', $valueP->product_id) . '"
                                                  title="Retis lapen casen"
                                                  class="product-image"><img
                                src="' . asset("/product-images/{$valueP->thumbnails}") . '"
                                alt="Retis lapen casen"></a>

                        ' . $status . '

                        <div class="sale-label sale-top-left">' . $discount . '</div>

                        <div class="item-box-hover">
                            <div class="box-inner">
                                ' . $payment . '
                                <div class="product-detail-bnt">
                                    <a
                                        href="' . route('detail', $valueP->product_id) . '"
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
                        <div class="item-title"><a style="width:100%;
    white-space: pre-wrap;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
     display: -webkit-box;" href="' . route('detail', $valueP->product_id) . '"
                                                   title="Retis lapen casen">' . $valueP->caption . '</a>
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
                                        <span class="regular-price"><span class="price">' . $gia . '</span> </span>

                                </div>
                            </div>
                            <div class="other-info">
                                <div class="col-engine"><i class="fa fa-tachometer"></i> size: '. $valueP->size .'</div>
                                <div class="col-engine"><i class="fa fa-tachometer"></i> số lượng: '. $valueP->quantity .'</div>
                                <div class="col-engine"><i class="fa fa-tachometer"></i> '. $valueP->brand_name .'</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        ';
        }
        $output .= '</ul>';
        echo $output;
    }

    public function search_product(Request $request)
    {

        $data = [];
        //--show danh mục
        //if (!empty($request->search_name)){
        $product = DB::table('products')
            ->join('brand_products', 'products.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'products.type_id', '=', 'post_types.type_id')
            ->join('type_shoes', 'products.type_shoes_id', '=', 'type_shoes.type_shoes_id')
            ->join('show_products', 'products.product_id', '=', 'show_products.product_id')
            ->where('status', '!=', '4')
            ->where('products.deleted_at',null)
            ->where(DB::raw('CONCAT(caption,price,type_shoes.tv_name)'), 'LIKE', "%{$request->search_name}%")
            ->orderBy('products.created_at', 'desc')
            ->paginate(15);
        //->get();
        $data['product'] = $product;

        $output = "";
        $output .= '<ul class="products-grid" id="dynamic-row">';
        foreach ($product as $valueP) {
            $status = '';
            if ($valueP->hot_car != '0' && $valueP->status == '0') {
                $status = '<div class="new-label new-top-left">Hot</div>';
            } else if ($valueP->status == '1') {
                $status = '<div class="new-label new-top-left">Bán chạy</div>';
            } else if ($valueP->status == '2') {
                $status = '<div class="new-label new-top-left">Đã Cọc</div>';
            } else if ($valueP->status == '3') {
                $status = '<div class="new-label new-top-left">Đã thuê</div>';
            } else {
                $status = '';
            }

            $payment = '';
            if ($valueP->quantity == 0) {
                $payment = '<div class="add_cart">

                                        <button class="button btn-cart" type="submit" data-login="' . Session()->get('user_id') . '" data-id="' . $valueP->product_id . '" ></button>

                                </div>';
            }

            if ($valueP->discount != '0') {
                $discount = $valueP->discount . '%';
            } else {
                $discount = 'Giá cực tốt';
            }

            if ($valueP->type_id == '1') {
                $gia = number_format($valueP->price) . 'vnđ';
            } else {
                $gia = number_format($valueP->deposit) . 'vnđ/ngày';
            }

            $output .= '<li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
            <div class="item-inner">
                <div class="item-img">
                    <div class="item-img-info"><a href="' . route('detail', $valueP->product_id) . '"
                                                  title="Retis lapen casen"
                                                  class="product-image"><img
                                src="' . asset("/product-images/{$valueP->thumbnails}") . '"
                                alt="Retis lapen casen"></a>

                        ' . $status . '

                        <div class="sale-label sale-top-left">' . $discount . '</div>

                        <div class="item-box-hover">
                            <div class="box-inner">
                                ' . $payment . '
                                <div class="product-detail-bnt">
                                    <a
                                        href="' . route('detail', $valueP->product_id) . '"
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
                        <div class="item-title"><a style="width:100%;
    white-space: pre-wrap;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
     display: -webkit-box;" href="' . route('detail', $valueP->product_id) . '"
                                                   title="Retis lapen casen">' . $valueP->caption . '</a>
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
                                        <span class="regular-price"><span class="price">' . $gia . '</span> </span>

                                </div>
                            </div>
                            <div class="other-info">
                                <div class="col-engine"><i class="fa fa-tachometer"></i> size: '. $valueP->size .'</div>
                                <div class="col-engine"><i class="fa fa-tachometer"></i> số lượng: '. $valueP->quantity .'</div>
                                <div class="col-engine"><i class="fa fa-tachometer"></i> '. $valueP->brand_name .'</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        ';
        }
        $output .= '</ul>';
        echo $output;
    }
}
