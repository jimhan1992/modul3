<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TaskController;
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

Route::get('/', [CustomerController::class, 'index'])->name('customers.index');

Route::group(['prefix' => 'customers'], function () {
    Route::get('/', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('/create', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::post('/{id}/edit', [CustomerController::class, 'update'])->name('customers.update');
    Route::get('/{id}/destroy', [CustomerController::class, 'destroy'])->name('customers.destroy');
    Route::get('/filter', [CustomerController::class, 'filterByCity'])->name('customers.filterByCity');
    Route::get('/search', [CustomerController::class, 'search'])->name('customers.search');
});

//Route::get('tasks', [CustomerController::class, 'index'])->name('tasks.index');

Route::group(['prefix' => 'tasks'], function () {
    Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('/create', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::post('/{id}/edit', [TaskController::class, 'update'])->name('tasks.update');
    Route::get('/{id}/destroy', [TaskController::class, 'destroy'])->name('tasks.destroy');
});
Route::group(['prefix' => 'cities'], function () {
    Route::get('/', [CityController::class, 'index'])->name('cities.index');
    Route::get('/create', [CityController::class, 'create'])->name('cities.create');
    Route::post('/create', [CityController::class, 'store'])->name('cities.store');
    Route::get('/{id}/edit', [CityController::class, 'edit'])->name('cities.edit');
    Route::post('/{id}/edit', [CityController::class, 'update'])->name('cities.update');
    Route::get('/{id}/destroy', [CityController::class, 'destroy'])->name('cities.destroy');
});
