<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController;
// use App\Http\Controllers\Admin\CategoryController;

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



Route::group(['prefix' => 'admin'], function () {


    Route::get('/', [MainController::class, 'index'])->name('admin.index');

    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('tags', App\Http\Controllers\Admin\TagController::class);
    Route::resource('posts', App\Http\Controllers\Admin\PostController::class);
});
