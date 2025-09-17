<?php

use Illuminate\Support\Facades\Route;



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
    
});
