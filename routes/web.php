<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HireController;
use App\Http\Controllers\ProvideController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AboutController;

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


                    // Slider route started here
Route::get('/dashboard/slider', [SliderController::class, 'index'])->name('slider.index');




                   //project route started here
Route::get('/dashboard/project', [ProjectController::class, 'index'])->name('project.index');


                   //Hire route started here
Route::get('/dashboard/hire', [HireController::class, 'index'])->name('hire.index');


                   //provide route started here
Route::get('/dashboard/provide', [ProvideController::class, 'index'])->name('provide.index');


                   //customer route started here
Route::get('/dashboard/customer', [CustomerController::class, 'index'])->name('customer.index');


                   //about route started here
Route::get('/dashboard/about', [AboutController::class, 'index'])->name('about.index');



