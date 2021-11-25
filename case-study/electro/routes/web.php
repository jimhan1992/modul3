<?php

use App\Http\Controllers\aCartController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::post('register', [UserController::class, 'register'])->name('register.store');

//forgot_password
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


//google login
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

//Auth
Route::middleware('auth')->group(function () {
    //Order
    Route::get('/checkout',[HomeController::class , 'checkout'])->name('checkout');
    Route::post('/checkout',[OrderController::class , 'create'])->name('order');
    Route::get('view-cart', [HomeController::class, 'viewcart'])->name('view-cart');
    Route::post('view-cart', [HomeController::class, 'update'])->name('update.cart');
    Route::get('add-to-cart/{id}', [HomeController::class, 'addToCart'])->name('add.to.cart');
    Route::get('remove-from-cart/{id}', [HomeController::class, 'remove'])->name('remove.from.cart');
    Route::get('profile/{id}', [HomeController::class, 'profile'])->name('profile');
    Route::post('profile/{id}', [HomeController::class, 'updateProfile'])->name('update_profile');

Route::group(['prefix' => 'admin'], function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/', [OrderController::class,'count'])->name('dashboard');

        //user
        Route::group(['prefix' => 'users'], function () {
            Route::get('/', [UserController::class, 'index'])->name('users.index');
            Route::get('create', [UserController::class, 'create'])->name('users.create');
            Route::post('create', [UserController::class, 'store'])->name('users.store');
            Route::get('edit/{id}', [UserController::class, 'edit'])->name('users.edit');
            Route::post('edit/{id}', [UserController::class, 'update'])->name('users.update');
            Route::get('delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');
            Route::get('profile/{id}', [UserController::class, 'show'])->name('users.profile');

        });
        //product
        Route::group(['prefix' => 'products'], function () {
            Route::get('/', [ProductController::class, 'index'])->name('products.index');
            Route::get('create', [ProductController::class, 'create'])->name('products.create');
            Route::post('create', [ProductController::class, 'store'])->name('products.store');
            Route::get('edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
            Route::post('edit/{id}', [ProductController::class, 'update'])->name('products.update');
            Route::get('delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

        });
        //category
        Route::group(['prefix' => 'category'], function () {
            Route::get('/', [CategoryController::class, 'index'])->name('category.index');
            Route::get('create', [CategoryController::class, 'create'])->name('category.create');
            Route::post('create', [CategoryController::class, 'store'])->name('category.store');
            Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
            Route::post('edit/{id}', [CategoryController::class, 'update'])->name('category.update');
            Route::get('delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

        });
        //Order
        Route::group(['prefix'=>'orders'],function (){
            Route::get('/',[OrderController::class , 'index'])->name('orders.index');
            Route::get('{id}/detail',[OrderController::class , 'show'])->name('orders.detail');

        });
    });
});

Route::get('/product/detail/{id}',[ProductController::class , 'show'])->name('detail');



///cart
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('cart', [HomeController::class, 'cart'])->name('cart');



//search
Route::get('/q',[HomeController::class ,'search'])->name('search.category');
Route::get('category/hot-deals',[HomeController::class ,'searchCategory'])->name('hot-deals');
Route::get('category/laptops',[HomeController::class ,'searchCategory'])->name('laptops');
Route::get('category/smartphones',[HomeController::class ,'searchCategory'])->name('smartphones');
Route::get('category/cameras',[HomeController::class ,'searchCategory'])->name('cameras');
Route::get('category/accessories',[HomeController::class ,'searchCategory'])->name('accessories');



