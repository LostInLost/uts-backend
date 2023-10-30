<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function auth(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        }
        return redirect()->back()->with('loginError', 'Email or Password wrong');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'repassword' => ['same:password']
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        $insert = User::create($data);
        if ($insert) return redirect('/login')->with('registerSuccess', 'Registery Successfully, Please login here');
        return redirect()->back()->with('registerError', 'Registery Not Successfully');
    }

    public function logout()
    {
        if (Auth::logout()) return redirect('/login');
    }
}
