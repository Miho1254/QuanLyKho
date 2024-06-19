<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sản phẩm</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


@extends('layouts.app')

@section('content')
<h1>Sản phẩm hết hàng</h1>
<ul>
    @foreach ($outOfStockProducts as $product)
        <li>{{ $product->name }}</li>
    @endforeach
</ul>
@endsection

</html>
