@extends('layouts.admin-errors')

@section('title', 'Không có quyền truy cập')

@section('content')

<div class="py-5">
    <h1 class="text-center">BẠN KHÔNG CÓ QUYỀN TRUY CẬP</h1>
    <p class="text-center"><a href="#" onclick="window.history.back(); return false;" class="btn btn-primary">Quay lại</a></p>
</div>

@endsection