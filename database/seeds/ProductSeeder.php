<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->delete();
        DB::table('product')->insert([
        	['id'=>1,'code'=>'SP01','product_name'=>'Áo Nữ Sơ Mi Chấm Bi','slug'=>'Ao-So-Mi-Cham-Bi',
        	'price'=>150000,'sale_price'=>120000,'featured'=>1,'state'=>1,'img'=>'ao_nu_so_mi_cham_bi.jpg','category_id'=>5],
        	['id'=>2,'code'=>'SP02','product_name'=>'Áo Nữ Phối Viên','slug'=>'Ao-Nu-Phoi-Vien',
        	'price'=>200000,'sale_price'=>100000,'featured'=>0,'state'=>0,'img'=>'ao_nu_phoi_vien.jpg','category_id'=>5],
        	['id'=>3,'code'=>'SP03','product_name'=>'Áo Sơ Mi CaRo Xám Xanh','slug'=>'Ao-So-Mi-CaRo-Xam-Xanh',
        	'price'=>170000,'sale_price'=>130000,'featured'=>0,'state'=>1,'img'=>'ao_so_mi_caro_xam_xanh.jpg','category_id'=>2],
        	['id'=>4,'code'=>'SP04','product_name'=>'Áo Sơ Mi Trắng Kem','slug'=>'Ao-So-Mi-Trang-Kem',
        	'price'=>120000,'sale_price'=>90000,'featured'=>0,'state'=>0,'img'=>'ao_so_mi_trang_kem.jpg','category_id'=>5],
        	['id'=>5,'code'=>'SP05','product_name'=>'Quần kaki Đỏ Nam','slug'=>'Quan-KaKi-Do-Nam',
        	'price'=>240000,'sale_price'=>170000,'featured'=>1,'state'=>0,'img'=>'quan_kaki_do_nam.jpg','category_id'=>3],
        	['id'=>6,'code'=>'SP06','product_name'=>'Quần kaki Xám','slug'=>'Quan-Kaki-Xam',
        	'price'=>290000,'sale_price'=>180000,'featured'=>1,'state'=>1,'img'=>'quan_kaki_xam.jpg','category_id'=>3]

        ]);
    }
}
