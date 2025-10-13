<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController; // ✅ PENTING! pastikan controller ini ada

// =============================
// ROUTE FORM & PESAN
// =============================
Route::get('/form', function () {
    return view('form');
})->name('form');

Route::post('/submit', function (Request $request) {
    $message = $request->input('message');
    return view('home', ['message' => $message]);
})->name('submit');

// =============================
// AUTHENTICATION (REGISTER & LOGIN)
// =============================
// Register Page
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Login Page
Route::get('/login', function () {
    return view('login');
})->name('login');

// Logout
Route::get('/logout', function (Request $request) {
    $request->session()->flush(); // Hapus semua session
    return redirect('/login');    // Kembali ke halaman login
})->name('logout');

// =============================
// HOME PAGE
// =============================
// Redirect root (/) to /home
Route::get('/', function () {
    return redirect('/home');
});

// Home Controller
Route::get('/home', [HomeController::class, 'index'])->name('home');

// =============================
// BOOKS PAGE
// =============================
Route::get('/books', [BookController::class, 'index'])->name('books.index');
