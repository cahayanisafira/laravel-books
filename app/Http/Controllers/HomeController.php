<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Kirim data message ke view
        $message = "Selamat datang di Dashboard Fashion Store 🎉";

        // kirim ke view 'home' dengan compact()
        return view('home', compact('message'));
    }
}
