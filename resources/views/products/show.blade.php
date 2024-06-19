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
<h1>{{ $product->name }}</h1>
<p>Số lượng: {{ $product->quantity }}</p>
<a href="{{ route('products.edit', $product->id) }}">Chỉnh sửa</a>
<form action="{{ route('products.destroy', $product->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Xóa</button>
</form>
@endsection

</html>
