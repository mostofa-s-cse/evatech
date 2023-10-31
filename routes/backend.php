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
Route::get('slider', [SliderController::class, 'index'])->name('slider.index');
Route::get('slider/create', [SliderController::class, 'create'])->name('slider.create');
Route::post('slider/create', [SliderController::class, 'store'])->name('slider.store');

//project route started here
Route::get('project', [ProjectController::class, 'index'])->name('project.index');
Route::get('project/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('project/create', [ProjectController::class, 'store'])->name('project.store');

//Hire route started here
Route::get('hire', [HireController::class, 'index'])->name('hire.index');
Route::get('hire/create', [HireController::class, 'create'])->name('hire.create');
Route::post('hire/create', [HireController::class, 'store'])->name('hire.store');

//provide route started here
Route::get('provide', [ProvideController::class, 'index'])->name('provide.index');
Route::get('provide/create', [ProvideController::class, 'create'])->name('provide.create');
Route::post('provide/create', [ProvideController::class, 'store'])->name('provide.store');

//customer route started here
Route::get('customer', [CustomerController::class, 'index'])->name('customer.index');

//about route started here
Route::get('about', [AboutController::class, 'index'])->name('about.index');

//Review route started here
Route::get('review', [ReviewController::class, 'index'])->name('review.index');

//contact route started here
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');




