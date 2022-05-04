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
            ['brand_name' => 'ADIDAS',
                'brand_caption' => '',
                'brand_content1' => '',
                'brand_content2' => '',
                'brand_content3' => '',
                'brand_description' => '',
                'brand_thumbnails' => '',
                'created' => $date,
                'updated'=>$date],
            ['brand_name' => 'NIKE',
                'brand_caption' => '',
                'brand_content1' => '',
                'brand_content2' => '',
                'brand_content3' => '',
                'brand_description' => '',
                'brand_thumbnails' => '',
                'created' => $date,'updated'=>$date],
            ['brand_name' => 'GUCCI',
                'brand_caption' => '',
                'brand_content1' => '',
                'brand_content2' => '',
                'brand_content3' => '',
                'brand_description' => '',
                'brand_thumbnails' => '',
                'created' => $date,'updated'=>$date],
            ['brand_name' => 'MERRELL',
                'brand_caption' => '',
                'brand_content1' => '',
                'brand_content2' => '',
                'brand_content3' => '',
                'brand_description' => '',
                'brand_thumbnails' => '',
                'created' => $date,'updated'=>$date],
            ['brand_name' => 'PUMA',
                'brand_caption' => '',
                'brand_content1' => '',
                'brand_content2' => '',
                'brand_content3' => '',
                'brand_description' => '',
                'brand_thumbnails' => '',
                'created' => $date,'updated'=>$date],
            ['brand_name' => 'GUCCI',
                'brand_caption' => '',
                'brand_content1' => '',
                'brand_content2' => '',
                'brand_content3' => '',
                'brand_description' => '',
                'brand_thumbnails' => '',
                'created' => $date,'updated'=>$date],
            ['brand_name' => 'D&G',
                'brand_caption' => '',
                'brand_content1' => '',
                'brand_content2' => '',
                'brand_content3' => '',
                'brand_description' => '',
                'brand_thumbnails' => '',
                'created' => $date,'updated'=>$date],
            ['brand_name' => 'LACOSTE',
                'brand_caption' => '',
                'brand_content1' => '',
                'brand_content2' => '',
                'brand_content3' => '',
                'brand_description' => '',
                'brand_thumbnails' => '',
                'created' => $date,'updated'=>$date],
            ['brand_name' => 'Hãng khác',
                'brand_caption' => '',
                'brand_content1' => '',
                'brand_content2' => '',
                'brand_content3' => '',
                'brand_description' => '',
                'brand_thumbnails' => '',
                'created' => $date,'updated'=>$date],
        ]);
    }
}
