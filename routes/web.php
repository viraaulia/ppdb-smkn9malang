<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.layouts.app');
});

Route::get('/layout-top-navigation.html', function () {
    return view('guest.pages.home');
});


Route::get('/tentang', function () {
    return view('guest.pages.tentang');
})->name('guest.tentang');

Route::get('/jurusan', function () {
    return view('guest.pages.jurusan');
})->name('guest.jurusan');

Route::get('/alur', function () {
    return view('guest.pages.alur');
})->name('guest.alur');

Route::get('/jadwal', function () {
    return view('guest.pages.jadwal');
})->name('guest.jadwal');