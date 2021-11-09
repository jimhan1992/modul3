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
    return view('welcome');
});
Route::get('/greeting', function () {
    echo "Hello";
});
Route::get('/greeting/{name?}', function ($name = null) {
    if ($name) {
        echo "hello " . $name;
    } else {
        echo "hello word!";
    }
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == "admin" && $request->password == "admin") {
        return view('welcome_admin');
    } else {
        return view('login_error');
    }
});
