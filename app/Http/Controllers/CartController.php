<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        \Cart::add([
//            'id' => $request->id,
//            'name' => $request->name,
//            'price' => $request->price,
//            'quantity' => $request->quantity,
//            'attributes' => array(
//                'image' => $request->image,
//            )
//        ]);
//        session()->flash('success', 'Product is Added to Cart Successfully !');
//
//        return redirect()->route('cart.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('cart', compact('cartItems'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
//        \Cart::update(
//            $request->id,
//            [
//                'quantity' => [
//                    'relative' => false,
//                    'value' => $request->quantity
//                ],
//            ]
//        );
//
//        session()->flash('success', 'Item Cart is Updated Successfully !');
//
//        return redirect()->route('cart.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
//        \Cart::remove($request->id);
//        session()->flash('success', 'Item Cart Remove Successfully !');

//        return redirect()->route('cart.list');
    }

    public function clearAll()
    {
//        \Cart::clear();
//
//        session()->flash('success', 'All Item Cart Clear Successfully !');
//
//        return redirect()->route('cart.list');
    }
}
