<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function show()
    {
        $products = DB::table('products')->get();
        //dd($products);
        return view('Products', ['products'=>$products]);
    }

    public function showProduct($id)
    {
        return view('Product', ['id'=>$id])->with('id', $id);
    }
}


