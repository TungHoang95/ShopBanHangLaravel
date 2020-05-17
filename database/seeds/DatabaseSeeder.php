<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(Product_OrderSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(Inforcompany::class);
        $this->call(AboutSeeder::class);

    }
}
