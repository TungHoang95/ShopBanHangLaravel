<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\carbon;
use App\Models\Order;

class IndexController extends Controller
{
    public function getIndex()
    {
    	$month_now = (Carbon::now()->format('m'));
    	$year_now = (Carbon::now()->format('Y'));
        for ($i=1; $i <= $month_now ; $i++) 
        { 
        	$dl['Tháng '.$i] = Order::where('state',2)->whereMonth('updated_at',$i)->whereYear('updated_at',$year_now)->sum('total');
        }
        $data['dl'] = $dl;
        $data['so_dh'] = Order::where('state',2)->count();

    	return view("backend.index",$data);
    }
    public function Logout()
    {
    	Auth::logout();
    	return redirect('login');
    }
}
