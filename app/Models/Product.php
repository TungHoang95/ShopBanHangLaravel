<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";

    public function Category()
    {
    	return $this->belongsTo('App\Models\Category','category_id','id');
    }
}
