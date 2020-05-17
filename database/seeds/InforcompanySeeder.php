<?php

use Illuminate\Database\Seeder;

class InforcompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inforcompany')->delete();
        DB::table('inforcompany')->insert([
        	['id'=>1,'email'=>'info@yoursite.com','address'=>'1 Cổ nhuế - Cầu Giấy - Hà Nội','phone'=>'096.7840.666','link'=>'http://fashion.edu.vn']

        ]);
    }
}
