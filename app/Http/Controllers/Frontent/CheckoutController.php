<?php

namespace App\Http\Controllers\Frontent;
use App\Http\Requests\CheckoutRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Order,Product_order};
use Cart;
use Mail;
class CheckoutController extends Controller
{
     public function getCheckout()
   {
    $data['items'] = Cart::content();
    $data['total'] = Cart::total(0,"",".");
    return view('frontent.checkout.checkout',$data);
   }
   public function postCheckout(CheckoutRequest $r)
   {
       $order = new Order;
       $order->full = $r->full;
       $order->address = $r->address;
       $order->phone = $r->phone;
       $order->email = $r->email;
       $order->total = Cart::total(0,"","");
       $order->state = 1;
       $order->save();

       foreach(Cart::content() as $row)
       {
           $prd_od = new Product_order;
           $prd_od->code = $row->id;
           $prd_od->name = $row->name;
           $prd_od->price = $row->price;
           $prd_od->quantity = $row->qty;
           $prd_od->img = $row->options->img;
           $prd_od->order_id = $order->id;

           $prd_od->save();
       }
       // gửi email
       $data['infor'] = $r->all();
       $email = $r->email;
       $data['total'] = $order->total;
       $data['cart'] = Cart::content();
            Mail::send('frontent.checkout.email', $data, function ($message) use ($email) {
                $message->from('hoangtunght95@gmail.com', 'Tung Hoang');

                $message->to($email,$email);

                // $message->cc('hong120495@gmail.com', 'Đặng Hồng');

                $message->subject('xác nhận hóa đơn mua hàng Fashion');
            });
        // Xóa toàn bộ giỏ hàng
        Cart::destroy();
       return redirect('checkout/complete/'.$order->id);
   }
   public function getComplete($order_id)
   {
       $data['order'] = Order::find($order_id);
      return view('frontent.checkout.complete',$data);
   }
}
