<?php

use Illuminate\Support\Facades\Route;

// ROUTES UNTUK DASHBOARD
Route::get('/', function () {
    return view('dashboard.dashboard');
});

// ROUTES UNTUK USER MANAGEMENT
Route::get('/user-management', function(){
    return view('user.user-management');
});

// ROUTES UNTUK ADD ACCOUNT DI LAMAN USER MANAGEMENT
Route::get('/user-management/create', function () {
    return view('user.create');
});

// ROUTES UNTUK KEJADIAN



// ROUTES UNTUK ASSESSMENT
Route::get('/form-assessment', function () {
    return view('form-assessment');
});

// ROUTES UNTUK LAPORAN SITUASI
Route::get('/laporan-situasi', function () {
    return view('lapsit.laporan-situasi');
});

Route::get('/tambah-lapsit', function () {
    return view('lapsit.tambah-lapsit');
});

// ROUTES UNTUK EXECUTIVE SUMMARY
Route::get('/executive-summary', function () {
    return view('executive-summary.exsum');
});


// ROUTES UNTUK FLASH REPORT
Route::get('/flash-report', function(){
    return view('flash-report.flash-report');
});

// CONTOH
Route::get('/form', function () {
    return view('forms.form');
});