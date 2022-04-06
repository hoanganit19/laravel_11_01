@extends('layouts.admin')

@section('title', $pageTitle)

@section('content')

<a href="{{route('admin.products.add')}}" class="btn btn-primary">Thêm mới</a>
<hr>

<form action="" method="get">
    <div class="row">

        <div class="col-3">
            <select name="category_id" class="form-control" id="">
                <option value="0">Tất cả danh mục</option>
                @php
                getCategoriesSelect($dataCategories, 0, '', request()->category_id);
                @endphp
            </select>
        </div>

        <div class="col-4">
            <div class="row">
                <div class="col-6">
                    <input type="number" name="price_from" class="form-control" placeholder="Giá từ..." value="{{request()->price_from}}"/>
                </div>
                <div class="col-6">
                    <input type="number" name="price_to" class="form-control" placeholder="Giá đến..." value="{{request()->price_to}}"/>
                </div>
            </div>
        </div>

        <div class="col-4">
            <input type="search" class="form-control" name="keyword" placeholder="Từ khoá..." value="{{request()->keyword}}">
        </div>

        <div class="col-1">
            <button type="submit" class="btn btn-primary">Tìm</button>
        </div>


    </div>

    <div class="row mt-3">
        <div class="col-3">
            <input type="date" name="date_start" class="form-control" placeholder="Từ ngày..." value="{{request()->date_start}}"/>
        </div>
        <div class="col-3">
            <input type="date" name="date_end" class="form-control" placeholder="Đến ngày..." value="{{request()->date_end}}"/>
        </div>
    </div>
</form>
<hr>

@if (session('msg'))
<div class="alert alert-success">{{session('msg')}}</div>
@endif

<div style="overflow-x: auto;">
    <table style="width: 100%;" class="table table-bordered">
        <thead>
        <tr>
            <th width="10%">Ảnh</th>
            <th>Tên</th>
            <th>Giá</th>
            <th>Danh mục</th>
            <th>Bán chạy</th>
            <th>Nổi bật</th>
            <th width="5%">Sửa</th>
            <th width="5%">Xoá</th>
        </tr>
        </thead>
        <tbody>
        @if ($productsLists->count()>0)
            @foreach ($productsLists as $item)
            <tr>
                <td>
                    <img src="{{$item->thumbnail}}" style="width: 80px; height: auto;" alt="">
                </td>
                <td>{{$item->name}}</td>
                <td>
                    @if (!empty($item->sale_price))

                    <del>{{!empty($item->regular_price)?number_format($item->regular_price).' đ':'Liên hệ'}}</del> <br/>

                    <ins>{{number_format($item->sale_price)}}</ins>

                    @else
                    <ins>{{!empty($item->regular_price)?number_format($item->regular_price).' đ':'Liên hệ'}}</ins>
                    @endif
                </td>
                <td>
                    @php
                    $categoryOutput = '';
                    $categories = $item->categories;
                    if (!empty($categories)){
                        foreach ($categories as $category){
                            $categoryOutput.=$category->name.', ';
                        }
                    }

                    echo rtrim($categoryOutput, ', ');
                    @endphp
                </td>
                <td>
                    {{!empty($item->is_best_seller)?'Có':'Không'}}
                </td>
                <td>
                    {{!empty($item->is_feature)?'Có':'Không'}}
                </td>
                <td>
                    <a href="{{route('admin.products.edit', $item)}}" class="btn btn-warning">Sửa</a>
                </td>
                <td>
                    <a onclick="return confirm('Bạn có chắc chắn?')" href="{{route('admin.products.delete', $item)}}" class="btn btn-danger">Xoá</a>
                </td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    @if ($productsLists->links())
    <hr>
    <div class="d-flex justify-content-end">
        {{$productsLists->links()}}
    </div>
    @endif
</div>

@endsection