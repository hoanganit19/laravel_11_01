@extends('layouts.app')

@section('title', 'Đăng nhập hệ thống')

@section('content')

<p class="login-box-msg">Vui lòng đăng nhập để tiếp tục</p>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="input-group mb-3">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email..." autofocus>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
        @error('email')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>

    <div class="input-group mb-3">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mật khẩu...">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
        @error('password')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>

    <div class="row">
        <div class="col-12">
            <div class="icheck-primary">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">
                    Duy trì đăng nhập
                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
        </div>
        <!-- /.col -->
    </div>
    <hr>
    <p class="mb-1">
        <a href="{{route('password.request')}}">Quên mật khẩu</a>
    </p>

</form>

@endsection
