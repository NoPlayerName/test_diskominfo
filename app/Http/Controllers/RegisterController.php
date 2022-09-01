<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
// untuk menambahkan validasi password kombinasi
use Illuminate\Validation\Rules\Password; 
use Mockery\Generator\StringManipulation\Pass\Pass;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register',[
            'tittle' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        // return $request->all();
        $dataValidate = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:3', 'max:25']
            // 'password' => ['required', Password::min(8)->mixedCase()->numbers()] validasi tambahan untuk password kombinasi

            // 'name' => ['required', 'max:255'],
            // 'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            // 'email' => ['required', 'email:dns', 'unique:users'],
        ]);

        $dataValidate['password'] = bcrypt($dataValidate['password']);
        User::create($dataValidate);


    }
}
