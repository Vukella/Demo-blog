<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('blogs', 'Admin\BlogController');
    Route::resource('tags', 'Admin\TagController');
    Route::resource('categories', 'Admin\CategoryController');
});

