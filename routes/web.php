<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang-kami', function () {
    return view('TentangKami');
})->name('tentang-kami');

Route::get('/menu/tumpeng', function () {
    return view('MenuTumpeng');
})->name('menu-tumpeng');

Route::get('/menu/nasi', function () {
    return view('MenuNasi');
})->name('menu-nasi');

Route::get('/menu/lainnya', function () {
    return view('MenuLainnya');
})->name('menu-lainnya');
