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
{{--                    https://www.direct-signaletique.com/I-Grande-10792-plaque-de-porte-icone-local-poubelles.net.jpg --}}

                    <input type="image" src="https://www.pngkit.com/png/full/84-845323_update-icon-update-icon.png"
                       value="update" alt="update" class="button">
            </form>

        </a>
        </div>
    @endforeach

    <h3>Add a new product</h3>

    <div id="newProduct">
        <form acton="{{ url('backoffice') }}" method="POST">
            @csrf
            <label for="name" name="name">Product Name :   </label>
            <input type="text" name="name">

            <label for="description" name="description">Product Description :   </label>
            <input type="text" name="description">

            <label for="price" name="price">Product Price :   </label>
            <input type="text" name="price">

            <label for="image" name="image">Product Image :   </label>
            <input type="text" name="image">

            <input type="submit" name="addNew" value="Add new product">

        </form>
    </div>
@stop



{{--https://img.wtvideo.com/images/original/12981.jpg
fauteuil en carton...
--}}


