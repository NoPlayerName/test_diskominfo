<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

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

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/categories/{category:slug}', [CategoryController::class, 'category']);

Route::get('/login', function () {
    return view('login.index');
});

Route::get('/author/{author:username}', function (User $author) {
    return view('post.index', [
        'tittle' => "Post By Author : $author->name",
        'post' => $author->post->load('category', 'author')
    ]);
});
