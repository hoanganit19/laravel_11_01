<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AttributesValues;
use App\Models\Attributes;

class AttributesValuesController extends Controller
{
    const _PER_PAGE = 10;

    public function index(Attributes $attribute, Request $request){

        $pageTitle = 'Giá trị thuộc tính: '.$attribute->name;

        $attributeLists = AttributesValues::orderBy('created_at', 'desc')->where('attribute_id', $attribute->id);

        $keyword = null;

        if (!empty($request->keyword)){
            $keyword = trim($request->keyword);

            $attributeLists->where('value', 'like', '%'.$keyword.'%');

        }

        $attributeLists = $attributeLists->paginate(self::_PER_PAGE)->withQueryString();


        return view('admin.attributes_values.lists', compact(
            'pageTitle',
            'attributeLists',
            'attribute'
        ));
    }


    public function postAdd(Attributes $attribute, Request $request){

        //Validate
        $rules = [
            'value' => 'required'
        ];

        $messages = [
            'value.required' => 'Giá trị bắt buộc phải nhập'
        ];


        $request->validate($rules, $messages);

        //Thêm mới dữ liệu
        $value = new AttributesValues();
        $value->value = $request->value;
        $value->attribute_id = $attribute->id;
        $value->save();

        return redirect()->route('admin.attribute.values.index', $attribute)->with('msg', 'Thêm giá trị thành công');
    }

    //Xử lý ajax
    public function postData(Request $request){

        if (!empty($request->value) && !empty($request->attribute_id)){
            $value = new AttributesValues();
            $value->value = $request->value;
            $value->attribute_id = $request->attribute_id;
            $value->save();

            return response()->json(
                [
                    'status'=>'ok',
                    'data' => $value
                ]);

        }

        return response()->json(['status'=>'error']);

    }

    public function edit(Attributes $attribute, AttributesValues $value, Request $request){

        $pageTitle = 'Cập nhật giá trị thuộc tính';

        $attributeLists = AttributesValues::orderBy('created_at', 'desc')->where('attribute_id', $attribute->id);

        $keyword = null;

        if (!empty($request->keyword)){
            $keyword = trim($request->keyword);

            $attributeLists->where('value', 'like', '%'.$keyword.'%');

        }

        $attributeLists = $attributeLists->paginate(self::_PER_PAGE)->withQueryString();

        return view('admin/attributes_values/edit', compact(
            'pageTitle',
            'value',
            'attributeLists',
            'attribute'
        ));


    }

    public function postEdit(Attributes $attribute, AttributesValues $value, Request $request){
        //Validate
        $rules = [
            'value' => 'required'
        ];

        $messages = [
            'value.required' => 'Giá trị bắt buộc phải nhập'
        ];


        $request->validate($rules, $messages);

        //Thêm mới dữ liệu
        $value->value = $request->value;
        $value->save();

        return back()->with('msg', 'Cập nhật giá trị thành công');
    }

    public function delete(Attributes $attribute, AttributesValues $value){
        AttributesValues::destroy($value->id);

        return redirect()->route('admin.attribute.values.index', $attribute)->with('msg', 'Xoá giá trị thành công');
    }
}
