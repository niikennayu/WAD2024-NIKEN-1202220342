<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('mahasiswas', MahasiswaController::class);
Route::resource('dosens', DosenController::class);

Route::get('/mahasiswas/{id}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswas.edit');
