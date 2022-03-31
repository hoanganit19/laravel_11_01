<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Models\Groups;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserController extends Controller
{
    const _PER_PAGE = 10;

    //
    public function profile(){
        $pageTitle = 'Thông tin cá nhân';

        $user = Auth::user();

        return view('admin/users/profile', compact('pageTitle', 'user'));
    }

    public function postProfile(Request $request){

        $user = Auth::user();

        //Validate
        $rules = [
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users,email,'.$user->id
        ];

        $messages = [
            'name.required' => 'Họ tên bắt buộc phải nhập',
            'name.min' => 'Họ tên không được nhỏ hơn :min ký tự',
            'email.required' => 'Email bắt buộc phải nhập',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email này bị trùng, vui lòng nhập email khác'
        ];

        //Xử lý validate password
        if (!empty($request->password)){
            $rules['password'] = 'min:8';
            $rules['confirm_password'] = 'required|min:8|same:password';

            $messages['password.min'] = 'Mật khẩu phải từ :min kí tự trở lên';
            $messages['confirm_password.required'] = 'Xác nhận mật khẩu bắt buộc phải nhập';
            $messages['confirm_password.min'] = 'Xác nhận mật khẩu phải từ :min ký tự';
            $messages['confirm_password.same'] = 'Xác nhận mật khẩu phải giống mật khẩu';

        }

        $request->validate($rules, $messages);

        //Xử lý update
        $user->name = $request->name;
        $user->email = $request->email;

        if (!empty($request->password)){
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return back()->with('msg', 'Cập nhật thông tin thành công');
    }

    public function index(Request $request){

        $pageTitle = 'Danh sách người dùng';

        //xử lý lọc

        $filters = [];
        $keyword = null;

        if (!empty($request->status) && $request->status!=='all'){

            if ($request->status=='active'){
                $status = 1;
            }else{
                $status = 0;
            }

            $filters[] = ['status', '=', $status];
        }

        if (!empty($request->group_id)){

            $filters[] = ['group_id', '=', $request->group_id];
        }

        if (!empty($request->start_date)){
            $filters[] = ['created_at', '>=', $request->start_date.' 00:00:00'];
        }

        if (!empty($request->end_date)){
            $filters[] = ['created_at', '<=', $request->end_date.' 23:59:59'];
        }

       // DB::enableQueryLog();

        $userLists = User::orderBy('created_at', 'DESC');

        $userLists->where($filters);

        if (!empty($request->keyword)){
            $keyword = trim($request->keyword);

            $userLists->where(function($query) use ($keyword){
                $query->where('name', 'like', '%'.$keyword.'%');
                $query->orWhere('email', 'like', '%'.$keyword.'%');
            });

        }

        $userLists = $userLists->paginate(self::_PER_PAGE)->withQueryString();

       // dd(DB::getQueryLog());

        $groupLists = Groups::all();

        return view('admin/users/lists', compact(
            'pageTitle',
            'userLists',
            'groupLists'
        ));
    }

    public function add(){
        $pageTitle = 'Thêm người dùng';

        $groupLists = Groups::all();

        return view('admin/users/add', compact(
            'pageTitle',
            'groupLists'
        ));
    }

    public function postAdd(Request $request){

        //Validate
        $rules = [
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users,email',
            'group_id' => 'required|integer',
            'password' => 'required|min:8',
            'confirm_password' => 'required|min:8|same:password'
        ];

        $messages = [
            'name.required' => 'Họ tên bắt buộc phải nhập',
            'name.min' => 'Họ tên không được nhỏ hơn :min ký tự',
            'email.required' => 'Email bắt buộc phải nhập',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email này bị trùng, vui lòng nhập email khác',
            'group_id.required' => 'Vui lòng chọn nhóm',
            'group_id.integer' => 'Nhóm không hợp lệ',
            'password.required' => 'Mật khẩu bắt buộc phải nhập',
            'password.min' => 'Mật khẩu phải từ :min kí tự trở lên',
            'confirm_password.required' => 'Xác nhận mật khẩu bắt buộc phải nhập',
            'confirm_password.min' => 'Xác nhận mật khẩu phải từ :min ký tự',
            'confirm_password.same' => 'Xác nhận mật khẩu phải giống mật khẩu'
        ];


        $request->validate($rules, $messages);

        //Thêm mới dữ liệu
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->group_id = $request->group_id;
        $user->status = $request->status;
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('msg', 'Thêm người dùng thành công');
    }

    public function edit($id){
        $pageTitle = 'Cập nhật người dùng';

        $groupLists = Groups::all();

        return view('admin/users/add', compact(
            'pageTitle',
            'groupLists'
        ));
    }

    public function postEdit(){

    }

    public function delete($id){

    }
}
