<?php

use Illuminate\Support\Facades\Route;



Auth::routes();


Route::group([
    'middleware' => ['auth']
], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('/admin', App\Http\Controllers\AdminController::class);
    Route::resource('/pustakawan', App\Http\Controllers\PustakawanController::class);
    
});
