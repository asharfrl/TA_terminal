<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function register()
    {
        return view('register');
    }

    public function authanticate(Request $request)
    {

        $login = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();

            return redirect()->intended('/Dashboard');
        }

        return back()->with('loginError', 'Login gagal! Silahkan coba lagi');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'email' => 'required|max:225|unique:users',
            'username' => 'required|max:225|unique:users',
            'password' => 'required|min:2|max:225',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect()->route('welcome')->with('RegistSuccess', 'Akun Berhasil Ditambahkan');

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
