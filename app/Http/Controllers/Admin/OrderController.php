<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
public function index(){
    $orders = Order::where('status','0')->get();
    return view('admin.components.orders.index', compact ('orders'));
}
public function view($id){
    $orders = Order::where('id',$id)->first();
    return view('admin.components.orders.view',compact('orders'));
}
public function update(Request $request ,$id){
    $orders = Order::find($id);
    $orders->status = $request->input('order_status');
    $orders->update();
    return redirect('orders')->with('status','Etat modifier avec succès');
}
public function orderhistory(){
    $orders = Order::where('status','1')->get();
    return view('admin.components.orders.history', compact ('orders'));
}

}

