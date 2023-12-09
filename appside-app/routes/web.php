<?php

use App\Http\Controllers\BlogController;
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
Route::get('blogss/{blog:slug}', [BlogController::class, 'show']);

Route::get('/blog-details', function () {
    return view('blog-details');
});