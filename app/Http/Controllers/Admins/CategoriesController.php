<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    //
    const _PER_PAGE = 10;

    public function index(Request $request){

        $pageTitle = 'Danh sách danh mục';

        //xử lý lọc
        $keyword = null;

        // DB::enableQueryLog();

        $categoriesLists = Categories::where('parent_id', 0)->with('childrenCategories')->orderBy('created_at', 'DESC');

        if (!empty($request->keyword)){
            $keyword = trim($request->keyword);

            $categoriesLists->where(function($query) use ($keyword){
                $query->where('name', 'like', '%'.$keyword.'%');
                $query->orWhere('description', 'like', '%'.$keyword.'%');
            });

        }

        $categoriesLists = $categoriesLists->paginate(self::_PER_PAGE)->withQueryString();

        // dd(DB::getQueryLog());


        return view('admin/categories/lists', compact(
            'pageTitle',
            'categoriesLists'
        ));
    }

    public function add(){
        $pageTitle = 'Thêm danh mục';

        $dataCategories = Categories::all();

        return view('admin/categories/add', compact(
            'pageTitle',
            'dataCategories'
        ));
    }

    public function postAdd(Request $request){

        //Validate
        $rules = [
            'name' => 'required|min:5',
            'banner_url' => 'required'
        ];

        $messages = [
            'name.required' => 'Họ tên bắt buộc phải nhập',
            'name.min' => 'Họ tên không được nhỏ hơn :min ký tự',
            'banner_url.required' => 'Banner không được để trống'
        ];

        $request->validate($rules, $messages);

        //Thêm mới dữ liệu
        $category = new Categories();
        $category->name = $request->name;

        if (empty($request->slug)){
            $category->slug = Str::slug($request->name);

        }else{
            $category->slug = $request->slug;
        }

        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        $category->banner_url = $request->banner_url;
        $category->save();

        return redirect()->route('admin.categories.index')->with('msg', 'Thêm danh mục thành công');
    }

    public function edit(Categories $category){

        $pageTitle = 'Cập nhật danh mục';

        $dataCategories = Categories::all();

        return view('admin/categories/edit', compact(
            'pageTitle',
            'category',
            'dataCategories'
        ));
    }

    public function postEdit(Categories $category, Request $request){

        $rules = [
            'name' => 'required|min:5',
            'banner_url' => 'required'
        ];

        $messages = [
            'name.required' => 'Họ tên bắt buộc phải nhập',
            'name.min' => 'Họ tên không được nhỏ hơn :min ký tự',
            'banner_url.required' => 'Banner không được để trống'
        ];


        $request->validate($rules, $messages);

        //Cập nhật dữ liệu

        $category->name = $request->name;

        if (empty($request->slug)){
            $category->slug = Str::slug($request->name);

        }else{
            $category->slug = $request->slug;
        }

        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        $category->banner_url = $request->banner_url;
        $category->save();

        return back()->with('msg', 'Cập nhật danh mục thành công');
    }

    public function delete(Categories $category){

        Categories::destroy($category->id);

        return redirect()->route('admin.categories.index')->with('msg', 'Xoá danh mục thành công');
    }
}
