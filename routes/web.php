<?php

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\HomeController;

use App\Http\Controllers\Clients\HomeController;

use App\Http\Controllers\Admins\DashboardController;

use App\Http\Controllers\Admins\ProductsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function (){
//    echo 'Trang chủ Unicode';
//});

//Route::post('/', function (){
//    echo 'Trang chủ Unicode';
//});

//Route::get('', [HomeController::class, 'index']);
//
//Route::get('dang-nhap', [HomeController::class, 'login'])->name('login');
//
//Route::post('login', [HomeController::class, 'postLogin']);
//
//Route::get('chuyen-muc/{slug}/{id}.html', [HomeController::class, 'category'])->where([
//    'slug' => '.+',
//    'id' => '\d+'
//])->name('category');
    //->where('slug', '.+')->where('id', '\d+');

//Clients
Route::get('/', [HomeController::class, 'index']);


//Admin
Route::prefix('admin')->middleware('admin.auth')->name('admin.')->group(function (){
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    //admin/products/add
    //admin/products/edit/1
    //admin/products/delete/1

    Route::prefix('products')->name('products.')->group(function (){
        Route::get('/', [ProductsController::class, 'index'])->name('index');

        Route::get('add', [ProductsController::class, 'add'])->name('add');

        Route::get('edit/{id}', [ProductsController::class, 'edit'])->name('edit');

        Route::get('delete/{id}', [ProductsController::class, 'delete'])->name('delete');
    });
});