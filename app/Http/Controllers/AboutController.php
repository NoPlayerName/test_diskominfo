<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('home.about', [
            'tittle' => "About",
            'name' => "Muhammad Ruhiyat",
            'email' => "muhammadruhiyat020998@gmail.com",
            'img' => "/img/photo_2022-08-01_13-12-07.jpg"
        ]);
    }
}
