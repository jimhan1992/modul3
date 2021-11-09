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
    return view('translate');
});
Route::post('/', function (\Illuminate\Http\Request $request) {
    $arr1 = ['hello', 'blue', 'green', 'white', 'black'];
    $arr2 = ['xin chao', 'xanh nuoc', 'xanh la', 'trang', 'den'];
    $key1 = strtolower($request->key);
    foreach ($arr1 as $key => $value) {
        if ($key1 == $value) {
            $a = $arr2[$key];
            return view('translate', compact(['a']));
        }
    }
    $a = "ko co";
    return view('translate', compact(['a']));

});


