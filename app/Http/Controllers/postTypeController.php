<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\StorePostTypeRequest;
use App\Http\Requests\Admin\UpdatePostType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use MongoDB\Driver\Session;
use mysql_xdevapi\Exception;
use App\Models\PostType;

session_start();
class postTypeController extends Controller
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
        $PostTypes = PostType::get();
        $data['postType']= $PostTypes;
        // print_r($data);
        //$manager_pt = view('postType.list')->with('list',$list);
        return view('postType.list',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('postType.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostTypeRequest $request)
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        //

        $data = [];
        $data['type_name']=$request->type_name;

        $data['created']=$date;
        if ($request->type_name == null){
            return redirect()->route('admin.postType.list')->with('error','Thêm danh mục hình thức thành công');
        }
        $result = PostType::create($data);
        //DB::table('post_type')->insert($data);
        //Session()->put('message','Thêm danh mục hình thức thành công');
        return redirect()->route('admin.postType.list')->with('message','Thêm danh mục hình thức thành công');

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
        $PostTypes = PostType::findOrFail($id);
        $data['postType'] = $PostTypes;

        return view('postType.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostTypeRequest $request, $id)
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
            $PostTypes = PostType::find($id);
            // set value for field name
            $PostTypes->updated = $date;
            $PostTypes->type_name = $request->type_name;
            $PostTypes->save();

            DB::commit();

            return redirect()->route('admin.postType.list')
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
//        DB::table('post_types')->where('type_id',$id)->delete();
//        return redirect()->route('postType.list-post-type')->with('message','xóa danh mục hình thức thành công');

        DB::beginTransaction();

        try {
            $PostTypes = PostType::find($id);
            $PostTypes->delete();
            DB::commit();

            return redirect()->route('admin.postType.list')->with('message', 'Xóa thành công hình thức id : '.$id);
        }  catch (\Exception $ex) {
            DB::rollBack();
            // have error so will show error message
            return redirect()->back()->with('error', 'Xóa không thành công');
        }
    }

}
