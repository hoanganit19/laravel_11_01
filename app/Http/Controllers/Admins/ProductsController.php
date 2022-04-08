<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Support\Str;
use App\Models\ProductsCategories;
use App\Models\ProductsGallery;
use App\Models\Attributes;
use App\Models\ProductsAttributes;

class ProductsController extends Controller
{
    const _PER_PAGE = 10;
    //
    public function index(Request $request){
        $pageTitle = 'Danh sách sản phẩm';

        $productsLists = Products::orderBy('created_at', 'DESC');

        //Xử lý lọc

        if (!empty($request->category_id)){
            $categoryId = $request->category_id;
            $productsLists = Categories::find($categoryId)->products()->orderBy('products.created_at', 'DESC');
            /*
             * Lấy ra danh sách sản phẩm theo 1 chuyên mục
             * Nếu phương thức kết nối được gọi dưới dạng thuộc tính => Trả về danh sách sản phẩm dưới dạng collection (Sử dụng được bằng cách dùng foreach)
             * Nếu phương thức kết nối được gọi dưới dạng phương thức => Trả về như query builder => Có thể gọi đến phương thức trong query builder
             * */
        }

        $filters = [];
        if (!empty($request->price_from)){
            $filters[] = ['regular_price', '>=', $request->price_from];
        }

        if (!empty($request->price_to)){
            $filters[] = ['regular_price', '<=', $request->price_to];
        }

        if (!empty($request->date_start)){
            $filters[] = ['products.created_at', '>=', $request->date_start.' 00:00:00'];
        }

        if (!empty($request->date_end)){
            $filters[] = ['products.created_at', '<=', $request->date_end.' 23:59:59'];
        }

        if (!empty($filters)){
            $productsLists->where($filters);
        }

        if (!empty($request->keyword)){
            $keywords = $request->keyword;
            $productsLists->where(function($query) use ($keywords){
                $query->where('name', 'like', '%'.$keywords.'%');
                $query->orWhere('content', 'like', '%'.$keywords.'%');
                $query->orWhere('description', 'like', '%'.$keywords.'%');
            });
        }

        $productsLists = $productsLists->paginate(self::_PER_PAGE)->withQueryString();

        $dataCategories = Categories::all();

        return view('admin.products.lists', compact(
            'pageTitle',
            'productsLists',
            'dataCategories'
        ));
    }

    public function add(){
        $pageTitle = 'Thêm mới sản phẩm';

        $dataCategories = Categories::all();

        $attributes = Attributes::all();

        return view('admin.products.add', compact(
            'pageTitle',
            'dataCategories',
            'attributes'
        ));
    }

    public function postAdd(Request $request){

        $rules = [
            'name' => 'required|min:5',
            'thumbnail' => 'required',
            'content' => 'required',
            'category_id' => 'required'
        ];

        $messages = [
            'name.required' => 'Tên sản phẩm bắt buộc phải nhập',
            'name.min' => 'Tên sản phẩm không được nhỏ hơn :min ký tự',
            'thumbnail.required' => 'Ảnh đại diện không được để trống',
            'content.required' => 'Chi tiết sản phẩm không được để trống',
            'category_id.required' => 'Danh mục bắt buộc phải chọn',
          //  'category_id.integer' => 'Danh mục chỉ nhận dạng số',
        ];

        if (!empty($request->regular_price)){
            $rules['regular_price'] = 'integer';

            $messages['regular_price.integer'] = 'Giá phải là số';
        }

        if (!empty($request->sale_price)){
            $rules['sale_price'] = ['integer', function($attribute, $value, $fail) use ($request){
                if ($value>=$request->regular_price){
                    $fail('Giá khuyến mãi phải nhỏ hơn giá bán thường');
                }
            }];
        }

        $request->validate($rules, $messages);

        //Xử lý lấy dữ liệu
        //$categoryId = $request->category_id;


        //$gallery = $request->gallery;

        $product = new Products();
        $product->name = $request->name;

        if (empty($request->slug)){
            $product->slug = Str::slug($request->name);

        }else{
            $product->slug = $request->slug;
        }

        $product->description = $request->description;
        $product->regular_price = $request->regular_price;
        $product->sale_price = $request->sale_price;
        $product->thumbnail = $request->thumbnail;
        $product->content = $request->content;
        $product->is_feature = $request->is_feature;
        $product->is_best_seller = $request->is_best_seller;

        $product->save();

        //Insert vào category
        $productId = $product->id; //id sản phẩm sau khi insert

        $categoryIdArr = $request->category_id;
        $categoryIdArr = array_filter($categoryIdArr);
        if (!empty($categoryIdArr)){
            foreach ($categoryIdArr as $categoryId){

                if (is_numeric($categoryId) && $categoryId>0){
                    $productsCategories = new ProductsCategories();
                    $productsCategories->product_id = $productId;
                    $productsCategories->category_id = $categoryId;
                    $productsCategories->save();
                }
            }
        }

        //Insert gallery

        if (!empty($request->gallery)){
            $galleriesArr = $request->gallery;
            $galleriesArr = array_filter($galleriesArr);
            if (!empty($galleriesArr)){
                foreach ($galleriesArr as $key => $value){
                    $galleryObject = new ProductsGallery([
                        'product_id' => $productId,
                        'image_url' => $value
                    ]);

                    $galleriesArr[$key] = $galleryObject;
                }

                $product->galleries()->saveMany($galleriesArr);
            }
        }

        //Xử lý thuộc tính
        if (!empty($request->attribute)){
            foreach ($request->attribute as $attribute_id => $valuesArr){
                if (!empty($valuesArr)){
                    foreach ($valuesArr as $value){
                        $productsAttributes = new ProductsAttributes();

                        $productsAttributes->attribute_id = $attribute_id;

                        $productsAttributes->value_id = $value;

                        $productsAttributes->product_id = $productId;

                        $productsAttributes->save();
                    }
                }
            }
        }

        return redirect()->route('admin.products.index')->with('msg', 'Thêm sản phẩm thành công');
    }

    public function edit(Products $product){
        $pageTitle = 'Cập nhật sản phẩm';

        $dataCategories = Categories::all();

        $attributes = Attributes::all();

        return view('admin.products.edit', compact(
            'pageTitle',
            'dataCategories',
            'product',
            'attributes'
        ));
    }

    public function postEdit(Products $product, Request $request){
        $rules = [
            'name' => 'required|min:5',
            'thumbnail' => 'required',
            'content' => 'required',
            'category_id' => 'required'
        ];

        $messages = [
            'name.required' => 'Tên sản phẩm bắt buộc phải nhập',
            'name.min' => 'Tên sản phẩm không được nhỏ hơn :min ký tự',
            'thumbnail.required' => 'Ảnh đại diện không được để trống',
            'content.required' => 'Chi tiết sản phẩm không được để trống',
            'category_id.required' => 'Danh mục bắt buộc phải chọn',
            //  'category_id.integer' => 'Danh mục chỉ nhận dạng số',
        ];

        if (!empty($request->regular_price)){
            $rules['regular_price'] = 'integer';

            $messages['regular_price.integer'] = 'Giá phải là số';
        }

        if (!empty($request->sale_price)){
            $rules['sale_price'] = ['integer', function($attribute, $value, $fail) use ($request){
                if ($value>=$request->regular_price){
                    $fail('Giá khuyến mãi phải nhỏ hơn giá bán thường');
                }
            }];
        }

        $request->validate($rules, $messages);

        //Xử lý update

        $product->name = $request->name;

        if (empty($request->slug)){
            $product->slug = Str::slug($request->name);

        }else{
            $product->slug = $request->slug;
        }

        $product->description = $request->description;
        $product->regular_price = $request->regular_price;
        $product->sale_price = $request->sale_price;
        $product->thumbnail = $request->thumbnail;
        $product->content = $request->content;
        $product->is_feature = $request->is_feature;
        $product->is_best_seller = $request->is_best_seller;

        $product->save();

        //Xoá hết dữ liệu trong bảng products_categories
        $productId = $product->id; //id sản phẩm

        ProductsCategories::where('product_id', $productId)->delete();

        //Insert vào category

        $categoryIdArr = $request->category_id;
        $categoryIdArr = array_filter($categoryIdArr);
        if (!empty($categoryIdArr)){
            foreach ($categoryIdArr as $categoryId){

                if (is_numeric($categoryId) && $categoryId>0){
                    $productsCategories = new ProductsCategories();
                    $productsCategories->product_id = $productId;
                    $productsCategories->category_id = $categoryId;
                    $productsCategories->save();
                }
            }
        }

        //Xoá hết dữ liệu trong bảng products_gallery
        ProductsGallery::where('product_id', $productId)->delete();
        //Insert gallery

        if (!empty($request->gallery)){
            $galleriesArr = $request->gallery;
            $galleriesArr = array_filter($galleriesArr);
            if (!empty($galleriesArr)){
                foreach ($galleriesArr as $key => $value){
                    $galleryObject = new ProductsGallery([
                        'product_id' => $productId,
                        'image_url' => $value
                    ]);

                    $galleriesArr[$key] = $galleryObject;
                }

                $product->galleries()->saveMany($galleriesArr);
            }
        }

        //Xoá tất cả thuộc tính
        ProductsAttributes::where('product_id', $productId)->delete();

        //Xử lý thuộc tính
        if (!empty($request->attribute)){
            foreach ($request->attribute as $attribute_id => $valuesArr){
                if (!empty($valuesArr)){
                    foreach ($valuesArr as $value){
                        $productsAttributes = new ProductsAttributes();

                        $productsAttributes->attribute_id = $attribute_id;

                        $productsAttributes->value_id = $value;

                        $productsAttributes->product_id = $productId;

                        $productsAttributes->save();
                    }
                }
            }
        }

        return back()->with('msg', 'Cập nhật sản phẩm thành công');
    }

    public function delete(Products $product){
       //Xoá khoá ngoại
       ProductsGallery::where('product_id', $product->id)->delete();

       ProductsCategories::where('product_id', $product->id)->delete();

       ProductsAttributes::where('product_id', $product->id)->delete();

       //Xoá sản phẩm
       Products::destroy($product->id);

       return redirect()->route('admin.products.index')->with('msg', 'Xoá sản phẩm thành công');
    }
}
