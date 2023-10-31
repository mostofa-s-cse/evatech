<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HireController;
use App\Http\Controllers\ProvideController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewController;

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
Route::get('/dashboard/slider/create', [SliderController::class, 'create'])->name('slider.create');
Route::post('/dashboard/slider/create', [SliderController::class, 'store'])->name('slider.store');




                   //project route started here
Route::get('/dashboard/project', [ProjectController::class, 'index'])->name('project.index');
Route::get('/dashboard/project/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('/dashboard/project/create', [ProjectController::class, 'store'])->name('project.store');

                   //Hire route started here
Route::get('/dashboard/hire', [HireController::class, 'index'])->name('hire.index');
Route::get('/dashboard/hire/create', [HireController::class, 'create'])->name('hire.create');
Route::post('/dashboard/hire/create', [HireController::class, 'store'])->name('hire.store');


                   //provide route started here
Route::get('/dashboard/provide', [ProvideController::class, 'index'])->name('provide.index');
Route::get('/dashboard/provide/create', [ProvideController::class, 'create'])->name('provide.create');
Route::post('/dashboard/provide/create', [ProvideController::class, 'store'])->name('provide.store');


                   //customer route started here
Route::get('/dashboard/customer', [CustomerController::class, 'index'])->name('customer.index');


                   //about route started here
Route::get('/dashboard/about', [AboutController::class, 'index'])->name('about.index');



                   //Review route started here
Route::get('/dashboard/review', [ReviewController::class, 'index'])->name('review.index');


                   //contact route started here
Route::get('/dashboard/contact', [ContactController::class, 'index'])->name('contact.index');



