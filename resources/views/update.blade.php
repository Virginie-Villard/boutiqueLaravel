@extends('Layouts.Layouts.Layout')

@section('title', 'Product manager, Update')

@section('content')
    <h1>Update Product :</h1>

    <h2> {{ $product->name }} </h2>

    <table class="displayProduct">
        <tr>
            <td> {{ $product->name }} </td>
            <td> {{ $product->description }} </td>
            <td> {{ $product->price.' €' }} </td>
            <td>

                @foreach($product->categories as $category)

                    <span>{{ $category->name }} / </span>

                @endforeach
            </td>
            <td> {{ $product->image }} </td>
        </tr>
    </table>

    <div class=updateProduct>

        <form action="{{ route('update', $product->id) }}" method="POST">

            @csrf
            @method('PATCH')

            <label for="name">Product name :</label>
            <input type="text" id="name" name="name" required
                   minlength="1" maxlength="255"> <br/>

            <label for="description">Product description :</label>
            <input type="text" id="description" name="description" required> <br/>

            <label for="price">Product price :</label>
            <input type="text" id="price" name="price" required> <br/>

            <label for="image">Product image URL :</label>
            <input type="text" id="image" name="image" required> <br/>

            <div id="categoriesChoice">

                <p>
                    Product Categories :
                </p>

                @foreach($categories as $category)

                    <input type="checkbox" name="category[]" value="{{ $category->id }}">
                        {{ $category->name }}

                @endforeach
            </div>

            <input class="validate" type="submit" name="update" value="Update product">

        </form>
    </div>
@endsection
