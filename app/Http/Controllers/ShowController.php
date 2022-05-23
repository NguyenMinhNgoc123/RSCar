<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    //
    public function list()
    {
        $data = [];
        $show = DB::table('show_products')->get();
        $data['show'] = $show;
        return view('show-products.list', $data);
    }

    // logo hot
    public function active_hot($id): \Illuminate\Http\RedirectResponse
    {
        $data = [];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        $data['hot_car'] = 1;
        $data['updated_at'] = $date;
        DB::table('show_products')
            ->where('product_id', $id)
            ->update($data);
        return redirect()->route('admin.manage-show.list');
    }

    public function un_active_hot($id): \Illuminate\Http\RedirectResponse
    {
        try {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date('Y-m-d H:i:s');
            $data = [];
            $data['hot_car'] = 0;
            $data['updated_at'] = $date;
            DB::table('show_products')->where('product_id', '=', $id)->update($data);
            return redirect()->back()->with('success', 'Cập nhật thành cônng');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Lỗi');
        }

    }

    //best sale week
    public function active_sale($id): \Illuminate\Http\RedirectResponse
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        $data = [];
        $data['sale_week'] = 1;
        $data['updated_at'] = $date;
        DB::table('show_products')->where('product_id', $id)->update($data);
        return redirect()->back();

    }

    public function un_active_sale($id): \Illuminate\Http\RedirectResponse
    {
        try {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date('Y-m-d H:i:s');
            $data = [];
            $data['sale_week'] = 0;
            $data['updated_at'] = $date;
            DB::table('show_products')->where('product_id', $id)->update($data);
            return redirect()->back()->with('success', 'success');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Lỗi');
        }
    }

    // bestseller
    public function active_bestseller($id): \Illuminate\Http\RedirectResponse
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        $data = [];
        $data['best_seller'] = 1;
        $data['updated_at'] = $date;
        DB::table('show_products')->where('product_id', $id)->update($data);
        return redirect()->back();

    }

    public function un_active_bestseller($id): \Illuminate\Http\RedirectResponse
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        $data = [];
        $data['best_seller'] = 0;
        $data['updated_at'] = $date;
        print_r($data);
        DB::table('show_products')->where('product_id', $id)->update($data);
        return redirect()->back();

    }
}
