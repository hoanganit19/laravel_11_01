<?php

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\HomeController;

use App\Http\Controllers\Clients\HomeController;

use App\Http\Controllers\Admins\DashboardController;

use App\Http\Controllers\Admins\ProductsController;

use App\Http\Controllers\Admins\UserController;

use App\Http\Controllers\Admins\GroupsController;

use App\Http\Controllers\Admins\CategoriesController;

use Illuminate\Support\Str;

use App\Http\Controllers\Admins\AttributesController;

use App\Http\Controllers\Admins\AttributesValuesController;
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
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function (){

    Route::get('/', [DashboardController::class, 'index'])->name('index');

    //admin/products/add
    //admin/products/edit/1
    //admin/products/delete/1

    //Danh mục sản phẩm

    Route::prefix('categories')->name('categories.')->group(function(){

        Route::get('/', [CategoriesController::class, 'index'])->name('index');

        Route::get('/add', [CategoriesController::class, 'add'])->name('add');

        Route::post('/add', [CategoriesController::class, 'postAdd']);

        Route::get('/edit/{category}', [CategoriesController::class, 'edit'])->name('edit');

        Route::post('/edit/{category}', [CategoriesController::class, 'postEdit']);

        Route::get('/delete/{category}', [CategoriesController::class, 'delete'])->name('delete');

    });

    //Thuộc tính
    Route::prefix('attributes')->name('attributes.')->group(function (){
        Route::get('/', [AttributesController::class, 'index'])->name('index');

        Route::get('add', [AttributesController::class, 'add'])->name('add');

        Route::post('add', [AttributesController::class, 'postAdd']);

        Route::get('edit/{attribute}', [AttributesController::class, 'edit'])->name('edit');

        Route::post('edit/{attribute}', [AttributesController::class, 'postEdit'])->name('edit');

        Route::get('delete/{attribute}', [AttributesController::class, 'delete'])->name('delete');
    });

    //Giá trị thuộc tính
    Route::prefix('attribute/values')->name('attribute.values.')->group(function (){
        Route::get('/{attribute}', [AttributesValuesController::class, 'index'])->name('index');

        Route::post('add/{attribute}', [AttributesValuesController::class, 'postAdd'])->name('add');

        Route::get('edit/{attribute}/{value}', [AttributesValuesController::class, 'edit'])->name('edit');

        Route::post('edit/{attribute}/{value}', [AttributesValuesController::class, 'postEdit']);

        Route::get('delete/{attribute}/{value}', [AttributesValuesController::class, 'delete'])->name('delete');

        Route::post('post-data', [AttributesValuesController::class, 'postData'])->name('post-data');
    });

    //Sản phẩm
    Route::prefix('products')->name('products.')->group(function (){
        Route::get('/', [ProductsController::class, 'index'])->name('index');

        Route::get('add', [ProductsController::class, 'add'])->name('add');

        Route::post('add', [ProductsController::class, 'postAdd']);

        Route::get('edit/{product}', [ProductsController::class, 'edit'])->name('edit');

        Route::post('edit/{product}', [ProductsController::class, 'postEdit'])->name('edit');

        Route::get('delete/{product}', [ProductsController::class, 'delete'])->name('delete');
    });

    Route::get('profile', [UserController::class, 'profile'])->name('profile');

    Route::post('profile', [UserController::class, 'postProfile']);

    //User
    Route::prefix('users')->name('users.')->group(function(){

        Route::get('/', [UserController::class, 'index'])->name('index');

        Route::get('/add', [UserController::class, 'add'])->name('add');

        Route::post('/add', [UserController::class, 'postAdd']);

        Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');

        Route::post('/edit/{user}', [UserController::class, 'postEdit']);

        Route::get('/delete/{user}', [UserController::class, 'delete'])->name('delete');

    });

    //Groups
    Route::prefix('groups')->name('groups.')->group(function(){

        Route::get('/', [GroupsController::class, 'index'])->name('index');

        Route::get('/add', [GroupsController::class, 'add'])->name('add');

        Route::post('/add', [GroupsController::class, 'postAdd']);

        Route::get('/edit/{group}', [GroupsController::class, 'edit'])->name('edit');

        Route::post('/edit/{group}', [GroupsController::class, 'postEdit']);

        Route::get('/delete/{group}', [GroupsController::class, 'delete'])->name('delete');

        Route::get('/permission/{group}', [GroupsController::class, 'permission'])->name('permission');

        Route::post('/permission/{group}', [GroupsController::class, 'postPermission']);

    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('test', function (){
    echo Str::slug('Cuộc chiến thanh toán khí đốt của Nga và EU');
});