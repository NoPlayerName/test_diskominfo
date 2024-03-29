<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function index()
   {
    return view('auth.index', [
        'tittle' => 'Login Page'
    ]);
   }

   public function login(Request $request)
   {
   $dataValidate = $request->validate([

        'email' => 'required|email:dns',
        'password' => 'required'
    ]);

    if (Auth::attempt($dataValidate)) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard')->with('succes', 'Login Berhasil!!');
    }

    return back()->with('loginerror', 'Login Failed!!') ;
//    dd('berhasil login');
   }

   public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

       return redirect('/');
   }

}
