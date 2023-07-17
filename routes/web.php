<?php

use App\Http\Controllers\Functioncontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('signup',[Functioncontroller::class,'signup'])->name('signup');
Route::post('signup',[Functioncontroller::class,'storeUser'])->name('storeUser');
Route::get('login',[Functioncontroller::class,'login'])->name('login');
Route::post('login',[Functioncontroller::class,'postLogin'])->name('postLogin');
Route::get('dashboard',[Functioncontroller::class,'dashboard'])->name('dashboard');
Route::get('logout',[Functioncontroller::class,'logout'])->name('logout');


