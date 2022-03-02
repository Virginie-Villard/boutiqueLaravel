{{--@see : https://laracasts.com/discuss/channels/laravel/how-to-get-a-title-and-id--}}

@extends('Layouts.Layout')

@section('title')
{{--    Product {{ $id }}--}}

    <div class="prods">
        <a href="./Product">
            <h2>{{ $product->name }}</h2>
            <p><img src="{{ $product->image }}"/></p>
            <p>{{ $product->description }}</p>
            <p class="price">{{ $product->price }} €</p>
        </a>
    </div>
@stop

{{--@section('content')--}}
{{--    <h1>Product {{ $id }}</h1>--}}
{{--@stop--}}


