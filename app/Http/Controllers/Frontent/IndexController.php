<?php

namespace App\Http\Controllers\Frontent;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
class IndexController extends Controller
{
     public function getIndex()
    {
      $data['prd_new'] = Product::orderby('id','DESC')->paginate(12);          //orderby('id','DESC') take(4)
      $data['prd_nb'] = Product::where('featured',1)->take(4)->get();
      $data['prd_sale'] = Product::where('featured',2)->take(8)->get();
    	return view('frontent.index',$data);
    }
    public function getAbout()
   {
    return view('frontent.about');
   }
    public function getContact()
   {
    return view('frontent.contact');
   }
   public function getPrdCate($slug_cate)
   {
      $data['products'] = Category::where('slug',$slug_cate)->first()->Product()->paginate(6);
      $data['categorys'] = Category::all();
      return view('frontent.product.shop',$data);
   }
   public function getFilter(Request $r)
   {
      $data['categorys'] = Category::all();
      $data['products'] = Product::whereBetween('price', [$r->start, $r->end])->paginate(6);
      return view('frontent.product.shop',$data);
   }
}
