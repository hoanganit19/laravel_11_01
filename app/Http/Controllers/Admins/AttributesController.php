<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attributes;
use App\Models\AttributesValues;
use App\Models\ProductsAttributes;

class AttributesController extends Controller
{
    const _PER_PAGE = 10;

    public function index(Request $request){

        $pageTitle = 'Danh sách thuộc tính';

        $attributeLists = Attributes::orderBy('created_at', 'desc');

        $keyword = null;

        if (!empty($request->keyword)){
            $keyword = trim($request->keyword);

            $attributeLists->where('name', 'like', '%'.$keyword.'%');

        }

        $attributeLists = $attributeLists->paginate(self::_PER_PAGE)->withQueryString();


        return view('admin.attributes.lists', compact(
            'pageTitle',
            'attributeLists'
        ));
    }

    public function add(){
        $pageTitle = 'Thêm thuộc tính';

        return view('admin/attributes/add', compact(
            'pageTitle'
        ));
    }

    public function postAdd(Request $request){

        //Validate
        $rules = [
            'name' => 'required'
        ];

        $messages = [
            'name.required' => 'Họ tên bắt buộc phải nhập'
        ];


        $request->validate($rules, $messages);

        //Thêm mới dữ liệu
        $user = new Attributes();
        $user->name = $request->name;
        $user->save();

        return redirect()->route('admin.attributes.index')->with('msg', 'Thêm thuộc tính thành công');
    }

    public function edit(Attributes $attribute){

        $pageTitle = 'Cập nhật thuộc tính';

        return view('admin/attributes/edit', compact(
            'pageTitle',
            'attribute'
        ));

    }

    public function postEdit(Attributes $attribute, Request $request){
        //Validate
        $rules = [
            'name' => 'required'
        ];

        $messages = [
            'name.required' => 'Họ tên bắt buộc phải nhập'
        ];

        $request->validate($rules, $messages);

        //Update dữ liệu
        $attribute->name = $request->name;

        $attribute->save();

        return back()->with('msg', 'Cập nhật thuộc tính thành công');
    }

    public function delete(Attributes $attribute){

        //Xoá liên kết giữa product và value
        ProductsAttributes::where('attribute_id', $attribute->id)->delete();

        //xoá tất cả giá trị
        AttributesValues::where('attribute_id', $attribute->id)->delete();

        //Xoá thuộc tính
        Attributes::destroy($attribute->id);

        return redirect()->route('admin.attributes.index')->with('msg', 'Xoá thuộc tính thành công');
    }
}
