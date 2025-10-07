<?php
<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

// ✅ Route untuk halaman home dari controller
Route::get('/home', [HomeController::class, 'index'])->name('home');
=======

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
>>>>>>> 878a317daf1316cdac31f2dcf1ad95d835be40df

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

<<<<<<< HEAD
// Redirect root (/) ke /home
=======
>>>>>>> 878a317daf1316cdac31f2dcf1ad95d835be40df
Route::get('/', function () {
    return redirect('/home');
});

<<<<<<< HEAD
=======
Route::get('/home', function () {
    return view('home');
})->name('home');

>>>>>>> 878a317daf1316cdac31f2dcf1ad95d835be40df
// 🔹 Route Logout
Route::get('/logout', function (Request $request) {
    $request->session()->flush(); // hapus semua session
    return redirect('/login');    // kembali ke halaman login
})->name('logout');

Route::get('/login', function () {
    return view('login');
})->name('login');
<<<<<<< HEAD
=======

>>>>>>> 878a317daf1316cdac31f2dcf1ad95d835be40df
