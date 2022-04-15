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

use App\Http\Controllers\Admins\OptionsController;
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

        Route::get('/', [CategoriesController::class, 'index'])->name('index')->can('categories.view');

        Route::get('/add', [CategoriesController::class, 'add'])->name('add')->can('categories.add');

        Route::post('/add', [CategoriesController::class, 'postAdd'])->can('categories.add');

        Route::get('/edit/{category}', [CategoriesController::class, 'edit'])->name('edit')->can('categories.edit');

        Route::post('/edit/{category}', [CategoriesController::class, 'postEdit'])->can('categories.edit');

        Route::get('/delete/{category}', [CategoriesController::class, 'delete'])->name('delete')->can('categories.delete');

    });

    //Thuộc tính
    Route::prefix('attributes')->name('attributes.')->group(function (){
        Route::get('/', [AttributesController::class, 'index'])->name('index')->can('attributes.view');

        Route::get('add', [AttributesController::class, 'add'])->name('add')->can('attributes.add');

        Route::post('add', [AttributesController::class, 'postAdd'])->can('attributes.add');

        Route::get('edit/{attribute}', [AttributesController::class, 'edit'])->name('edit')->can('attributes.edit');

        Route::post('edit/{attribute}', [AttributesController::class, 'postEdit'])->name('edit')->can('attributes.edit');

        Route::get('delete/{attribute}', [AttributesController::class, 'delete'])->name('delete')->can('attributes.delete');
    });

    //Giá trị thuộc tính
    Route::prefix('attribute/values')->name('attribute.values.')->group(function (){
        Route::get('/{attribute}', [AttributesValuesController::class, 'index'])->name('index')->can('attributes.view');

        Route::post('add/{attribute}', [AttributesValuesController::class, 'postAdd'])->name('add')->can('attributes.add');

        Route::get('edit/{attribute}/{value}', [AttributesValuesController::class, 'edit'])->name('edit')->can('attributes.edit');

        Route::post('edit/{attribute}/{value}', [AttributesValuesController::class, 'postEdit'])->can('attributes.edit');

        Route::get('delete/{attribute}/{value}', [AttributesValuesController::class, 'delete'])->name('delete')->can('attributes.delete');

        Route::post('post-data', [AttributesValuesController::class, 'postData'])->name('post-data')->can('attributes.add');
    });

    //Sản phẩm
    Route::prefix('products')->name('products.')->group(function (){
        Route::get('/', [ProductsController::class, 'index'])->name('index')->can('products.view');

        Route::get('add', [ProductsController::class, 'add'])->name('add')->can('products.add');

        Route::post('add', [ProductsController::class, 'postAdd'])->can('products.add');

        Route::get('edit/{product}', [ProductsController::class, 'edit'])->name('edit')->can('products.edit');

        Route::post('edit/{product}', [ProductsController::class, 'postEdit'])->can('products.edit');

        Route::get('delete/{product}', [ProductsController::class, 'delete'])->name('delete')->can('products.delete');
    });

    Route::get('profile', [UserController::class, 'profile'])->name('profile');

    Route::post('profile', [UserController::class, 'postProfile']);

    //User
    Route::prefix('users')->name('users.')->group(function(){

        Route::get('/', [UserController::class, 'index'])->name('index')->can('users.view');

        Route::get('/add', [UserController::class, 'add'])->name('add')->can('users.add');

        Route::post('/add', [UserController::class, 'postAdd'])->can('users.add');

        Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit')->can('users.edit');

        Route::post('/edit/{user}', [UserController::class, 'postEdit'])->can('users.edit');

        Route::get('/delete/{user}', [UserController::class, 'delete'])->name('delete')->can('users.delete');

    });

    //Groups
    Route::prefix('groups')->name('groups.')->group(function(){

        Route::get('/', [GroupsController::class, 'index'])->name('index')->can('groups.view');

        Route::get('/add', [GroupsController::class, 'add'])->name('add')->can('groups.add');

        Route::post('/add', [GroupsController::class, 'postAdd'])->can('groups.add');

        Route::get('/edit/{group}', [GroupsController::class, 'edit'])->name('edit')->can('groups.edit');

        Route::post('/edit/{group}', [GroupsController::class, 'postEdit'])->can('groups.edit');

        Route::get('/delete/{group}', [GroupsController::class, 'delete'])->name('delete')->can('groups.delete');

        Route::get('/permission/{group}', [GroupsController::class, 'permission'])->name('permission')->can('groups.permission');

        Route::post('/permission/{group}', [GroupsController::class, 'postPermission'])->can('groups.permission');

    });

    //Config
    Route::prefix('options')->name('options.')->group(function(){

        Route::get('/', [OptionsController::class, 'index'])->name('index')->can('options.general');

        Route::post('/', [OptionsController::class, 'postIndex'])->can('options.general');

        Route::get('/header', [OptionsController::class, 'add'])->name('header')->can('options.header');

        Route::get('/footer', [OptionsController::class, 'footer'])->name('footer')->can('options.footer');

        Route::get('/home', [OptionsController::class, 'home'])->name('home')->can('options.home');

        Route::get('/menu', [OptionsController::class, 'menu'])->name('menu')->can('options.menu');

        Route::post('/menu', [OptionsController::class, 'postMenu'])->can('options.menu');

    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('test', function (){
    echo Str::slug('Cuộc chiến thanh toán khí đốt của Nga và EU');
});