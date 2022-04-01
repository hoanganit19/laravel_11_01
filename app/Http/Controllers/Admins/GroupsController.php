<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Groups;

class GroupsController extends Controller
{
    //
    const _PER_PAGE = 10;

    public function index(Request $request){
        $pageTitle = 'Danh sách nhóm';

        $groupLists = Groups::orderBy('created_at', 'desc');

        $keyword = null;

        if (!empty($request->keyword)){
            $keyword = trim($request->keyword);

            $groupLists->where('name', 'like', '%'.$keyword.'%');

        }

        $groupLists = $groupLists->paginate(self::_PER_PAGE)->withQueryString();

        return view('admin/groups/lists', compact(
            'pageTitle',
            'groupLists'
        ));
    }

    public function add(){
        $pageTitle = 'Thêm nhóm người dùng';

        return view('admin/groups/add', compact(
            'pageTitle'
        ));
    }

    public function postAdd(Request $request){
        //Validate
        $rules = [
            'name' => 'required|min:5'
        ];

        $messages = [
            'name.required' => 'Họ tên bắt buộc phải nhập',
            'name.min' => 'Họ tên không được nhỏ hơn :min ký tự'
        ];


        $request->validate($rules, $messages);

        //Thêm mới dữ liệu
        $user = new Groups();
        $user->name = $request->name;
        $user->save();

        return redirect()->route('admin.groups.index')->with('msg', 'Thêm nhóm người dùng thành công');
    }

    public function edit(Groups $group){

        $pageTitle = 'Cập nhật nhóm người dùng';

        return view('admin/groups/edit', compact(
            'pageTitle',
            'group'
        ));
    }

    public function postEdit(Groups $group, Request $request){
        //Validate
        $rules = [
            'name' => 'required|min:5'
        ];

        $messages = [
            'name.required' => 'Họ tên bắt buộc phải nhập',
            'name.min' => 'Họ tên không được nhỏ hơn :min ký tự',
        ];

        $request->validate($rules, $messages);

        //Update dữ liệu
        $group->name = $request->name;

        $group->save();

        return back()->with('msg', 'Cập nhật nhóm người dùng thành công');
    }

    public function delete(Groups $group){

        $users = $group->users;
        if ($users->count()>0) {
            return redirect()->route('admin.groups.index')->with('msg', 'Trong nhóm này đang có '.$users->count().' người dùng');
        }else{
            Groups::destroy($group->id);
            return redirect()->route('admin.groups.index')->with('msg', 'Xoá nhóm người dùng thành công');
        }

    }

    public function permission(Groups $group){
        $pageTitle = 'Phân quyền: '.$group->name;

        return view('admin/groups/permission', compact(
            'pageTitle'
        ));
    }

    public function postPermission(Groups $groups){

    }
}
