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
        <label for="">Nhóm</label>
        <select name="group_id" class="form-control">
            <option value="">Chọn nhóm</option>
            @if ($groupLists->count()>0)
            @foreach ($groupLists as $item)
            <option value="{{$item->id}}" {{old('group_id') == $item->id || $user->group_id==$item->id? 'selected':false}}>{{$item->name}}</option>
            @endforeach
            @endif
        </select>
        @error('group_id')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Trạng thái</label>
        <select name="status" class="form-control">
            <option value="0" {{old('status')==0 || $user->status==0?'selected':false}}>Chưa kích hoạt</option>
            <option value="1" {{old('status')==1 || $user->status==1?'selected':false}}>Kích hoạt</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="">Mật khẩu</label>
        <input type="password" class="form-control" name="password" placeholder="Mật khẩu..."/>
        @error('password')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Nhập lại mật khẩu</label>
        <input type="password" class="form-control" name="confirm_password" placeholder="Nhập lại mật khẩu..."/>
        @error('confirm_password')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>

    @csrf
</form>

@endsection