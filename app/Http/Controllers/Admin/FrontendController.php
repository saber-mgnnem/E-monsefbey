<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index(){
        return view("admin.app")->with('status','');
    }
    public function showCalendar()
    {
        return view('Admin.components.calendar.calendar');
    }
}
