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
        DB::table('type_shoes')->insert([
            [ 'tv_name'=>'Slip Ons', 'created'=>$date,'updated'=>$date],
            [ 'tv_name'=>'Boots','created'=>$date,'updated'=>$date],
            [ 'tv_name'=>'Sandals','created'=>$date,'updated'=>$date],
            [ 'tv_name'=>'Lace Ups','created'=>$date,'updated'=>$date],
            [ 'tv_name'=>'Oxfords','created'=>$date,'updated'=>$date]
        ]);
    }
}
