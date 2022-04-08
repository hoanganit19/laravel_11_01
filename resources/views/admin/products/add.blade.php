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
        <input type="text" class="form-control" name="name" placeholder="Tên sản phẩm..." value="{{old('name')}}"/>
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
        <label for="">Giá bán thường</label>
        <input type="text" class="form-control" name="regular_price" placeholder="Giá sản phẩm..." value="{{old('regular_price')}}"/>
        @error('regular_price')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Giá khuyến mãi</label>
        <input type="text" class="form-control" name="sale_price" placeholder="Giá khuyến mãi..." value="{{old('sale_price')}}"/>
        @error('sale_price')
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
        <label for="">Ảnh đại diện</label>
        <div class="row ckfinder-group">
            <div class="col-10">
                <input type="text" class="form-control render-url" name="thumbnail" placeholder="Đường dẫn ảnh..." value="{{old('thumbnail')}}"/>
                <p><img class="preview thumbnail" style="display: none; width: 200px; margin-top: 5px;" src="" alt=""></p>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-success choose">Chọn</button>
            </div>
        </div>

        @error('thumbnail')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Chi tiết sản phẩm</label>
        <textarea name="content" class="form-control editor">{{old('content')}}</textarea>
        @error('content')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Sản phẩm bán chạy</label>
        <select name="is_best_seller" class="form-control">
            <option value="0" {{old('is_best_seller')==0?'selected':false}}>Không</option>
            <option value="1" {{old('is_best_seller')==1?'selected':false}}>Có</option>
        </select>
        @error('is_best_seller')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Sản phẩm nổi bật</label>
        <select name="is_feature" class="form-control">
            <option value="0" {{old('is_feature')==0?'selected':false}}>Không</option>
            <option value="1" {{old('is_feature')==1?'selected':false}}>Có</option>
        </select>
        @error('is_feature')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Danh mục sản phẩm</label>

        <div class="list-categories" style="max-height: 300px; overflow-y: auto;">
            @php
            $currentCategoriesArr = old('category_id');

            getCategoriesCheckbox($dataCategories, 0, '', $currentCategoriesArr);
            @endphp
        </div>

        @error('category_id')
        <span style="color: red">{{$message}}</span>
        @enderror
    </div>
    @php
        if (old('attribute')){
            $attributeArr = old('attribute');
        }else{
            $attributeArr = [];
        }

    @endphp
    <div class="mb-3">
        <label for="">Thuộc tính</label>
        <hr>
        <div class="list-categories">
            @if ($attributes->count()>0)
                @foreach ($attributes as $attribute)
                    <p><b><i>{{$attribute->name}}</i></b></p>
                    <div class="row attributes-wrap" data-attribute="{{$attribute->id}}">
                    @if ($attribute->values)

                            @foreach ($attribute->values as $value)
                                <div class="col-2">
                                    <label for="attribute_{{$attribute->id}}_{{$value->id}}"><input type="checkbox" name="attribute[{{$attribute->id}}][]" id="attribute_{{$attribute->id}}_{{$value->id}}" value="{{$value->id}}" {{!empty($attributeArr[$attribute->id]) && in_array($value->id, $attributeArr[$attribute->id]) ? 'checked':false}}/> {{$value->value}}</label>
                                </div>
                            @endforeach

                        @endif
                        <div class="col-2">
                            <button type="button" class="btn btn-success btn-sm add-attr-values">Thêm giá trị</button>
                        </div>
                    </div>
                    <hr>
                @endforeach
            @endif
        </div>
    </div>

    <div class="mb-3">
        <label for="">Thư viện ảnh</label>

        <div class="gallery-wrapper">

            <div class="gallery-lists">
                @if (old('gallery'))
                    @foreach (old('gallery') as $item)
                        <div class="gallery-item">
                            <div class="row ckfinder-group">
                                <div class="col-10">
                                    <input type="text" class="form-control render-url" name="gallery[]" placeholder="Đường dẫn ảnh..." value="{{$item}}"/>

                                    <p><img class="preview thumbnail" style="width: 200px; margin-top: 5px;" src="{{$item}}" alt=""></p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-success choose">Chọn</button>
                                    <button type="button" class="btn btn-danger remove">&times;</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <button type="button" class="btn btn-warning btn-sm add-image">Thêm ảnh</button>

        </div>

    </div>

    <button type="submit" class="btn btn-primary">Thêm mới</button>

    @csrf
</form>

@endsection
