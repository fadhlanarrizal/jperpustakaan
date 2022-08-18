<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PinjamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// DASHBOARD 
Route::get('/', [DashboardController::class, 'index']);

// BUKU 
Route::get('/buku', [BukuController::class, 'index']);

// ANGGOTA 
Route::get('/anggota', [AnggotaController::class, 'index']);

// PEMINJAMAN 
Route::get('/peminjaman', [PinjamController::class, 'index']);

Route::get('/coba', function (){
    return view('coba');
});
