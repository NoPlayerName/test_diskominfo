<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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


// Rout main 
Route::get('/post', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'posts']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);

// Rout dashboard 

Route::get('/dashboard', [DashboardController::class, 'index']);

// Route Auth 
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/categories/{category:slug}', [CategoryController::class, 'category']);

// Route::get('/author/{author:username}', function (User $author) {
//     return view('post.index', [
//         'tittle' => "Post By Author : $author->name",
//         'post' => $author->post->load('category', 'author')
//     ]);
// });
