@extends('layouts.admin')

@section('title', $pageTitle)

@section('content')

@if ($errors->any())
<div class="alert alert-danger">Vui lòng kiểm tra lại dữ liệu</div>
@endif

@if (session('msg'))
<div class="alert alert-success">{{session('msg')}}</div>
@endif

<form action="" method="post">
    <div class="mb-3">
        <label for="">Tên</label>
        <input type="text" class="form-control" name="name" placeholder="Tên của bạn..." value="{{old('name')}}"/>
        @error('name')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Thêm mới</button>

    @csrf
</form>

@endsection