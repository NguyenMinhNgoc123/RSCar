<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\StoreBrandProductRequest;
use App\Models\BrandProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=[];
        $Brand = BrandProduct::get();
        $data['brandProduct']= $Brand;
        // print_r($data);
        //$manager_pt = view('postType.list')->with('list',$list);
        return view('brand.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('brand.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrandProductRequest $request)
    {
        //
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        //

        $data = [];
        $data['brand_name']=$request->brand_name;
        $data['created']=$date;

        if ($request->brand_name == null){
            return redirect()->route('admin.brandProduct.list')->with('error','Thêm danh mục hình thức không thành công');
        }
        $result = BrandProduct::create($data);
        //DB::table('post_type')->insert($data);
        //Session()->put('message','Thêm danh mục hình thức thành công');
        return redirect()->route('admin.brandProduct.list')->with('message','Thêm danh mục hình thức thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = [];
        $brand = BrandProduct::findOrFail($id);
        $data['brandProduct'] = $brand;

        return view('brand.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');

//        $data=[];
//        $data['name'] = $request->name;
//        $data['updated_at']=$date;
//        DB::table('post_types')->where('type_id',$id)->update($data);
//        return redirect('list-post-type')->with('message','cập nhật danh mục hình thức thành công');
        DB::beginTransaction();

        try {
            // create $category
            $brand = BrandProduct::find($id);
            // set value for field name
            $brand->updated = $date;
            $brand->brand_name = $request->brand_name;
            $brand->save();

            DB::commit();

            return redirect()->route('admin.brandProduct.list')
                ->with('message', 'cập nhật danh mục hình thức thành công');
        } catch (\Exception $ex) {
            DB::rollBack();
            // have error so will show error message
            return redirect()->back()->with('error', 'cập nhật danh mục hình thức không thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::beginTransaction();

        try {
            $PostTypes = BrandProduct::find($id);
            $PostTypes->delete();

            DB::commit();

            return redirect()->route('admin.brandProduct.list')
                ->with('message', 'Xóa thành công hình thức id : '.$id);
        }  catch (\Exception $ex) {
            DB::rollBack();
            // have error so will show error message
            return redirect()->back()->with('error', 'Xóa không thành công');
        }
    }
}
