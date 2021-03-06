@extends('Layouts.Layouts.Layout')

@section('title', 'Product manager')

@section('content')
    <h1>Product manager</h1>

    <h2>Add a new product</h2>

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>

    @endif


{{--    Form to add a new Product --}}
    <div class=newProduct>

        <form action="{{ url('backoffice/store') }}" method="POST">

            @csrf

            <label for="name">Product name :</label>
            <input type="text" id="name" name="name"
                   minlength="1" maxlength="255"> <br/>

            <label for="description">Product description :</label>
            <input type="text" id="description" name="description"> <br/>

            <label for="price">Product price :</label>
            <input type="text" id="price" name="price"> <br/>

            <label for="image">Product image URL :</label>
            <input type="text" id="image" name="image"> <br/>

            <div id="categoriesChoice">

                <p>
                    Product Categories :
                </p>

{{--                Boucle qui affiche les différents choix à cocher de catégories depuis la BDD
                    pour permettre la création d'un nouveau produit associé à ses catégories --}}
                @foreach($categories as $category)

                    <input type="checkbox" name="category[]" value="{{ $category->id }}">
                        {{ $category->name }}
                    </input>

                @endforeach
            </div>


            <input class="validate" type="submit" name="addNew" value="Add new product">

        </form>

        <table class="backofficeTable">

{{--        Tableau de produits --}}

{{--            Entête de tableau--}}
        <thead>
        <tr>
            <th> Product Name</th>
            <th> Product Description</th>
            <th> Product Price</th>
            <th> Product Image URL</th>
            <th> Product categories</th>
            <th></th>
            <th></th>
        </tr>
        </thead>

{{--            Boucle qui remplit le corps du tableau --}}
        <tbody>

        @foreach($products as $product)

            <tr>
                <td> {{ $product->name }} </td>
                <td> {{ $product->description }} </td>
                <td> {{ $product->price.' €' }} </td>
                <td> {{ $product->image }} </td>


{{--                __ Boucle qui remplit la case categories du tableau --}}
                <td>
                    @foreach($product->categories as $category)

                        <span>{{ $category->name }} / </span>

                    @endforeach
                </td>

{{--                Bouton update pour chaque produit --}}
                <td>
                    <form class="crud" action="{{ route('edit', $product->id) }}" method="GET">
                        @csrf

                        <input class="crud button" type="image"
                               src="https://www.pngkit.com/png/full/84-845323_update-icon-update-icon.png"
                               value="update" alt="update">
                    </form>

                </td>

                <td>

{{--                    Bouton delete pour chaque produit --}}
                    <form class="crud" action="{{ route('delete', $product->id) }}" method="GET">
                        @csrf
                        @method('DELETE')
                        <input type="image"
                               src="https://png.pngtree.com/png-clipart/20190619/original/pngtree-vector-trash-icon-png-image_3991578.jpg"
                               value="delete" alt="delete" class="button">
                        {{--                    https://www.direct-signaletique.com/I-Grande-10792-plaque-de-porte-icone-local-poubelles.net.jpg
                                                https://appdividend.com/2022/01/26/laravel-8-crud/ --}}

                    </form>
                </td>
            </tr>
    @endforeach


    </tbody>
    </table>
    </div>

@endsection
