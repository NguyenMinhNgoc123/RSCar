<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date('Y-m-d H:i:s');

        DB::table('admins')->insert([
            'admin_id'=>'1',
            'name' => 'Ngoc',
            'email' => 'NguyenMinhNgoc@gmail.com',
            'password' => md5('852654'),
            'phone_no'=>'0815115415',
            'status_admin'=>'1',
            'created_at'=>$date
        ]);
    }
}
