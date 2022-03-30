@extends('layouts.admin')

@section('title', $pageTitle)

@section('content')

<form action="" method="post">
    <div class="mb-3">
        <label for="">Tên</label>
        <input type="text" class="form-control" name="name" placeholder="Tên sản phẩm..."/>
    </div>

    <div class="mb-3">
        <label for="">Giá</label>
        <input type="text" class="form-control" name="price" placeholder="Giá sản phẩm..."/>
    </div>

    <button type="submit" class="btn btn-primary">Thêm mới</button>
    <a href="{{route('admin.products.index')}}" class="btn btn-success">Danh sách</a>
</form>

@endsection