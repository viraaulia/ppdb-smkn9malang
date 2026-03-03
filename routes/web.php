<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.pages.beranda.index');
})->name('beranda');

Route::get('/pengguna', function () {
    return view('admin.pages.pengguna.index');
})->name('pengguna');

use App\Http\Controllers\SekolahController;
Route::resource('sekolah', SekolahController::class);

Route::get('/jurusan', function () {
    return view('admin.pages.jurusan.index');
})->name('jurusan');

Route::get('/pendaftaran', function () {
    return view('admin.pages.pendaftaran.index');
})->name('pendaftaran');