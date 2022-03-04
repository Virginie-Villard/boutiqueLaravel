<?php

namespace App\Http\Controllers;

use App\Models\Product;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Display products sorts by name
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $products = DB::table('products')->get()->sortBy('name');
        return view('Products', ['products'=>$products]);
    }

    /**
     * Display products sorts by price
     *
     * @return \Illuminate\Http\Response
     */
    public function sortByPrice()
    {
        $product = Product::all()->sortBy('price');
        return view('Products', ['products' => $product]);
    }

    /**
     * Display product by id
     *
     * @param $id
     * @return \Illuminate\Http\Response
     *
     * @see : https://blog.quickadminpanel.com/5-ways-to-use-raw-database-queries-in-laravel/
     * @see : https://laravel.com/docs/4.2/queries#selects !!!
     */
    public function showProduct($id)
    {
        $product = Product::find($id);

        return view('Product', ['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $product = Product::find($id);
//
//        return view('product.edit', 'product');
    }
}
