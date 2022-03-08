<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BackofficeController;

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

// @ see : https://laravel.sillo.org/laravel-8/

Route::get('/', [HomeController::class, 'show']);

Route::get('/products/sortByPrice', [ProductsController::class, 'sortByPrice']);

Route::get('/products', [ProductsController::class, 'show']);

Route::get('/product/{id}', [ProductsController::class, 'showProduct']);

Route::get('/cart', [CartController::class, 'show']);

//___Backoffice_________________

Route::get('/backoffice',[BackofficeController::class, 'index']);

Route::post('/backoffice/store',[BackofficeController::class, 'store']);

Route::get('/backoffice/edit/{id}',[BackofficeController::class, 'edit'])->name('edit');

Route::patch('/backoffice/update/{id}',[BackofficeController::class, 'update'])->name('update');

Route::get('/backoffice/destroy/{id}',[BackofficeController::class, 'destroy'])->name('delete');

//___Category_________________
