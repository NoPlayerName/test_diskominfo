<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;

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
    return view('home.index', [
        'tittle' => "Home Page"
    ]);
});



Route::get('/post', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'posts']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/category', function () {
    return view('category.index', [
        'tittle' => "Halaman Category"
    ]);
});

Route::get('/login', function () {
    return view('login.index');
});
