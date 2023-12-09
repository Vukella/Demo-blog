<?php

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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

Route::get('/', function () {return view('index');})->name('home');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('blogs/{blog:slug}', [BlogController::class, 'show']);

//Register
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
//Login
Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');

//Admin section
Route::post('admin/blogs', [AdminBlogController::class, 'store'])->middleware('admin');
Route::get('admin/blogs/create', [AdminBlogController::class, 'create'])->middleware('admin');
Route::get('admin/blogs', [AdminBlogController::class, 'index'])->middleware('admin');
Route::get('admin/blogs/{blog}/edit', [AdminBlogController::class, 'edit'])->middleware('admin');
Route::patch('admin/blogs/{blog}', [AdminBlogController::class, 'update'])->middleware('admin');
Route::delete('admin/blogs/{blog}', [AdminBlogController::class, 'destroy'])->middleware('admin');