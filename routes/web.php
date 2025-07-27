<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [LoginController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [LoginController::class, 'register']);


// Dashboard - hanya boleh diakses jika user sudah login
Route::get('/dashboard', function () {
    return view('dashboard'); // resources/views/dashboard.blade.php
})->middleware('auth')->name('dashboard');



// Papar halaman login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Proses login (submit form POST)
Route::post('/login', [LoginController::class, 'login']);

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Papar halaman pendaftaran (jika anda ada)
Route::get('/register', [LoginController::class, 'showRegisterForm'])->name('register');

// Papar halaman reset password (jika anda ada)
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');
