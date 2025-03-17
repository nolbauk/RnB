<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login (bisa pakai username atau email)
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'login' => 'required', // Bisa email atau username
            'password' => 'required|string|min:6',
        ]);

        // Tentukan apakah input adalah email atau username
        $loginType = filter_var($credentials['login'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt([$loginType => $credentials['login'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();

            // Redirect berdasarkan role
            return redirect()->route(Auth::user()->role_id == 1 ? 'dashboard.index' : 'profile');
        }

        return back()->with('error', 'Invalid login credentials.');
    }

    // Menampilkan halaman register
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Proses registrasi user baru
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2, // Default role user
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'You have been logged out.');
    }
}