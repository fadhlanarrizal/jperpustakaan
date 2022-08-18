@extends('main')

@section('thead')
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIK</th>
    <th>email</th>
    <th>Alamat</th>
    <th>No Telp</th>
    <th>Aksi</th>
</tr>
@endsection

@section('tbody')
@php
$i = 1;   
@endphp
@foreach ($anggotas as $anggota)

<tr>
<td>{{ $i++ }}</td>
<td>{{ $anggota['nama'] }}</td>
<td>{{ $anggota['NIK'] }}</td>
<td>{{ $anggota['email'] }}</td>
<td>{{ $anggota['alamat'] }}</td>
<td>{{ $anggota['no_telp'] }}</td>
<td>
    {{-- <button class="btn btn-success"><a href="" class="text-white">Edit</a></button> --}}
    <button class="btn btn-danger"><a href="" class="text-white">Hapus</a></button>
</td>
</tr>    
@endforeach
@endsection


@section('content')
    @include('layouts.partials.table')
@endsection