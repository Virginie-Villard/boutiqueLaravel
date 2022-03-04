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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
           'name'=>'required',
           'description'=>'required',
            'price'=>'required',
            'image'=>'required'
        ]);

        $product = new Product([
            'name'=>$request->get('name'),
            'description'=>$request->get('description'),
            'price'=>$request->get('price'),
            'image'=>$request->get('image')
        ]);

        $product->save();

        return redirect('/products')->with('success', 'New Product Created');
    }

    /**
     * Display products
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $products = DB::table('products')->get()->sortBy('name');
        return view('Products', ['products'=>$products]);
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sortByPrice()
    {
        $product = Product::all()->sortBy('price');
        return view('Products', ['products' => $product]);
    }
}
