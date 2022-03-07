@extends('Layouts.Layouts.Layout')

@section('title', 'Products list')

@section('content')
    <div class="titleLists">
        <h1>Products list</h1>

        <select name="sortProducts" id="sortProducts">
            <option value="sortByName">Sort by Name</option>

            <option value="sortByPrice">Sort by Price</option>
        </select>
    </div>

    @foreach($products as $product)
        <div class="prods">
        <a href="product/{{$product->id}}">
            <h2>{{ $product->name }}</h2>
            <p><img src="{{ $product->image }}"/></p>
            <p>{{ $product->description }}</p>
            <p class="price">{{ $product->price }} €</p>

        </a>
        </div>
    @endforeach
    </div>
@stop



{{--https://img.wtvideo.com/images/original/12981.jpg
fauteuil en carton...
--}}


