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

    <div class="mb-3">
        <label for="">Đường dẫn tĩnh</label>
        <input type="text" class="form-control" name="slug" placeholder="Đường dẫn tĩnh..." value="{{old('slug')}}"/>
        @error('slug')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Mô tả</label>
        <textarea name="description" class="form-control editor">{{old('description')}}</textarea>
        @error('description')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Banner</label>
        <div class="row ckfinder-group">
            <div class="col-10">
                <input type="text" class="form-control render-url" name="banner_url" placeholder="Đường dẫn ảnh..." value="{{old('banner_url')}}"/>
                <p><img class="preview thumbnail" style="display: none; width: 200px; margin-top: 5px;" src="" alt=""></p>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-success choose">Chọn</button>
            </div>
        </div>

        @error('banner_url')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Danh mục cha</label>
        <select name="parent_id" class="form-control">
            <option value="0">Không</option>
            @php
            getCategoriesSelect($dataCategories);
            @endphp
        </select>
        @error('parent_id')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Thêm mới</button>

    @csrf
</form>

@endsection
