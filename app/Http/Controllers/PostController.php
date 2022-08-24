<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {


        return view('post.index', [
            'tittle' => "Halaman Post",
            'post' => Post::all()
        ]);
    }


    public function posts($slug)
    {

        // $new = [];

        // foreach ($data as $pos) {
        //     if ($pos["slug"] == $slug) {
        //         $new = $pos;
        //     }
        // }

        return view('post.posts', [
            'tittle' => "Halaman Post Utama",
            'post' => Post::find($slug)
        ]);
    }
}
