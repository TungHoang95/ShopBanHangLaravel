<?php

use Illuminate\Database\Seeder;

class Product_OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_order')->delete();
        DB::table('product_order')->insert([
        ['code'=>'SP01','name'=>'Áo Nữ Sơ Mi Chấm Bi','price'=>170000,'quantity'=>1,'img'=>'ao_nu_so_mi_cham_bi.jpg','order_id'=>1],
        ['code'=>'SP02','name'=>'Áo Nữ Phối Viên','price'=>160000,'quantity'=>1,'img'=>'Ao-Nu-Phoi-Vien.jpg','order_id'=>1],
        ['code'=>'SP03','name'=>'Áo Sơ Mi Trắng Kem','price'=>140000,'quantity'=>2,'img'=>'ao_so_mi_trang_kem.jpg','order_id'=>2],
        ['code'=>'SP04','name'=>'Quần kaki Đỏ Nam','price'=>140000,'quantity'=>2,'img'=>'quan_kaki_do.jpg','order_id'=>2],
        ['code'=>'SP05','name'=>'Quần kaki Xám','price'=>120000,'quantity'=>1,'img'=>'quan_kaki_xam.jpg','order_id'=>2],
        ['code'=>'SP06','name'=>'Áo Sơ Mi CaRo Xám Xanh','price'=>190000,'quantity'=>1,'img'=>'quan_xam_xanh.jpg','order_id'=>3]

        ]);
    }
}
