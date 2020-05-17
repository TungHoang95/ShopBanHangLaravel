<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order')->delete();
        DB::table('order')->insert([
        	['id'=>1,'full'=>'Hoàng Thanh Tùng','address'=>'Nam Định','email'=>'hoangtunght95@gmail.com','phone'=>'0967840666','total'=>150000,'state'=>1],
        	['id'=>2,'full'=>'Nguyễn Văn A','address'=>'Hà Nội','email'=>'nguyenvanA@gmail.com','phone'=>'0987654321','total'=>180000,'state'=>2],
        	['id'=>3,'full'=>'Nguyễn Văn B','address'=>'Hà Nội','email'=>'nguyenvanB@gmail.com','phone'=>'0987654321','total'=>190000,'state'=>2],
        	['id'=>4,'full'=>'Hoàng Anh Tuấn','address'=>'Hải Phòng','email'=>'ht95@gmail.com','phone'=>'0967899999','total'=>160000,'state'=>1],
        	
        ]);
    }
}
