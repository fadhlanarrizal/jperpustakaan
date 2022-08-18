@extends('main')

@section('content')

@section('thead')
    <tr>
        <th>No </th>
        <th>Nama</th>
        <th>Judul Buku</th>
        <th>ISBN</th>
        <th>Penulis</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Aksi</th>
    </tr>
@endsection

@section('tbody')
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <button class="btn btn-primary"> <a href="/buku/create" class="text-white">Tambah data Buku</a></button>
        </td>
    </tr>

    @php
    $i = 1;
    @endphp
    @foreach ($peminjams as $peminjam)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $peminjam['nama'] }}</td>
            <td>{{ $peminjam['judul_buku'] }}</td>
            <td>{{ $peminjam['ISBN'] }}</td>
            <td>{{ $peminjam['penulis'] }}</td>
            <td>{{ $peminjam['tanggal_pinjam'] }}</td>
            <td>{{ $peminjam['tanggal_kembali'] }}</td>
            <td>
                <button class="btn btn-success"><a href="" class="text-white">Edit</a> </button>
                <button class="btn btn-danger"><a href="" class="text-white">Hapus</a> </button>
            </td>
        </tr>
    @endforeach
@endsection

@include('layouts.partials.table')

@endsection
