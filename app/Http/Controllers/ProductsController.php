<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show()
    {
        return "Products list";
    }

    public function showProduct($id)
    {
        return "Product " . $id;
    }
}


