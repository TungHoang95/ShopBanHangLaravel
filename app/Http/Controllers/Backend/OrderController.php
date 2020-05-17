<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
     public function getOrder()
    {
        $data['orders'] = Order::where('state',1)->orderby('id','DESC')->paginate(3);
    	return view('backend.order.order',$data);
    }
     public function getProcessed()
    {
        $data['processeds'] = Order::where('state',2)->orderby('updated_at','DESC')->paginate(3);
    	return view('backend.order.processed',$data);
    }
     public function getDetailOrder($order_id)
    {
        $data['order'] = Order::find($order_id);
    	return view('backend.order.detailorder',$data);
    }
    public function getPaid($order_id)
    {
        $order = Order::find($order_id);
        $order->state = 2;
        $order->save();
        return redirect('admin/order/processed');
    }
}
