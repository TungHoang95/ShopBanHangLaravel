<?php

namespace App\Http\Controllers\Frontent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
class ProductController extends Controller
{
     public function getDetail($slug_prd)
   {
   	 $data['prd'] = Product::where('slug',$slug_prd)->first();
   	  $data['prd_new'] = Product::where('featured',0)->orderby('id','DESC')->take(4)->get();
    return view('frontent.product.detail',$data);
   }

    public function getShop()
   {
   	$data['products'] = Product::paginate(6);
   	$data['categorys'] = Category::all();
    return view('frontent.product.shop',$data);
   }
}
