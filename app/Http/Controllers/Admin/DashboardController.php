<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Foundation\Auth\User;

class DashboardController extends Controller
{
    //
    public function users(){
        $users = User::all();
        return view('admin.components.users.index',compact('users'));
    }

    public function viewuser($id){
        $users = User::find($id);
        return view('admin.components.users.view',compact('users'));
    }
}
