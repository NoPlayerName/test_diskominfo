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
    return view('home.index', [
        'tittle' => "Home Page"
    ]);
});

Route::get('/post', function () {
    return view('post.index', [
        'tittle' => "Halaman Post"
    ]);
});

Route::get('/about', function () {
    return view('home.about', [
        'tittle' => "About",
        'name' => "Muhammad Ruhiyat",
        'email' => "muhammadruhiyat020998@gmail.com",
        'img' => "/img/photo_2022-08-01_13-12-07.jpg"
    ]);
});

Route::get('/category', function () {
    return view('category.index', [
        'tittle' => "Halaman Category"
    ]);
});

Route::get('/login', function () {
    return view('login.index');
});
