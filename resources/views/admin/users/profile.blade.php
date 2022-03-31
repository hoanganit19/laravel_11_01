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
        <input type="text" class="form-control" name="name" placeholder="Tên của bạn..." value="{{old('name') ?? $user->name}}"/>
        @error('name')
            <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Email..." value="{{old('email') ?? $user->email}}"/>
        @error('email')
            <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Mật khẩu</label>
        <input type="password" class="form-control" name="password" placeholder="Mật khẩu (Không nhập nếu không thay đổi)..."/>
        @error('password')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Nhập lại mật khẩu</label>
        <input type="password" class="form-control" name="confirm_password" placeholder="Nhập lại mật khẩu (Không nhập nếu không thay đổi)..."/>
        @error('confirm_password')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Cập nhật</button>

    @csrf
</form>

@endsection