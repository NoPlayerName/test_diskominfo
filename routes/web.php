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

Route::get('/category', function () {
    return view('category.index', [
        'tittle' => "Halaman Category"
    ]);
});
