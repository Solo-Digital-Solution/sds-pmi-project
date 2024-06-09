<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.dashboard');
});

Route::get('/form', function () {
    return view('forms.form');
});

<<<<<<< HEAD
Route::get('/laporan-situasi', function () {
    return view('dashboard.laporan-situasi');
});

Route::get('/tambah-lapsit', function () {
    return view('forms.tambah-lapsit');
});

Route::get('/detail-lapsit-1', function () {
    return view('forms.detail-lapsit-1');
});
=======
Route::get('/form-assessment', function () {
    return view('form-assessment');
});

Route::get('/flash-report', function(){
    return view('flash-report.flash-report');
});
>>>>>>> e4d7c62e392f018cdf6fad7697ce361e3d8ea862
