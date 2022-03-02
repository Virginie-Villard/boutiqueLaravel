@extends('Layouts.Layouts.Layout')

@section('title', 'Products list')

@section('content')
    <h1>Products list</h1>

    @foreach($products as $product)
{{--        <a href="{{ $product }}">--}}
            <h2>{{ $product->name }}</h2>
            <p><img src="{{ $product->image }}"/></p>
            <p>{{ $product->description }}</p>
            <p>{{ $product->price }}</p>
{{--        </a>--}}
    @endforeach
@stop

<style>

    .prods
    {
        margin-bottom: 150px;
    }

    .price
    {
        font-size: 16px;
    }

</style>


