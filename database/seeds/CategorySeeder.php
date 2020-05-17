<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('category')->delete();
        DB::table('category')->insert([
        	['id'=>1,'category_name'=>'Nam','slug'=>'nam','parent'=>0],
        	['id'=>2,'category_name'=>'Áo Nam','slug'=>'ao-nam','parent'=>1],
        	['id'=>3,'category_name'=>'Quần Nam','slug'=>'quan-nam','parent'=>1],
        	['id'=>4,'category_name'=>'Nữ','slug'=>'nu','parent'=>0],
        	['id'=>5,'category_name'=>'Áo Nữ','slug'=>'ao-nu','parent'=>4],
        	['id'=>6,'category_name'=>'Quần Nữ','slug'=>'quan-nu','parent'=>4]

        ]);
    }
}
