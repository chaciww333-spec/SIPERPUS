<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function(){
    return redirect('/login');
});
Route::get('/anggota', [App\Http\Controllers\FormAnggotaController::class, 'index'])->name('anggota.index');
Route::get('/anggota/create', [App\Http\Controllers\FormAnggotaController::class, 'create'])->name('anggota.create');
Route::post('/anggota/store', [App\Http\Controllers\FormAnggotaController::class, 'store'])->name('anggota.store');
Route::get('/anggota/{id}/kartu', [App\Http\Controllers\FormAnggotaController::class, 'kartu'])->name('anggota.kartu');


Auth::routes();


Route::group([
    'middleware' => ['auth']
], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('/admin', App\Http\Controllers\AdminController::class);
    Route::resource('/pustakawan', App\Http\Controllers\PustakawanController::class);
    Route::resource('/kategori', App\Http\Controllers\KategoriController::class);
    Route::resource('/buku', App\Http\Controllers\BukuController::class);
    Route::get('/ubah-profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('profil.index');
    Route::post('/ubah-profil', [App\http\Controllers\ProfilController::class, 'update'])->name('profil.update');
    Route::resource('/peminjaman', App\Http\Controllers\PeminjamanController::class)->only('index', 'create', 'store', 'destroy');
    Route::resource('pengembalian', App\Http\Controllers\PengembalianController::class)->only('index', 'create', 'store');
});
