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
        $products = DB::table('products')->get()->where(['id'=>$id]);
        return view('Products', ['id'=>$id])->with('id', $id);
    }
}


