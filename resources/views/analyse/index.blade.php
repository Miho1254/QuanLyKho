@extends('layouts.app')

@section('content')
<h1>Thống kê số lượng hàng còn lại</h1>
<ul>
    @foreach ($products as $product)
        <li>{{ $product->name }}: {{ $product->quantity }}</li>
    @endforeach
</ul>
@endsection
