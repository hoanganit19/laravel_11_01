@extends('layouts.client')

@section('title', $pageTitle)

@section('sidebar')
@parent
<h3>Sidebar trang chủ</h3>
@endsection

@section('content')
<h1 style="text-align: center;">ỨNG DỤNG LARAVEL ĐẦU TIÊN</h1>
<h2 style="text-align: center;">{{!empty($title) ? $title: ''}}</h2>
<h3 style="text-align: center;">{{$subTitle ?? ''}}</h3>

<h2 style="text-align: center;"><a href="{{route('login')}}">Đăng nhập</a></h2>

<h3>Chuyên mục: <a href="{{route('category', ['slug'=>'thoi-su-01', 'id'=>10])}}">Thời sự</a></h3>

<h3>
    <a href="{{route('admin.index')}}">Trang quản trị</a>
</h3>

<h3>
    <a href="{{route('admin.products.index')}}">Quản lý sản phẩm</a>
</h3>


<h3>
    <a href="{{route('admin.products.add')}}">Thêm sản phẩm</a>
</h3>

{{--
<div class="content">
    {!!$content!!}
</div>
--}}

@if (!empty($userLists))
@php
$count = 0;
@endphp
@foreach ($userLists as $item)
@php
$count+=2;
@endphp
<p>{{$count.' => '.$item}}</p>
@endforeach
@else
<p>Không có người dùng</p>
@endif

<hr>

<h2>Danh sách sản phẩm</h2>
@for ($index = 1; $index <= 5; $index++)

@include('home.template-parts.product')

@endfor

<script>
    @{{name}}
</script>
@endsection

@section('css')
<style>
    header{
        color: green;
    }
</style>
@endsection

@section('js')
<script>
    $(document).ready(function () {
        //alert('Ok');
    });
</script>
@endsection