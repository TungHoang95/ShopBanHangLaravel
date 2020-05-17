<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";
  
  public function Product()
  {
  	return $this->hasMany('App\Models\Product','category_id','id');
  }
}
