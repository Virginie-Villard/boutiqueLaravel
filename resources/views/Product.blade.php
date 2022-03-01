{{--@see : https://laracasts.com/discuss/channels/laravel/how-to-get-a-title-and-id--}}

@extends('Layout')

@section('title')
    Product {{ $id }}
@stop

@section('content')
    <h1>Product {{ $id }}</h1>
@stop



