<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = [
            [
                'judul' => 'Bumi',
                'ISBN' => '9K17A1124JU109',
                'penerbit' => 'Gramedia',
                'penulis' => 'Tere Liye',
                'jumlah halaman' => '555',
                'stok' => '20'
            ],

            [
                'judul' => 'Negeri 5 Menara',
                'ISBN' => '571Y90BB21MH24',
                'penerbit' => 'Aksara',
                'penulis' => 'Ahmad Fuadi',
                'jumlah halaman' => '600',
                'stok' => '30'
            ],
            [
                'judul' => 'Melangkah',
                'ISBN' => '9786020523316',
                'penerbit' => 'Gramedia',
                'penulis' => 'Js. Khairen',
                'jumlah halaman' => '368',
                'stok' => '12'
            ],
            [
                'judul' => 'Parable',
                'ISBN' => '9789797946234',
                'penerbit' => 'Mediakita',
                'penulis' => 'Brian Khrisna',
                'jumlah halaman' => '688',
                'stok' => '12'
            ],
        ];

        return view('buku.index', [
            "title" => "Daftar Buku",
            "bukus" => $bukus
        ]);
    }
}
