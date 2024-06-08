@extends('layouts.app')

@section('content')
<h1>Sản phẩm hết hàng</h1>
<ul>
    @foreach ($outOfStockProducts as $product)
        <li>{{ $product->name }}</li>
    @endforeach
</ul>
@endsection
