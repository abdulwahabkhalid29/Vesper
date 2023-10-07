<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Reader;
use App\Model\User;

class FrontendController extends Controller
{
    public function index(){
        return view('site.pages.index');
    }
    public function reader(){
        $users = User::where('role_id',2)->get();
        return view('site.reader.index',compact('users'));
    }
    public function author(){
        $user = User::where('role_id',3)->get();
        return view('site.author.index'.compact('users'));
    }
}
