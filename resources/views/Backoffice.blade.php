@extends('Layouts.Layouts.Layout')

@section('title', 'Product manager')

@section('content')
    <h1>Product manager</h1>

    <div class=formBackoffice>

        <label for="name">Product name :</label>
        <input type="text" id="name" name="name" required
              minlength="1" maxlength="255"> <br />

       <label for="description">Product description :</label>
       <input type="text" id="description" name="description" required> <br />

       <label for="price">Product price :</label>
       <input type="text" id="price" name="price" required> <br />

       <label for="image">Product image URL :</label>
       <input type="text" id="image" name="image" required> <br />

    </div>

@stop
