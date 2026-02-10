<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.layouts.app');
});

Route::get('/layout-top-navigation.html', function () {
    return view('guest.pages.home');
});