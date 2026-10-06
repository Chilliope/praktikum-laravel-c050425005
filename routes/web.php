<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\ProfileController;

Route::prefix('/akademik')->group(function () {
    Route::resource('mahasiswa', MahasiswaController::class);

    Route::resource('matakuliah', MatakuliahController::class)
    ->only(['index', 'show', 'create', 'store']);
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/halo', function () {
    return "Halo, ini adalah route pertama saya!";
});





Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return 'Dashboard Admin';
    })->name('dashboard');
});

Route::get('/kontak', function () { return 'Halaman Kontak'; });
Route::get('/tentang', function () { return 'Halaman Tentang'; });

Route::get('/sapa', function () {
    return view('sapa', [
        'nama' => 'Erlang Andriyanputra',
        'kontenHtml' => '<strong>Teks Tebal</strong>',
    ]);
});

Route::get('/profil', function () {
    return view('profil')
        ->with('nama', 'Erlang Andriyanputra')
        ->with('nim', 'C050425005')
        ->with('prodi', 'Sistem Informasi Kota Cerdas');
});

