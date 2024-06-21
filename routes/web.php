<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExsumController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KejadianController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\PDFController;

// ROUTES UNTUK GENERATE PDF
Route::get('generate-pdf', [PDFController::class, 'generatePDF']);

// ROUTES UNTUK AUTH
Route::get('/login', function () {
    return view('auth.login');
});

// ROUTES UNTUK DASHBOARD
Route::get('/', function () {
    return view('dashboard.dashboard');
});

// ROUTES UNTUK USER MANAGEMENT
Route::get('/user-management', [UserController::class, 'index']);

// ROUTES UNTUK ADD ACCOUNT DI LAMAN USER MANAGEMENT
Route::get('/user-management/create', [UserController::class, 'create']);
Route::post('/simpanAkun', [UserController::class, 'simpanAkun']);

// ROUTES UNTUK KEJADIAN
Route::post('tambah-kejadian', [KejadianController::class,'add'])->name('addKejadian');
//Route::post('/tambah-kejadian/addKejadian', [KejadianController::class,'add']);
Route::get('/kejadian', [KejadianController::class, 'index']);
Route::get('tambah-kejadian', [DropdownController::class, 'indexKecamatan']);
Route::get('{kejadian}/edit', [DropdownController::class, 'indexKecamatanEdit']);
Route::get('edit-kejadian', [DropdownController::class, 'indexKecamatanEdit']);
Route::post('api/fetch-kelurahans', [DropdownController::class, 'fetchKelurahan']);
Route::resource('/kejadian', \App\Http\Controllers\KejadianController::class);


// ROUTES UNTUK ASSESSMENT
Route::get('/form-assessment', [LaporanController::class, 'index'])->name('assessment.index');
Route::post('/form-assessment', [LaporanController::class, 'store'])->name('assessment.store');
Route::post('/submit-assessment', [LaporanController::class, 'store'])->name('submit-assessment');
Route::get('/form-assessment', function () {
    return view('assessment.form-assessment');
});

// ROUTES UNTUK LAPORAN SITUASI
// ROUTES UNTUK ASSESSMENT
Route::get('/tambah-lapsit', [LaporanController::class, 'index'])->name('laporan.index');
Route::post('/tambah-lapsit', [LaporanController::class, 'store'])->name('laporan.store');

Route::get('/laporan-situasi', function () {
    return view('lapsit.laporan-situasi');
});

// Route::get('/tambah-lapsit', function () {
//     return view('lapsit.tambah-lapsit');
// });

// ROUTES UNTUK EXECUTIVE SUMMARY
Route::get('/executive-summary', [ExsumController::class, 'index']);
Route::get('/executive-summary/search', [ExsumController::class, 'search'])->name('search');

// ROUTES UNTUK FLASH REPORT
Route::get('/flash-report', function(){
    return view('flash-report.flash-report');
});

// CONTOH
Route::get('/form', function () {
    return view('forms.form');
});


Route::get('/coba', function () {
    return view('lapsit.lapsit-pdf-2');
});

Route::get('/coba2', function () {
    return view('assessment.2form-assessment');
});