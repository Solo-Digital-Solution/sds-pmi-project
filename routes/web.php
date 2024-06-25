<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExsumController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KejadianController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\PDFController;

// ROUTES UNTUK GENERATE PDF
Route::get('/generate-lapsit', [PDFController::class, 'generatePDF'])->name('generateLapsit');

// ROUTES UNTUK AUTH
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
})->name('auth.register');

// ROUTES UNTUK DASHBOARD
Route::get('/', function () {
    return view('dashboard.dashboard');
});

// ROUTES UNTUK PROFILE
Route::prefix('profile')->group(function() {
    Route::get('/', [UserController::class, 'profile_index'])->name('profile.index');
    Route::get('/edit', [UserController::class, 'profile_edit'])->name('profile.edit');
});

// ROUTES UNTUK USER MANAGEMENT
Route::get('/user-management', [UserController::class, 'index']);
Route::get('/tambah-akun', function () {
    return view('user.tambah-akun');
});
Route::get('/tambah-akun', [UserController::class, 'create']);
Route::post('/simpanAkun', [UserController::class, 'simpanAkun'])->name('addAkun');


// ROUTES UNTUK KEJADIAN
Route::post('tambah-kejadian', [KejadianController::class,'add'])->name('addKejadian');
//Route::post('/tambah-kejadian/addKejadian', [KejadianController::class,'add']);
Route::get('/kejadian', [KejadianController::class, 'index']);
Route::get('tambah-kejadian', [DropdownController::class, 'indexKecamatan']);
//Route::get('{kejadian}/edit', [DropdownController::class, 'indexKecamatanEdit']);
Route::get('/kejadian/edit/{id}',[KejadianController::class,'edit']);
Route::post('/kejadian/update',[KejadianController::class,'update']);
Route::get('edit-kejadian', [DropdownController::class, 'indexKecamatanEdit']);
Route::post('api/fetch-kelurahans', [DropdownController::class, 'fetchKelurahan']);
//Route::resource('/kejadian', \App\Http\Controllers\KejadianController::class);


// ROUTES UNTUK ASSESSMENT
Route::get('/form-assessment', [LaporanController::class, 'index'])->name('laporan.index');
Route::post('/form-assessment', [LaporanController::class, 'store'])->name('laporan.store');
Route::post('/submit-assessment', [KejadianController::class, 'store'])->name('submit-assessment');
Route::get('/form-assessment', function () {
    return view('assessment.form-assessment');
});

// ROUTES UNTUK LAPORAN SITUASI
// ROUTES UNTUK ASSESSMENT
Route::get('/laporan-situasi', [LaporanController::class, 'index'])->name('laporan.index');
Route::post('/tambah-lapsit', [LaporanController::class, 'store'])->name('laporan.store');
Route::resource('/laporan-situasi', \App\Http\Controllers\LaporanController::class);

// Route::get('/laporan-situasi', function () {
//     return view('lapsit.laporan-situasi');
// });

Route::get('/laporan-situasi', function () {
    return view('lapsit.laporan-situasi');
});

Route::get('/tambah-lapsit', function () {
    return view('lapsit.tambah-lapsit');
});

// ROUTES UNTUK EXECUTIVE SUMMARY
Route::prefix('executive-summary')->group(function() {
    Route::get('/', [ExsumController::class, 'index'])->name('executive-summary.index');
    Route::get('/search', [ExsumController::class, 'search'])->name('executive-summary.search');
});

// Route::get('/laporan-triwulan', [ExsumController::class, 'index']);
// Route::get('/laporan-triwulan-search', [ExsumController::class, 'search'])->name('search');

// ROUTES UNTUK FLASH REPORT
Route::get('/flash-report', function(){
    return view('flash-report.flash-report');
});

// CONTOH
Route::get('/form', function () {
    return view('forms.form');
});


Route::get('/coba', function () {
    return view('lapsit.lapsit-pdf-3');
});