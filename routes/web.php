<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/', [CompanyController::class, 'index'])->name('home');
Route::get('/tentang-kami', [CompanyController::class, 'tentang'])->name('tentang');
Route::get('/layanan', [CompanyController::class, 'layanan'])->name('layanan');
Route::get('/kontak', [CompanyController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [CompanyController::class, 'kirimPesan'])->name('kontak.kirim');
