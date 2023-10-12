<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class DashboardController extends Controller
{
    public function dashboard(){
        $admins = Admin::get();
        return view('admin.dashboard',compact('admins'));
    }
}
