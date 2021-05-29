<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class typeVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        //
        DB::table('type_vehicles')->insert([
            [ 'tv_name'=>'Ô tô', 'created'=>$date,'updated'=>$date],
            [ 'tv_name'=>'Xe máy','created'=>$date,'updated'=>$date],
            [ 'tv_name'=>'Xe Tải,xe công','created'=>$date,'updated'=>$date],
            [ 'tv_name'=>'Xe điện','created'=>$date,'updated'=>$date],
            [ 'tv_name'=>'Phương tiện khác','created'=>$date,'updated'=>$date]
        ]);
    }
}
