<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function show()
    {
        $products = DB::table('products')->get();
        return view('Products', ['products'=>$products]);
    }

    public function showProduct($id)
    {
        // @see : https://blog.quickadminpanel.com/5-ways-to-use-raw-database-queries-in-laravel/
        // @see : https://laravel.com/docs/4.2/queries#selects !!!

        $productById = DB::table('products')->where('id', $id)->first();
        return view('Product', ['product'=>$productById]);
    }
}


