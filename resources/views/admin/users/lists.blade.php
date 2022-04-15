@extends('layouts.admin')

@section('title', $pageTitle)

@section('content')
@can('users.add')
<a href="{{route('admin.users.add')}}" class="btn btn-primary">Thêm mới</a>
<hr>
@endcan
<form action="" method="get">
    <div class="row">
        <div class="col-3">
            <select name="status" class="form-control">
                <option value="all">Tất cả trạng thái</option>
                <option value="active" {{request()->status=='active'?'selected':false}}>Kích hoạt</option>
                <option value="inactive" {{request()->status=='inactive'?'selected':false}}>Chưa kích hoạt</option>
            </select>
        </div>

        <div class="col-3">
            <select name="group_id" class="form-control">
                <option value="0">Tất cả nhóm</option>
                @if ($groupLists->count()>0)
                    @foreach ($groupLists as $item)
                        <option value="{{$item->id}}" {{request()->group_id == $item->id ? 'selected':false}}>{{$item->name}}</option>
                    @endforeach
                @endif
            </select>
        </div>

        <div class="col-3">
            <input type="search" class="form-control" name="keyword" placeholder="Từ khoá..." value="{{request()->keyword}}">
        </div>

        <div class="col-3">
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </div>
       
        <div class="col-6">
            <label for="">Từ: </label>
            <input type="date" name="start_date" class="form-control" value="{{request()->start_date}}"/>
        </div>
        <div class="col-6">
            <label for="">Đến: </label>
            <input type="date" name="end_date" class="form-control" value="{{request()->end_date}}"/>
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
        <th>Email</th>
        <th>Nhóm</th>
        <th width="15%">Trạng thái</th>
        <th width="15%">Thời gian</th>
        @can('users.edit')
        <th width="5%">Sửa</th>
        @endcan
        @can('users.delete')
        <th width="5%">Xoá</th>
        @endcan
    </tr>
    </thead>
    <tbody>
    @if ($userLists->count()>0)
        @foreach ($userLists as $key => $item)
    <tr>
        <td>{{$key + 1}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{!empty($item->group->name)?$item->group->name:''}}</td>
        <td>{!!$item->status==0 ? '<button class="btn btn-warning btn-sm">Chưa kích hoạt</button>':'<button class="btn btn-success btn-sm">Kích hoạt</button>'!!}</td>
        <td>{{\Carbon\Carbon::parse($item['created_at'])->format('d/m/Y H:i:s')}}</td>
        @can('users.edit')
        <td>
            <a href="{{route('admin.users.edit', $item)}}" class="btn btn-warning">Sửa</a>
        </td>
        @endcan
        @can('users.delete')
        <td>
            @if (Auth::user()->id!==$item->id)
            <a onclick="return confirm('Bạn có chắc chắn?')" href="{{route('admin.users.delete', $item)}}" class="btn btn-danger">Xoá</a>
            @endif
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

@if ($userLists->links())
<hr>
<div class="d-flex justify-content-end">
    {{$userLists->links()}}
</div>
@endif
@endsection