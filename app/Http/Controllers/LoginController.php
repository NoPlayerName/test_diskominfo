<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function index()
   {
    return view('auth.index', [
        'tittle' => 'Login'
    ]);
   }

   public function login(Request $request)
   {
    $request->validate([

        'email' => 'required|email:dns',
        'password' => 'required'
        // 'email' => $_POST['email'],
        // 'password' => $_POST['password']
    ]);

   dd('berhasil login');
   }
}
