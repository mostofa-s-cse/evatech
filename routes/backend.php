<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\HireController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProvideController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\SliderController;
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


Route::get('dashboard', [DashBoardController::class, 'index'])->name('dashboard');
// Slider route started here
Route::resource('slider',SliderController::class);
Route::get('slider-status-change',[SliderController::class,'slider_status_change'])->name('slider-status-change');

//project route started here
Route::resource('project',ProjectController::class);
Route::get('project-status-change',[ProjectController::class,'project_status_change'])->name('project-status-change');


//Hire route started here
Route::resource('hire',HireController::class);
Route::get('hire-status-change',[HireController::class,'hire_status_change'])->name('hire-status-change');

//provide route started here
Route::resource('provide',ProvideController::class);
Route::get('provide-status-change',[ProvideController::class,'provide_status_change'])->name('provide-status-change');

//Route::get('provide', [ProvideController::class, 'index'])->name('provide.index');
//Route::get('provide/create', [ProvideController::class, 'create'])->name('provide.create');
//Route::post('provide/create', [ProvideController::class, 'store'])->name('provide.store');

//customer route started here
Route::get('customer', [CustomerController::class, 'index'])->name('customer.index');

//about route started here
Route::get('about', [AboutController::class, 'index'])->name('about.index');

//Review route started here
Route::get('review', [ReviewController::class, 'index'])->name('review.index');

//contact route started here
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');




