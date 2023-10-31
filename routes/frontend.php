<?php

use Illuminate\Support\Facades\Route;
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
//    return view('back-end.dashboard');
//});

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/', function () {
    return view('front-end.pages.home.index');
});

Route::get('/dashboard/slider', [SliderController::class, 'index'])->name('slider.index');
Route::get('/dashboard/slider/create', [SliderController::class, 'create'])->name('slider.create');
Route::post('/dashboard/slider/create', [SliderController::class, 'store'])->name('slider.store');




//project route started here
Route::get('/dashboard/project', [ProjectController::class, 'index'])->name('project.index');
Route::get('/dashboard/project/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('/dashboard/project/create', [ProjectController::class, 'store'])->name('project.store');

//Hire route started here
Route::get('/dashboard/hire', [HireController::class, 'index'])->name('hire.index');


//provide route started here
Route::get('/dashboard/provide', [ProvideController::class, 'index'])->name('provide.index');


//customer route started here
Route::get('/dashboard/customer', [CustomerController::class, 'index'])->name('customer.index');


//about route started here
Route::get('/dashboard/about', [AboutController::class, 'index'])->name('about.index');



//Review route started here
Route::get('/dashboard/review', [ReviewController::class, 'index'])->name('review.index');


//contact route started here
Route::get('/dashboard/contact', [ContactController::class, 'index'])->name('contact.index');



