<?php

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->delete();
        DB::table('about')->insert([
        	['id'=>1,'introduce'=>'đây là trang giới thiệu của shop','image'=>'cover-img-1.jpg'],

        ]);
    }
}
