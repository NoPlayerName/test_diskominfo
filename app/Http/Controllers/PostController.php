<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        // dd(request('search'));
        return view('post.index', [
            'tittle' => "Halaman Post",
            'post' => Post::latest()->search(request(['search', 'category']))->get()
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
