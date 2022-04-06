@extends('layouts.admin')

@section('title', $pageTitle)

@section('content')

<a href="{{route('admin.categories.add')}}" class="btn btn-primary">Thêm mới</a>
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
        <th>Tên</th>
        <th width="15%">Thời gian</th>
        <th width="5%">Sửa</th>
        <th width="5%">Xoá</th>
    </tr>
    </thead>
    <tbody>
    @if ($categoriesLists->count()>0)
    @php
        $count = 0;
    @endphp
    @foreach ($categoriesLists as $key => $item)
        @php
            $count++;
        @endphp
        @include('admin.categories.table.parent_category')

        @foreach ($item->childrenCategories as $children)
            @php
                $count++;
            @endphp
            @include('admin.categories.table.children_category', ['childCategory' => $children, 'char'=>' -- ', $count])
        @endforeach
    @endforeach
    @else
    <tr>
        <td colspan="8" class="text-center">Không có danh mục</td>
    </tr>
    @endif
    </tbody>
</table>

@if ($categoriesLists->links())
<hr>
<div class="d-flex justify-content-end">
    {{$categoriesLists->links()}}
</div>
@endif
@endsection