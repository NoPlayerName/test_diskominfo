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
use App\Http\Controllers\SampleController;
use App\Http\Middleware\Authenticate;

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

// Route Auth 
Route::get('/', [LoginController::class, 'index'])->middleware('guest');


Route::post('/login', [LoginController::class, 'login'])->middleware('guest');

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// Rout main 
// Route::get('/post', [PostController::class, 'index']);
// Route::get('/posts/{post:slug}', [PostController::class, 'posts']);
// Route::get('/about', [AboutController::class, 'index']);
// Route::get('/categories', [CategoryController::class, 'index']);

// Rout dashboard 
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/new_sample', [DashboardController::class, 'new_sample'])->middleware('auth');

// Route sample
Route::get('/dashboard/add_sample', [DashboardController::class, 'data_sample' ])->middleware('auth');
Route::post('/add_sample', [SampleController::class, 'store'])->middleware('auth');

    




// Route::get('/categories/{category:slug}', [CategoryController::class, 'category']);

// Route::get('/author/{author:username}', function (User $author) {
//     return view('post.index', [
//         'tittle' => "Post By Author : $author->name",
//         'post' => $author->post->load('category', 'author')
//     ]);
// });
