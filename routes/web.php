<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.dashboard');
});

Route::get('/form', function () {
    return view('forms.form');
});

Route::get('/laporan-situasi', function () {
    return view('dashboard.laporan-situasi');
});

Route::get('/tambah-lapsit', function () {
    return view('forms.tambah-lapsit');
});

Route::get('/detail-lapsit-1', function () {
    return view('forms.detail-lapsit-1');
});
