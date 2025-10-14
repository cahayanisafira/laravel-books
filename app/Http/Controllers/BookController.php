<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // Data dummy (tanpa database)
        $books = [
            ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'tahun_terbit' => 2005, 'stok' => 10],
            ['judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer', 'tahun_terbit' => 1980, 'stok' => 5],
            ['judul' => 'Negeri 5 Menara', 'penulis' => 'Ahmad Fuadi', 'tahun_terbit' => 2009, 'stok' => 7],
            ['judul' => 'Sang Pemimpi', 'penulis' => 'Andrea Hirata', 'tahun_terbit' => 2006, 'stok' => 8],
            ['judul' => 'Perahu Kertas', 'penulis' => 'Dee Lestari', 'tahun_terbit' => 2009, 'stok' => 6],
            ['judul' => 'Dilan 1990', 'penulis' => 'Pidi Baiq', 'tahun_terbit' => 2014, 'stok' => 12],
            ['judul' => 'Ayat-Ayat Cinta', 'penulis' => 'Habiburrahman El Shirazy', 'tahun_terbit' => 2004, 'stok' => 9],
        ];

        return view('books.index', compact('books'));
    }
}
