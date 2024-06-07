<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.dashboard');
});

Route::get('/form', function () {
    return view('forms.form');
});

// executive summary
Route::get('/executive-summary', function () {
    return view('dashboard.exsum');
});
