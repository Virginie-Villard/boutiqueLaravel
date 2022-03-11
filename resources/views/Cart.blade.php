@extends('Layouts.Layouts.Layout')

@section('title', 'Cart')

@section('content')
    <h1>Cart</h1>

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>

    @endif

    @foreach($cartItems-products as $product)
{{--        Display products  --}}
    @endforeach
@stop


