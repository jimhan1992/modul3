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

//Route::get('/', function () {
//    echo "<h2>This is Home page</h2>";
//});

Route::get('/about', function () {
    echo "<h2>This is About page</h2>";
});

Route::get('/contact', function () {
    echo "<h2>This is Contact page</h2>";
});
Route::get('/user', function () {
    return view('user', ['name' => 'Tran Han']);
});
//truyen tham so
route::get('/user/{name}', function ($name) {
    echo "Hello user name is $name";
});
//tham so khong bat buoc
Route::get('/user-name/{name?}', function ($name = "tran_han") {
    echo "xin chao $name";
});
Route::get("/", 'App\Http\Controllers\HomeController@index');

