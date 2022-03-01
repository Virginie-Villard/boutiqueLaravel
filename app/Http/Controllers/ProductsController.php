<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show()
    {
        return view('Products');
    }

//    public function showProduct($id)
//    {
//        return view('Product'($id));
//    }
}


