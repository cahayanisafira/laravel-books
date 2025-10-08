<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

// ✅ Route Form dan Kirim Pesan
Route::get('/form', function () {
    return view('form');
})->name('form');

Route::post('/submit', function (Request $request) {
    $message = $request->input('message');
    return view('home', ['message' => $message]);
})->name('submit');

// ✅ Route Register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// ✅ Redirect root (/) ke /home
Route::get('/', function () {
    return redirect('/home');
});

// ✅ Route Home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// ✅ Route Logout
Route::get('/logout', function (Request $request) {
    $request->session()->flush(); // hapus semua session
    return redirect('/login');    // kembali ke halaman login
})->name('logout');

// ✅ Route Login
Route::get('/login', function () {
    return view('login');
})->name('login');
