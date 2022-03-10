<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()->sortBy('name');
        $categories = Category::all();
        // $products = Product::find(1);
        return view('/backoffice', ['products'=>$products, 'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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

        $product->categories()->sync($request->input('categories', []));

        $product->save();

        return redirect('/backoffice')->with(['success'=>'New Product Created']);
    }

    /**
     * Show the form for editing specified resource.
     *
     * @param int $id
     * @returns
     */
    public function edit ($id)
    {
        $product = Product::findOrFail($id);

        return view('update',  ['product'=>$product]);
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
        $product = Product::findOrFail($id);

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->image = $request->input('image');

        $product->update();

        return redirect('backoffice')->with('success', 'Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('backoffice')->with('success', 'Product is successfully deleted');
    }
}
