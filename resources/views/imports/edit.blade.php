@extends('layouts.app')

@section('content')
<h1>Chỉnh sửa phiếu nhập kho</h1>
<form action="{{ route('imports.update', $import->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="product_id">ID sản phẩm:</label>
    <input type="text" name="product_id" id="product_id" value="{{ $import->product_id }}" required>
    <br>
    <label for="quantity">Số lượng:</label>
    <input type="number" name="quantity" id="quantity" value="{{ $import->quantity }}" required>
    <br>
    <button type="submit">Cập nhật</button>
</form>
@endsection
