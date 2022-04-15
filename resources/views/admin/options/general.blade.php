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
        <label for="">Hotline 1</label>
        <input type="text" class="form-control" name="general_hotline_1" placeholder="Hotline 1..." value="{{getOption('general_hotline_1')}}"/>
        @error('general_hotline_1')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Hotline 2</label>
        <input type="text" class="form-control" name="general_hotline_2" placeholder="Hotline 2..." value="{{getOption('general_hotline_2')}}"/>
        @error('general_hotline_2')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Email</label>
        <input type="text" class="form-control" name="general_email" placeholder="Email..." value="{{getOption('general_email')}}"/>
        @error('general_email')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Địa chỉ</label>
        <input type="text" class="form-control" name="general_address" placeholder="Địa chỉ..." value="{{getOption('general_address')}}"/>
        @error('general_address')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Thời gian làm việc</label>
        <input type="text" class="form-control" name="general_timework" placeholder="Thời gian làm việc..." value="{{getOption('general_timework')}}"/>
        @error('general_timework')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Facebook</label>
        <input type="text" class="form-control" name="general_facebook" placeholder="Facebook..." value="{{getOption('general_facebook')}}"/>
        @error('general_facebook')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">LinkedIn</label>
        <input type="text" class="form-control" name="general_linkedin" placeholder="LinkedIn..." value="{{getOption('general_linkedin')}}"/>
        @error('general_linkedin')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Youtube</label>
        <input type="text" class="form-control" name="general_youtube" placeholder="Youtube..." value="{{getOption('general_youtube')}}"/>
        @error('general_youtube')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>

    @csrf
</form>

@endsection