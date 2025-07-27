<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Paparkan borang login
    public function showLoginForm()
    {
        return view('auth.login'); // login.blade.php dalam folder auth
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Cuba untuk log masuk
        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate(); // Untuk elak session fixation

            return redirect()->intended('/dashboard'); // Halaman selepas login
        }

        // Jika gagal
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('email'));
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    // (Optional) Paparkan borang pendaftaran jika guna register route
    public function showRegisterForm()
    {
        return view('auth.register'); // Jika anda ada fail ini
    }

public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    Auth::login($user);

    return redirect('/dashboard');
}
}