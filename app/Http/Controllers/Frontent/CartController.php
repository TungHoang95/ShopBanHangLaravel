<?php

namespace App\Http\Controllers\Frontent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Cart;

class CartController extends Controller
{
    public function getCart()
   {
   	$data['items'] = Cart::content();
   	$data['total'] = Cart::total(0,"",".");
    return view('frontent.cart.cart',$data);
   }
   public function getAddCart(Request $r)
   {
     $prd = Product::find($r->id_prd);
     if($r->has('qty'))
     {
         $qty = $r->qty;
     }
     else
     {
         $qty = 1;
     }
     Cart::add([
     	'id' => $prd->code,
     	'name' => $prd->product_name,
     	'qty' => $qty,
     	'price' => $prd->sale_price,
     	'weight' => 0,
     	'options' => ['img' => $prd->img , 'sale' => $prd->sale_price ]]);

     return redirect('cart');
   }
   public function getUpdateCart($rowId,$qty)
   {
       Cart::update($rowId,$qty);
       return "success";
   }
   public function DelCart($rowId)
   {
        Cart::remove($rowId);
        return redirect()->back();
   }
}
