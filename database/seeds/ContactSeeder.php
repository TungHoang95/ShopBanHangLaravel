<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->delete();
        DB::table('contact')->insert([
        	['id'=>1,'name'=>'Hoàng Thanh Tùng','email'=>'hoangtunght@gmail.com','national'=>'ok','message'=>'tôi rất hài lòng','state'=>1],
        	['id'=>2,'name'=>'Nguyễn Tuấn Anh','email'=>'nguyentuananh@gmail.com','national'=>'ok','message'=>'tôi không hài lòng cho lắm','state'=>0],
        	['id'=>3,'name'=>'Nguyễn Văn A','email'=>'admin01@gmail.com','national'=>'ok','message'=>'tôi rất hài lòng','state'=>0],
        	['id'=>4,'name'=>'Nguyễn văn B','email'=>'admin02@gmail.com','national'=>'ok','message'=>'tôi rất hài lòng','state'=>0],
        	['id'=>5,'name'=>'Hoàng Văn C','email'=>'admin03@gmail.com','national'=>'ok','message'=>'tôi rất hài lòng','state'=>0],
        	['id'=>6,'name'=>'Hoàng Văn Tuấn','email'=>'nguyenvantuan@gmail.com','national'=>'ok','message'=>'tôi rất hài lòng','state'=>0]

        ]);
    }
}
