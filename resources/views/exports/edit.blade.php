@extends('layouts.app')

@section('content')
<h1>Chỉnh sửa phiếu xuất kho</h1>
<form action="{{ route('exports.update', $export->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="product_id">ID sản phẩm:</label>
    <input type="text" name="product_id" id="product_id" value="{{ $export->product_id }}" required>
    <br>
    <label for="quantity">Số lượng:</label>
    <input type="number" name="quantity" id="quantity" value="{{ $export->quantity }}" required>
    <br>
    <button type="submit">Cập nhật</button>
</form>
@endsection
