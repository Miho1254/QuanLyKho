@extends('layouts.app')

@section('content')
<h1>Tạo phiếu nhập kho</h1>
<form action="{{ route('imports.store') }}" method="POST">
    @csrf
    <label for="product_id">ID sản phẩm:</label>
    <input type="text" name="product_id" id="product_id" required>
    <br>
    <label for="quantity">Số lượng:</label>
    <input type="number" name="quantity" id="quantity" required>
    <br>
    <button type="submit">Tạo phiếu nhập kho</button>
</form>
@endsection
