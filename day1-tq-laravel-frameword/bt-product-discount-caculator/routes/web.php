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
    return view('caculator');
});

Route::post("/display-discount", function (\Illuminate\Http\Request $request) {
    $description = $request->description;
    $price = $request->price;
    $percent = $request->percent;
    $discountPrice = ($price * $percent )/ 100;
    $discountAmount = $price - $discountPrice;
    return view("display-discount", compact(['discountPrice','discountAmount','description','price','percent']));
});
