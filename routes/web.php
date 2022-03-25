<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('home/main');
});

Route::get('/san-pham', function () {
    return view('products/lists');
});

Route::get('/tin-tuc', function () {
    return view('news/lists');
});

//Route::get('/test', function(){
//    $faker = Faker\Factory::create();
//    dd($faker->randomDigit);
//});