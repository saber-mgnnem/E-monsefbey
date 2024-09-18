<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;


class UserController extends Controller
{
    public function index(){
        $orders = Order::where('user_id',Auth::id())->get();
        return view('frontend.orders.index',compact('orders'));
    }

    public function view($id){
        $orders = Order::where('user_id',Auth::id())->where('id',$id)->first();
        return view('frontend.orders.view',compact('orders'));
    }
}
