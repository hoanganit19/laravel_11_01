@extends('layouts.admin')

@section('title', $pageTitle)

@section('content')

<a href="{{route('admin.products.add')}}" class="btn btn-primary">Thêm mới</a>
<hr>

<table class="table table-bordered">
    <thead>
        <tr>
            <th width="5%">STT</th>
            <th>Tên</th>
            <th>Giá</th>
            <th width="5%">Sửa</th>
            <th width="5%">Xoá</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>
                <a href="#" class="btn btn-warning">Sửa</a>
            </td>
            <td>
                <a href="#" class="btn btn-danger">Xoá</a>
            </td>
        </tr>
    </tbody>
</table>

@endsection