<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;

class AuthController extends Controller
{
    public function loginform(){
        return view('admin.auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = request()->only('email', 'password');
        if (auth()->guard('admin')->attempt($credentials)) {
            // Authentication passed...
        return redirect()->route('admin.dashboard')->with('success','Admin Logged in');
        }
        return redirect()->route('admin.login')->with('error','Invalid Email or Password');
    }
}
