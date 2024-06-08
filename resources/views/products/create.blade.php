@extends('layouts.app')

@section('content')
<h1>Thêm sản phẩm mới</h1>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label for="name">Tên sản phẩm:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="quantity">Số lượng:</label>
    <input type="number" name="quantity" id="quantity" required>
    <br>
    <button type="submit">Thêm sản phẩm</button>
</form>
@endsection
