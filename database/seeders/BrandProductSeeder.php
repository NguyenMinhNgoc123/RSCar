<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandProductSeeder extends Seeder
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
        DB::table('brand_products')->insert([
            ['brand_name' => 'BMW', 'created' => $date,'updated'=>$date],
            ['brand_name' => 'HONDA', 'created' => $date,'updated'=>$date],
            ['brand_name' => 'Mercedes', 'created' => $date,'updated'=>$date],
            ['brand_name' => 'Mazda', 'created' => $date,'updated'=>$date],
            ['brand_name' => 'yamaha', 'created' => $date,'updated'=>$date],
            ['brand_name' => 'Hyundai', 'created' => $date,'updated'=>$date],
            ['brand_name' => 'porsche', 'created' => $date,'updated'=>$date],
            ['brand_name' => 'mc laren', 'created' => $date,'updated'=>$date],
            ['brand_name' => 'roll royce', 'created' => $date,'updated'=>$date],
            ['brand_name' => 'audi', 'created' => $date,'updated'=>$date],
            ['brand_name' => 'hãng khác', 'created' => $date,'updated'=>$date],

        ]);
    }
}
