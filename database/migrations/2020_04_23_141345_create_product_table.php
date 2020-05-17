<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('code',50)->unique();
            $table->string('product_name');
            $table->string('slug');
            $table->decimal('price',18,0)->default(0);
            $table->decimal('sale_price',18,0)->default(0);
            $table->tinyInteger('featured')->unsigned();
            $table->tinyInteger('state')->unsigned();
            $table->text('info')->nullable();
            $table->text('describe')->nullable();
            $table->string('img');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
