@extends('layouts.app')

@section('content')
<h1>Trang chủ</h1>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Đăng xuất</button>
</form>
@endsection
