<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index(){
        $pageTitle = 'Danh sách sản phẩm';

        return view('admin.products.lists', compact(
            'pageTitle'
        ));
    }

    public function add(){
        $pageTitle = 'Thêm mới sản phẩm';

        return view('admin.products.add', compact(
            'pageTitle'
        ));
    }

    public function edit($id){
        return '<h1>Sửa sản phẩm</h1>';
    }

    public function delete($id){
        return '<h1>Xoá sản phẩm</h1>';
    }
}
