<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile(){
        $user = User::where('id',auth()->user()->id)->firstorfail();
        return view('site.pages.profile.profile' , compact('user'));
    }
    public function update(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|max:191|unique:users,email,'.auth()->user()->id,
        ]);
        $imageData = User::where('id',auth()->user()->id)->firstorfail();
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'profile' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/profile/', $imageName);
        }
        else{
            $imageName = $imageData->image;
        }
        $update = User::where('id', auth()->user()->id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'image' => $imageName,
        ]);
        if($update > 0){
            return redirect()->back()->with('success','Profile Updated Successfully');
        }
        return redirect()->back()->with('error','Something Went Wrong');
    }
}
