<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggotas = [
            [
                'nama'      => 'Muhammad Fadhlan Ar-rizal',
                'email'     => 'fadhlan@gmail.com',
                'no_telp'   => '087720601274',
                'NIK'       => '200481884981290',
                'alamat'    => 'JL. R A kartini no.30'
            ],
            [
                'nama'      => 'Muhammad Khuluq Azhim',
                'email'     => 'khuluq@gmail.com',
                'no_telp'   => '084420601294',
                'NIK'       => '525732985710002',
                'alamat'    => 'JL. Pamungkas raya no.30'
            ],
            [
                'nama'      => 'Muhammad Wildan Ilyasa',
                'email'     => 'wildan@gmail.com',
                'no_telp'   => '08778291772',
                'NIK'       => '859175776283452',
                'alamat'    => 'JL. Kumparan dua selatan no.1'
            ],
        ];
        return view('anggota.index', [
            "title"     => "Daftar Anggota",
            "anggotas"  => $anggotas
        ]);
    }
}
