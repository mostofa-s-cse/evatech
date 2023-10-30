<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\SliderController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('back-end.dashboard');
});

Route::get('/home', function () {
    return view('front-end.pages.home.index');
});

Route::resource('sliders',SliderController::class);
