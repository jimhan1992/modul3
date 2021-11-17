<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

//admin
Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/', function () {
            return view('admin.dashboard');
        });

        //user
        Route::group(['prefix' => 'users'], function () {
            Route::get('/', [UserController::class, 'index'])->name('users.index');
            Route::get('create', [UserController::class, 'create'])->name('users.create');
            Route::post('create', [UserController::class, 'store'])->name('users.store');
            Route::get('edit/{id}', [UserController::class, 'edit'])->name('users.edit');
            Route::post('edit/{id}', [UserController::class, 'update'])->name('users.update');
            Route::get('delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');

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
    });
});
Route::get('/',[ProductController::class , 'listAll']);
Route::get('/product/detail/{id}',[ProductController::class , 'show'])->name('detail');
