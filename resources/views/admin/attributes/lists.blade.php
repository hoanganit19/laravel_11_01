@extends('layouts.admin')

@section('title', $pageTitle)

@section('content')

<a href="{{route('admin.attributes.add')}}" class="btn btn-primary">Thêm mới</a>
<hr>
<form action="" method="get">
    <div class="row">

        <div class="col-10">
            <input type="search" class="form-control" name="keyword" placeholder="Từ khoá..." value="{{request()->keyword}}">
        </div>

        <div class="col-2">
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </div>


    </div>
</form>
<hr>
@if (session('msg'))
<div class="alert alert-success">{{session('msg')}}</div>
@endif
<table class="table table-bordered">
    <thead>
    <tr>
        <th width="5%">STT</th>
        <th>Tên</th>
        <th width="15%">Thời gian</th>
        <th width="15%">Giá trị</th>
        <th width="5%">Sửa</th>
        <th width="5%">Xoá</th>
    </tr>
    </thead>
    <tbody>
    @if ($attributeLists->count()>0)
    @foreach ($attributeLists as $key => $item)
    <tr>
        <td>{{$key + 1}}</td>
        <td>
            {{$item->name}}
        </td>
        <td>{{\Carbon\Carbon::parse($item['created_at'])->format('d/m/Y H:i:s')}}</td>
        <td>
            <a href="{{route('admin.attribute.values.index', $item)}}" class="btn btn-primary">Xem giá trị</a>
        </td>
        <td>
            <a href="{{route('admin.attributes.edit', $item)}}" class="btn btn-warning">Sửa</a>
        </td>
        <td>
            <a onclick="return confirm('Bạn có chắc chắn?')" href="{{route('admin.attributes.delete', $item)}}" class="btn btn-danger">Xoá</a>
        </td>
    </tr>
    @endforeach
    @else
    <tr>
        <td colspan="8" class="text-center">Không có thuộc tính</td>
    </tr>
    @endif
    </tbody>
</table>

@if ($attributeLists->links())
<hr>
<div class="d-flex justify-content-end">
    {{$attributeLists->links()}}
</div>
@endif
@endsection