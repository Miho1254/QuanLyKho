@extends('layouts.app')

@section('content')
<h1>Danh sách sản phẩm</h1>
<a href="{{ route('products.create') }}">Thêm sản phẩm mới</a>
<ul>
    @foreach ($products as $product)
        <li>
            <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
            <a href="{{ route('products.edit', $product->id) }}">Chỉnh sửa</a>
        </li>
    @endforeach
</ul>
@endsection
