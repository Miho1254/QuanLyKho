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
