<?php

namespace App\Http\Controllers;

use App\Models\BrandProduct;
use App\Models\PostType;
use App\Models\Product_car;
use App\Models\Product_photo;
use App\Models\Show_product;
use App\Models\TypeVehicles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class ProductsCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [];
        $products = DB::table('product_cars')
            ->join('brand_products', 'product_cars.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
            ->join('type_vehicles', 'product_cars.type_vehicles_id', '=', 'type_vehicles.type_vehicles_id')
            ->orderByDesc('product_cars.created_at')
            ->get();
        $data['productCar'] = $products;
        // dd($data);
        return view('productsCar.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = [];
        $post_types = PostType::pluck('type_name', 'type_id')->toArray();
        $brands = BrandProduct::pluck('brand_name', 'brand_id')->toArray();
        $type_vehicles = TypeVehicles::pluck('tv_name', 'type_vehicles_id')->toArray();
        $data['post_types'] = $post_types;
        $data['brands'] = $brands;
        $data['type_vehicles'] = $type_vehicles;
//        dd($post_types);
        return view('productsCar.add', $data);
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
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');

        $files = [];
        $data1 = [];
        $data2 = [];
        $data = [];

        $price = str_replace(',', '', $request->price);

        if ($request->deposit != null || $request->deposit !='0'){
            $deposit = str_replace(',', '', $request->deposit);
        }else{
            $deposit='0';
        }



        $last_id = $data['product_id'] = mt_rand();
        $data['type_id'] = $request->type_id;
        $data['brand_id'] = $request->brand_id;
        $data['caption'] = $request->caption;
        $data['model'] = $request->model;
        $data['number_kilometers'] = $request->number_kilometers;
        $data['type_vehicles_id'] = $request->type_vehicles_id;
        $data['name_car'] = $request->name_car;
        $data['capacity'] = $request->capacity;
        $data['Year_of_registration'] = $request->Year_of_registration;
        $data['status_car'] = $request->status_car;
        $data['description'] = $request->description;
        $data['address'] = $request->address;
        $data['price'] = $price;
        $data['deposit'] = $deposit;
        $data['discount'] = $request->discount;
        $data['quantity'] = $request->quantity;
        $data['thumbnails']='1';
        $data['status']='0';
        $data['created_at'] = $date;


        $data2['product_id'] = $last_id;

        if (!empty($request->sale_week)) {
            $sale_week = '1';
        }else{
            $sale_week = '0';
        }

        if (!empty($request->best_seller)) {
            $best_seller = '1';
        }else{
            $best_seller = '0';
        }

        if (!empty($request->hot_car)) {
            $hot_car ='1';
        }else{
            $hot_car = '0';
        }
        $data['sale_week'] =$sale_week;
        $data['best_seller'] = $best_seller;
        $data['hot_car'] = $hot_car;

        //$data['created_at'] = $date;
        //dd($request->sale_week);



        //dd($request->File('images'));
        DB::beginTransaction();

        try {
            $key = count($request->file('images'));
            if ($key > 2) {
                if ($request->hasfile('images')) {
                    $result = Product_car::create($data);
                    if($result){
                        $result2 = Show_product::create($data);
                        $result3 = Product_car::find($last_id);
                        if ($result2){
                            foreach ($request->file('images') as $file) {
                                $name = time() . rand(1, 100) . '.' . $file->extension();
                                $file->move(public_path('product-images'), $name);
                                $files[] = $name;
                            }

                            foreach ($files as $key => $value) {
                                $data1['product_id'] = $last_id;
                                $data1['p_photo'] = $value;
                                $result3->thumbnails = $value;
                                Product_photo::create($data1);
                            }
                            $result3->save();
                        }else{
                            return redirect()->back()->with('message', 'Lỗi thêm show sản phẩm');
                        }
                    }else{
                        return redirect()->back()->with('message', 'Lỗi thêm sản phẩm');
                    }
                } else {
                    return redirect()->back()->with('message', 'Lỗi thêm ảnh');
                }
            } else {
                return redirect()->back()->with('message', 'Phải có ít nhất 3 ảnh');

            }

            DB::commit();

            //return view('productsCar.list');
            return redirect()->route('admin.product.list')->with('message', 'Thêm danh mục loại xe thành công : ' . $last_id);

        } catch (\Exception $ex) {
            DB::rollBack();
            // have error so will show error message
            return redirect()->back()->with('message', 'thêm sản phẩm không thành công');
        }

//        Product_car::create($data);
//        $data->id;
//        return redirect()->route('admin.typeVehicle.list')->with('error','Thêm danh mục loại xe không thành công');
//        //DB::table('post_type')->insert($data);
//        //Session()->put('message','Thêm danh mục hình thức thành công');
//        return redirect()->route('admin.typeVehicle.list')->with('message','Thêm danh mục loại xe thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = [];
        $productPhoto = Product_photo::get()->where('product_id', $id);
        $data['productPhoto'] = $productPhoto;
        $products = DB::table('product_cars')
            ->join('brand_products', 'product_cars.brand_id', '=', 'brand_products.brand_id')
            ->join('post_types', 'product_cars.type_id', '=', 'post_types.type_id')
            ->join('type_vehicles', 'product_cars.type_vehicles_id', '=', 'type_vehicles.type_vehicles_id')
            ->where('product_id','=',$id)
            ->get();
        $data['productCar'] = $products;
        $data['id'] = $id;
        //dd($productPhoto);
        return view('productsCar.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = [];
        $post_types = PostType::pluck('type_name', 'type_id')->toArray();
        $brands = BrandProduct::pluck('brand_name', 'brand_id')->toArray();
        $type_vehicles = TypeVehicles::pluck('tv_name', 'type_vehicles_id')->toArray();
        $productCar = Product_car::findOrFail($id);
        $productPhoto = Product_photo::where('product_id', '=', $id)->get();

        $data['post_types'] = $post_types;
        $data['brands'] = $brands;
        $data['type_vehicles'] = $type_vehicles;
        $data['productCar'] = $productCar;
        $data['productPhoto'] = $productPhoto;
        //dd($productPhoto);
        return view('productsCar.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');

        $productCar = Product_car::find($id);
        // set value for field name

        $price = str_replace(',', '', $request->price);
        if ($request->deposit != null){
            $deposit = str_replace(',', '', $request->deposit);
        }else{
            $deposit = '0';
        }

        $productCar->updated_at = $date;
        $productCar->type_vehicles_id = $request->type_vehicles_id;
        $productCar->type_id = $request->type_id;
        $productCar->brand_id = $request->brand_id;
        $productCar->name_car = $request->name_car;
        $productCar->capacity = $request->capacity;
        $productCar->status_car = $request->status_car;
        $productCar->model = $request->model;
        $productCar->description = $request->description;
        $productCar->number_kilometers = $request->number_kilometers;
        $productCar->address = $request->address;
        $productCar->caption = $request->caption;
        $productCar->quantity = $request->quantity;
        $productCar->price = $price;
        $productCar->deposit = $deposit;
        $productCar->discount = $request->discount;


        DB::beginTransaction();

        try {
            $thumbnailOld = null;
            // create $category
            if ($request->hasfile('images')) {
                $productPhoto = Product_photo::where('id_photo', '=', $request->id_photo)->first();
                $thumbnailPath = null;

                $thumbnailOld = $productPhoto->p_photo;

                if ($request->hasfile('images') && $request->file('images')->isValid()) {
                    $image = $request->file('images');
                    $name = time() . rand(1, 100) . '.' . $request->images->extension();
                    $image->move(public_path('product-images'), $name);

                    // $productPhoto->p_photo = $name;

                    DB::table('product_photos')
                        ->where('id_photo', $request->id_photo)
                        ->update(['p_photo' => $name]);
                }
                $thumbnails = Product_car::where('thumbnails','=',$thumbnailOld)->first();
                if ($thumbnails){
                    $thumbnails->thumbnails = $name;
                    $thumbnails->save();
                }

            }

            $productCar->save();

            DB::commit();

            $file_path = public_path('product-images/' . $thumbnailOld);
            if ($thumbnailOld != null) {
                File::delete($file_path);
            }

            return redirect()->route('admin.product.list')
                ->with('message', 'cập nhật sản phẩm thành công ');
        } catch (\Exception $ex) {
            DB::rollBack();
            // have error so will show error message
            return redirect()->back()->with('error', 'cập nhật sản phẩm không thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //
        DB::beginTransaction();

        try {

            $DeleteShowProduct = Show_product::where('product_id', '=', $id)->first();
            if ($DeleteShowProduct) {
                $DeleteShowProduct->delete();

            }
            $product = Product_car::find($id)->product_photo();

            foreach ($product as $key => $value) {
                $file_path = public_path('product-images/' . $value->p_photo);
                unlink($file_path);
                //File::delete($file_path);
            }

            if ($product) {
                $product->delete();
            }

            $product1 = Product_car::find($id);
            $product1->delete();

            DB::commit();

            return redirect()->route('admin.product.list')->with('message', 'Xóa thành công hình thức id : '.$id);
        }  catch (\Exception $ex) {
            DB::rollBack();
            // have error so will show error message
            return redirect()->back()->with('message', 'Xóa không thành công');
        }
    }
    public function active($id){
        $data=[];
        $data['status']='0';
        DB::table('product_cars')->where('product_id','=',$id)->update($data);
        return redirect()->back();
    }
    public function un_active($id){
        $data=[];
        $data['status']='4';
        DB::table('product_cars')->where('product_id','=',$id)->update($data);
        return redirect()->back();
    }
}
