<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
        	['id'=>1,'email'=>'admin@gmail.com','password'=>bcrypt('thanhtunght01'),'full'=>'Admin','address'=>'Hà Nội','phone'=>'0967840666','level'=>1],
        	['id'=>2,'email'=>'admin123@gmail.com','password'=>bcrypt('123456'),'full'=>'Admin123','address'=>'Nam Định','phone'=>'0987654321','level'=>2],
        	['id'=>3,'email'=>'hoangtung95@gmail.com','password'=>bcrypt('thanhtunght01'),'full'=>'Hoàng Thanh Tùng','address'=>'Nam Định','phone'=>'0962301888','level'=>1]	
        ]);
    }
}
