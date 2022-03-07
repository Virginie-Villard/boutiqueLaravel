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


Route::get('/backoffice/index',[BackofficeController::class, 'index']);

Route::get('/backoffice/create',[BackofficeController::class, 'create']);

Route::post('/backoffice/store',[BackofficeController::class, 'store']);

Route::get('/backoffice/edit',[BackofficeController::class, 'edit']);

Route::put('/backoffice/update',[BackofficeController::class, 'update']);

Route::get('/backoffice/delete',[BackofficeController::class, 'delete']);

