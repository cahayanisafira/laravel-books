<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $books = [
            ['judul' => 'Pemrograman Web', 'penulis' => 'Andi Setiawan', 'tahun' => 2021],
            ['judul' => 'Algoritma dan Struktur Data', 'penulis' => 'Budi Raharjo', 'tahun' => 2019],
            ['judul' => 'Basis Data', 'penulis' => 'Citra Lestari', 'tahun' => 2020],
            ['judul' => 'Jaringan Komputer', 'penulis' => 'Dedi Gunawan', 'tahun' => 2022],
            ['judul' => 'Kecerdasan Buatan', 'penulis' => 'Eka Pratama', 'tahun' => 2023],
        ];

        return view('home', compact('books'));
    }
}
