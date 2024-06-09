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

Route::get('/form-assessment', function () {
    return view('form-assessment');
});

Route::get('/flash-report', function(){
    return view('flash-report.flash-report');
});
