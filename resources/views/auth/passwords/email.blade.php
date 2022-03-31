@extends('layouts.app')

@section('title', 'Khôi phục mật khẩu')

@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <div class="input-group mb-3">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Địa chỉ email..." autofocus>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
        @error('email')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>


    <div class="row">
        <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Gửi yêu cầu</button>
            <p class="text-center"><a href="{{route('login')}}">Quay lại đăng nhập</a></p>
        </div>
        <!-- /.col -->
    </div>
</form>
@endsection
