<!doctype html>
{{-- @see : https://www.cloudways.com/blog/create-laravel-blade-layout/
    @see : https://stackoverflow.com/questions/34497428/laravel-dynamic-page-title-in-navbar-brand
--}}
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title> @yield('title') </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">

</head>



