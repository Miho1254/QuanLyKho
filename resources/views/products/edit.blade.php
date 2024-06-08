@extends('layouts.app')

@section('content')
<h1>Chỉnh sửa sản phẩm</h1>
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Tên sản phẩm:</label>
    <input type="text" name="name" id="name" value="{{ $product->name }}" required>
    <br>
    <label for="quantity">Số lượng:</label>
    <input type="number" name="quantity" id="quantity" value="{{ $product->quantity }}" required>
    <br>
    <button type="submit">Cập nhật</button>
</form>
@endsection
