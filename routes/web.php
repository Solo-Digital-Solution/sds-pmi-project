<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExsumController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KejadianController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

//ROUTES UNTUK LANDINGPAGE
Route::get('/', function () {
    return view('landing-page');
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// MIDDLEWARE AUTH
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [KejadianController::class, 'dashboard'])->name('dashboard');

    // ROUTES UNTUK PROFILE
    Route::get('/profile', [UserController::class, 'profile_index'])->name('profile.index');
    Route::get('/profile/edit', [UserController::class, 'profile_edit'])->name('profile.update');
});

Route::middleware(['auth', 'role:Pegawai PMI'])->group(function () {
    Route::post('tambah-kejadian', [KejadianController::class, 'add'])->name('addKejadian');
    Route::get('tambah-kejadian', [DropdownController::class, 'indexKecamatan']);
    Route::delete('kejadian/{id}', [KejadianController::class, 'destroy'])->name('kejadian.destroy');
    Route::get('/kejadian/view-assessor/{id_kejadian}', [KejadianController::class, 'viewAssessor']);
    Route::get('/generate-lapsit/{id_kejadian}', [PDFController::class, 'pdf'])->name('generateLapsit');

    // ROUTES UNTUK FLASH REPORT
    Route::get('/flash-report/{id}', [LaporanController::class, 'show'])->name('flash-report');
    Route::get('/pdf/{id}', [LaporanController::class, 'pdf'])->name('pdf');
});


Route::middleware(['auth', 'role:Pegawai PMI,Sukarelawan'])->group(function () {
    Route::get('/kejadian', [KejadianController::class, 'index'])->name('kejadian.index');
    Route::get('/kejadian/view-lapsit/{id_kejadian}', [KejadianController::class, 'viewLapsit'])->name('kejadian.view-lapsit');
    Route::get('/kejadian/view/{id}', [KejadianController::class, 'view']);
    Route::get('/kejadian/edit/{id}', [KejadianController::class, 'edit']);
    Route::post('/kejadian/update', [KejadianController::class, 'update']);
    Route::put('kejadian/{id_kejadian}', [KejadianController::class, 'update'])->name('kejadian.update');
    Route::get('edit-kejadian', [DropdownController::class, 'indexKecamatanEdit']);

    // ROUTES UNTUK ASSESSMENT
    Route::get('/form-assessment', [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('/form-assessment', [LaporanController::class, 'createA'])->name('laporan.createA');
    Route::post('/form-assessment', [LaporanController::class, 'store'])->name('laporan.store');
    Route::post('/submit-assessment', [KejadianController::class, 'store'])->name('submit-assessment');
    Route::get('/form-assessment', [LaporanController::class, 'createAssessment'])->name('laporan.createAssessment');

    // ROUTES UNTUK LAPORAN SITUASI
    Route::get('/laporan-situasi/{id_kejadian}', [LaporanController::class])->name('laporan.index');
    Route::get('/kejadian/view-lapsit/{id_kejadian}', [LaporanController::class, 'index'])->name('kejadian.view-lapsit');
    Route::get('/tambah-lapsit', [LaporanController::class, 'create'])->name('laporan.create');
    Route::post('/tambah-lapsit', [LaporanController::class, 'store'])->name('laporan.store');
    Route::get('/laporan-situasi/view/{id_laporan}', [LaporanController::class, 'view'])->name('laporan.view');
    Route::delete('/laporan/{id_laporan}', [LaporanController::class, 'destroy'])->name('laporan.destroy');
});

// MIDDLEWARE EXECUTIVE
Route::middleware(['auth', 'role:Pegawai PMI,Executive'])->group(function () {
    // ROUTES UNTUK EXECUTIVE SUMMARY
    Route::get('/executive-summary', [ExsumController::class, 'index'])->name('executive-summary.index');
    Route::get('/executive-summary/search', [ExsumController::class, 'search'])->name('executive-summary.search');
    Route::get('/generate-lapsit/{id_kejadian}', [PDFController::class, 'pdf'])->name('generateLapsit');
});

// MIDDLEWARE HRD
Route::middleware(['auth', 'role:HRD'])->group(function () {
    // ROUTES UNTUK USER MANAGEMENT
    Route::get('/user-management', [UserController::class, 'index'])->name('user-management.index');

    //ROUTES UNTUK TAMBAH AKUN
    Route::get('/user-management/create', [UserController::class, 'create'])->name('addAkun');
    Route::post('/simpanAkun', [UserController::class, 'simpanAkun']);
    Route::get('/user-management/create', [DropdownController::class, 'indexKecamatanUser']);

    // ROUTES UNTUK EDIT DAN HAPUS USER MANAGEMENT
    Route::delete('/user-management/{id}', [UserController::class, 'destroy']);
    Route::get('/user-management/{id}/edit', [UserController::class, 'edit']);
    Route::put('/user-management/{id}', [UserController::class, 'update']);
});

// MIDDLEWARE fetchkelurahan API
Route::middleware(['auth', 'role:Pegawai PMI,HRD'])->group(function () {
    Route::post('api/fetch-kelurahans', [DropdownController::class, 'fetchKelurahan']);
});

Route::get('/cobaaa', function () {
    return view('executive-summary.c3');
});

require __DIR__ . '/auth.php';
