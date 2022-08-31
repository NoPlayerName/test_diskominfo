<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {

        $tittle = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $tittle = " in " . $category->name;
        }
        if (request('author')) {
            $author =  User::firstWhere('username', request('author'));
            $tittle = " by " . $author->name;
        }

        // dd(request('search'));
        return view('post.index', [
            'tittle' => "Halaman Post" . $tittle,
            'post' => Post::latest()->search(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }


    public function posts(Post $post)
    {

        return view('post.posts', [
            'tittle' => "Halaman Post Utama",
            'post' => $post
        ]);
    }
}
