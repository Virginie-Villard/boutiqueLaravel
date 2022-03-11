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
            <input type="text" id="name" name="name"
                   minlength="1" maxlength="255" value="{{ $product->name }}"> <br/>

            <label for="description">Product description :</label>
            <input type="text" id="description" name="description" value="{{ $product->description }}"> <br/>

            <label for="price">Product price :</label>
            <input type="text" id="price" name="price" value="{{ $product->price }}"> <br/>

            <label for="image">Product image URL :</label>
            <input type="text" id="image" name="image" value="{{ $product->image }}"> <br/>

            <div id="categoriesChoice">

                <p>
                    Product Categories :
                </p>

                @foreach($categories as $category)

                    <input type="checkbox" name="category[]" value="{{ $category->id }}"
                        {{ old('$category') == 'on' ? 'checked' : '' }}>
                        {{ $category->name }}

                @endforeach
            </div>

            <input class="validate" type="submit" name="update" value="Update product">

        </form>
    </div>
@endsection
