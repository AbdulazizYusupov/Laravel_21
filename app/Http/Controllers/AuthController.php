<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');


        if (!Auth::attempt($credentials)) {
            return redirect()->back()->withErrors([
                'email' => 'The provided credentials are incorrect.',
            ]);
        }

        return redirect()->route('categories.index')->with('success', 'Login successful.');
    }
    public function sign()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('category.index')->with('success', 'Registration successful.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('login')->with('success', 'Logout successful.');
    }
}
