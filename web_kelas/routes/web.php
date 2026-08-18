<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('WebKelas');
});

Route::get('/login', function () {
    return view('auth/login');
});
