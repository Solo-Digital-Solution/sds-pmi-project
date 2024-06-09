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


// executive summary
Route::get('/executive-summary', function () {
    return view('dashboard.exsum');
});


Route::get('/form-assessment', function () {
    return view('form-assessment');
});

Route::get('/flash-report', function(){
    return view('flash-report.flash-report');
});

Route::get('/user-management', function(){
    return view('dashboard.UserManagement');
});
