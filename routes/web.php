<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [StaticController::class, 'index']) -> name('home');

Route::get('/contact', [StaticController::class, 'contact']) -> name('contact');

Route::get('/about', [StaticController::class, 'about']) -> name('about');

Route::resource('products', ProductsController::class);