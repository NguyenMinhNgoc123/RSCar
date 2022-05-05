<?php

namespace App\Http\Controllers;

use App\Models\TypeVehicles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypeVehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[];
        $typeVehicles = TypeVehicles::get();
        $data['typeVehicle']= $typeVehicles;
        //print_r($data);
        //$manager_pt = view('postType.list')->with('list',$list);
        return view('typeVehicle.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('typeVehicle.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        //

        $data = [];
        $data['tv_name']=$request->tv_name;

        $data['created']=$date;
        if ($request->tv_name == null){
            return redirect()->route('admin.typeVehicle.list')->with('error','Thêm danh mục loại không thành công');
        }
        $result = TypeVehicles::create($data);
        //DB::table('post_type')->insert($data);
        //Session()->put('message','Thêm danh mục hình thức thành công');
        return redirect()->route('admin.typeVehicle.list')->with('message','Thêm danh mục loại thành công');
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
        $typeVehicles = TypeVehicles::findOrFail($id);
        $data['typeVehicle'] = $typeVehicles;

        return view('typeVehicle.edit', $data);
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
            $typeVehicles = TypeVehicles::find($id);
            // set value for field name
            $typeVehicles->updated = $date;
            $typeVehicles->tv_name = $request->tv_name;
            $typeVehicles->save();

            DB::commit();

            return redirect()->route('admin.typeVehicle.list')
                ->with('message', 'cập nhật danh mục loại thành công');
        } catch (\Exception $ex) {
            DB::rollBack();
            // have error so will show error message
            return redirect()->back()->with('error', 'cập nhật danh mục loại không thành công');
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
        try {
            $check_exist = DB::table('products')
                ->where('type_shoes_id', $id)
                ->first();
            if (!$check_exist) {
                DB::table('type_shoes')->where('type_shoes_id', $id);
                return redirect()->route('admin.typeVehicle.list')
                    ->with('message', 'Xóa thành công loại id : '.$id);
            }
            return redirect()->back()->with('error', 'Xóa không thành công, sản phẩm đã được sử dụng');

        }  catch (\Exception $ex) {
            // have error so will show error message
            return redirect()->back()->with('error', 'Xóa không thành công');
        }
    }
}
