<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/',[FrontendController::class ,'index'])->name('index');
Route::get('author',[FrontendController::class,'author'])->name('author');
Route::get('readrer',[FrontendController::class,'reader'])->name('reader');


Route::middleware(['auth'])->group(function () {
    //Profile Update
    Route::get('profile' , [ProfileController::class , 'profile'])->name('profile');
    Route::post('profile/update/' , [ProfileController::class , 'update'])->name('profile-update');
    Route::post('password/update/' , [ProfileController::class , 'passwordupdate'])->name('password-update');
});

