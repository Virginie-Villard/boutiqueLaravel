@extends('Layouts.Layouts.Layout')

@section('title', 'Products list')

@section('content')
    <h1>Products list</h1>

    <select name="sortProducts" id="sortProducts">
        <option value="sortByName">Sort by Name</option>



        <option value="sortByPrice">Sort by Price</option>
    </select>

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
@stop

<style>

    .prods
    {
        margin-bottom: 150px;
    }

    .price
    {
        font-size: 20px;
        color: #067606;
        font-weight: bold;
    }

    h2
    {
        color: #067606;
    }

    p
    {
        color: black;
    }

    a:link
    {
        text-decoration: none;
    }

    h2:hover
    {
        text-decoration: rgba(25, 181, 25, 0.28);
        text-decoration-thickness: 10px;
    }

</style>


