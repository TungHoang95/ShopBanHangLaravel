<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "order";

    public function Product_Order()
    {
    	return $this->hasMany('App\Models\Product_Order','order_id','id');
    }

}
