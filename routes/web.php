<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[MainController::class,"index"])->name('login')->middleware('loginCheck');
Route::post('loginform',[MainController::class,'login'])->name("loginform");
Route::get('logout',[MainController::class,'logout'])->name('logout');
Route::view('dash','dash')->name('dash')->middleware('loginCheck');