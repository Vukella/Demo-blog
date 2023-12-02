<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;

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

// Frontend Routes
Route::get('/', function () {
    return view('index');
});

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog-details', [BlogController::class, 'show']);

// Admin Panel Routes
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('blogs', 'Admin\BlogController');
    Route::resource('tags', 'Admin\TagController');
    Route::resource('categories', 'Admin\CategoryController');
});

