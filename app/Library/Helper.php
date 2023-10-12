<?php

use App\Models\User;


function userProfilePic(){
    $user = User::where('id',auth()->user()->id)->firstorfail();
    return $user;
}
