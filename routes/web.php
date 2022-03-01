<?php

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
    return 'Home page';
});

Route::get('/products', function () {
    return 'Products list';
});

Route::get('/product/{id}', function ($id) {
    return 'Product ' . $id;
});

Route::get('/cart', function () {
    return 'Cart';
});
