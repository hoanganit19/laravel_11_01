@extends('layouts.admin')

@section('title', $pageTitle)

@section('content')
@can('groups.add')
<a href="{{route('admin.groups.add')}}" class="btn btn-primary">Thêm mới</a>
<hr>
@endcan
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
        @can('groups.permission')
        <th width="15%">Phân quyền</th>
        @endcan
        @can('groups.edit')
        <th width="5%">Sửa</th>
        @endcan
        @can('groups.delete')
        <th width="5%">Xoá</th>
        @endcan
    </tr>
    </thead>
    <tbody>
    @if ($groupLists->count()>0)
    @foreach ($groupLists as $key => $item)
    <tr>
        <td>{{$key + 1}}</td>
        <td>{{$item->name}}</td>
        <td>{{\Carbon\Carbon::parse($item['created_at'])->format('d/m/Y H:i:s')}}</td>
        @can('groups.permission')
        <td>
            <a href="{{route('admin.groups.permission', $item)}}" class="btn btn-primary">Phân quyền</a>
        </td>
        @endcan
        @can('groups.edit')
        <td>
            <a href="{{route('admin.groups.edit', $item)}}" class="btn btn-warning">Sửa</a>
        </td>
        @endcan
        @can('groups.delete')
        <td>
            <a onclick="return confirm('Bạn có chắc chắn?')" href="{{route('admin.groups.delete', $item)}}" class="btn btn-danger">Xoá</a>
        </td>
        @endcan
    </tr>
    @endforeach
    @else
    <tr>
        <td colspan="8" class="text-center">Không có nguời dùng</td>
    </tr>
    @endif
    </tbody>
</table>

@if ($groupLists->links())
<hr>
<div class="d-flex justify-content-end">
    {{$groupLists->links()}}
</div>
@endif
@endsection