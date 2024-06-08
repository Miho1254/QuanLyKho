@extends('layouts.app')

@section('content')
<h1>Danh sách phiếu xuất kho</h1>
<a href="{{ route('exports.create') }}">Tạo phiếu xuất kho</a>
<ul>
    @foreach ($exports as $export)
        <li>
            <a href="{{ route('exports.edit', $export->id) }}">{{ $export->id }}</a>
        </li>
    @endforeach
</ul>
@endsection
