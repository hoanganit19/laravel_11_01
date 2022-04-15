@extends('layouts.admin')

@section('title', $pageTitle)

@section('content')

@if (session('msg'))
<div class="alert alert-success">{{session('msg')}}</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">Vui lòng kiểm tra lại dữ liệu</div>
@endif


<div class="row">
    @can('attributes.add')
    <div class="col-6">
        <form action="{{route('admin.attribute.values.add', $attribute)}}" method="post">
            <div class="mb-3">
                <label for="">Tên</label>
                <input type="text" class="form-control" name="value" placeholder="Giá trị..." value="{{old('value')}}"/>
                @error('value')
                <span style="color: red">{{$message}}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Thêm mới</button>
            <a href="{{route('admin.attributes.index')}}" class="btn btn-warning">Danh sách thuộc tính</a>
            @csrf
        </form>
    </div>
    @endcan

    @can('attributes.add')
    <div class="col-6">
    @else
        <div class="col-12">
    @endcan
        @include('admin.attributes_values.table')
    </div>
</div>

@endsection