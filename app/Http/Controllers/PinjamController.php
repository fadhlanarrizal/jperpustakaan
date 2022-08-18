<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PinjamController extends Controller
{
    public function index()
    {
        $peminjams = [
            [
                'nama' => 'Rudi tabuti',
                'judul_buku' => 'Bumi',
                'ISBN' => '9K17A1124JU109',
                'penulis' => 'Tere Liye',
                'tanggal_pinjam' => date('Y-m-d'),
                'tanggal_kembali' => ''
            ],
            [
                'nama' => 'Kurnia',
                'judul_buku' => 'Melangkah',
                'ISBN' => '9786020523316',
                'penulis' => 'Js. Khairen',
                'tanggal_pinjam' => date('Y-m-d'),
                'tanggal_kembali' => '2022-8-17'
            ],
        ];
        return view('peminjaman.index', [
            "title"     =>  "Daftar Peminjaman Buku",
            "peminjams" =>  $peminjams
        ]);
    }
}
