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

            <form id="crud" action="{{ url('products') }}" method="POST">

                @csrf
                    <input type="image" src="https://png.pngtree.com/png-clipart/20190619/original/pngtree-vector-trash-icon-png-image_3991578.jpg"
                           value="delete" alt="delete" class="button">
{{--                    https://www.direct-signaletique.com/I-Grande-10792-plaque-de-porte-icone-local-poubelles.net.jpg
                        https://appdividend.com/2022/01/26/laravel-8-crud/
                        TODO : Conditionnel au fait d'être admin ? --}}

                    <input type="image" src="https://www.pngkit.com/png/full/84-845323_update-icon-update-icon.png"
                       value="update" alt="update" class="button">
            </form>

        </a>
        </div>
    @endforeach
    </div>
@stop



{{--https://img.wtvideo.com/images/original/12981.jpg
fauteuil en carton...
--}}


