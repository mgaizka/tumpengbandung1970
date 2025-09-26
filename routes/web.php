<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuLainnyaController;
use App\Http\Controllers\MenuNasiController;
use App\Http\Controllers\TestimoniController;
use App\Models\MenuLainnya;
use App\Models\MenuNasi;
use App\Models\MenuTumpeng;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang-kami', function () {
    return view('TentangKami');
})->name('tentang-kami');

Route::get('/menu/tumpeng', [MenuController::class, 'index'])
    ->name('menu-tumpeng');

Route::get('/menu/nasi', [MenuNasiController::class, 'index'])
    ->name('menu-nasi');

Route::get('/menu/lainnya', [MenuLainnyaController::class, 'index'])
    ->name('menu-lainnya');

Route::get('/testimoni', [TestimoniController::class, 'index'])
    ->name('testimoni');
