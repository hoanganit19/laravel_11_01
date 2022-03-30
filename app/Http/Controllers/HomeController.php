<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $data = [];
    //
    public function index(){
        //return '<h1>Trang chủ Unicode</h1>';

        $title = 'Unicode Academy';

        //$this->data['title'] = $title;

        $userLists = [
            'item 1',
            'item 2',
            'item 3'
        ];

        $content = '<p>Nội dung khoá học</p>';

        $subTitle = 'Laravel Dev';

        $pageTitle = 'Trang chủ';

        return view('home.main', compact(
            'title',
            'userLists',
            'content',
            'subTitle',
            'pageTitle'
        ));
    }

    public function login(){
        //return '<h1>Form Login</h1>';

        $pageTitle = 'Đăng nhập hệ thống';

        return view('home.login', compact(
            'pageTitle'
        ));
    }

    public function postLogin(Request $request){
        //echo 'submit form';
//        $username = $request->username;
//        $password = $request->password;

        $username = $request->input('username');
        $password = $request->input('password');

        echo 'Username: '.$username.'<br/>';
        echo 'Password: '.$password.'<br/>';
    }

    public function category($slug, $id){
        echo 'Slug: '.$slug.'<br/>';
        echo 'Id: '.$id.'<br/>';
    }
}









