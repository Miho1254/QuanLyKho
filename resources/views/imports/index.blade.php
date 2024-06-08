@extends('layouts.app')

@section('content')
<h1>Danh sách phiếu nhập kho</h1>
<a href="{{ route('imports.create') }}">Tạo phiếu nhập kho</a>
<ul>
    @foreach ($imports as $import)
        <li>
            <a href="{{ route('imports.edit', $import->id) }}">{{ $import->id }}</a>
        </li>
    @endforeach
</ul>
@endsection
