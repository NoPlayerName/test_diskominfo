<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
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
        ]);

        // $dataValidate['password'] = bcrypt($dataValidate['password']); encrypt password
        $dataValidate['password'] = Hash::make($dataValidate['password']); //menggunakan Hash menambahkan dulu import hasnya
        
        User::create($dataValidate);

        // $request->session()->flash->with('success', 'Registartion success');
        // $request->session()->flash('status', 'Task was successful!'); 
        
        return redirect('/login')->with('success', 'Registartion success');


    }
}
