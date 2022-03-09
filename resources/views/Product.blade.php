{{--@see : https://laracasts.com/discuss/channels/laravel/how-to-get-a-title-and-id--}}

@extends('Layouts.Layouts.Layout')

@section('title')
    Product {{ $product->id }}
@endsection

@section('content')
        <div class="prods">
                <h2>{{ $product->name }}</h2>

                <p><img src="{{ $product->image }}"/></p>
                <p>{{ $product->description }}</p>
                <p class="price">{{ $product->price }} €</p>

            <ul> Categories :
                @foreach($product->categories as $category)
                    <li>{{ $category->name }}</li>
                @endforeach
            </ul>

        </div>
@stop



