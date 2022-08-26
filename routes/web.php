<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
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

Route::get('/categories', function () {
    return view('category.index', [
        'tittle' => "category",
        'category' => Category::all()


    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category.categories', [
        'tittle' => $category->name,
        'post' => $category->post,
        'category' => $category->name

    ]);
});

Route::get('/login', function () {
    return view('login.index');
});

Route::get('/author/{user}', function (User $user) {
    return view('post.index', [
        'tittle' => "Author",
        'post' => $user->post
    ]);
});
