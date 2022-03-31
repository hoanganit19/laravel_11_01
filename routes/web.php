<?php

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\HomeController;

use App\Http\Controllers\Clients\HomeController;

use App\Http\Controllers\Admins\DashboardController;

use App\Http\Controllers\Admins\ProductsController;

use App\Http\Controllers\Admins\UserController;
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

    Route::prefix('products')->name('products.')->group(function (){
        Route::get('/', [ProductsController::class, 'index'])->name('index');

        Route::get('add', [ProductsController::class, 'add'])->name('add');

        Route::get('edit/{id}', [ProductsController::class, 'edit'])->name('edit');

        Route::get('delete/{id}', [ProductsController::class, 'delete'])->name('delete');
    });

    Route::get('profile', [UserController::class, 'profile'])->name('profile');

    Route::post('profile', [UserController::class, 'postProfile']);

    Route::prefix('users')->name('users.')->group(function(){

        Route::get('/', [UserController::class, 'index'])->name('index');

        Route::get('/add', [UserController::class, 'add'])->name('add');

        Route::post('/add', [UserController::class, 'postAdd']);

        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');

        Route::post('/edit/{id}', [UserController::class, 'postEdit']);

        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete');

    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
