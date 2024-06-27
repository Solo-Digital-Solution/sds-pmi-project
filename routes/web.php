<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExsumController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KejadianController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\PDFController;

// ROUTES UNTUK GENERATE PDF
Route::get('/generate-lapsit/{id}', [PDFController::class, 'pdf'])->name('generateLapsit');

// ROUTES UNTUK AUTH
Route::get('/login', function () {
    return view('auth.login');
})->name('auth.login');
Route::get('/register', function () {
    return view('auth.register');
})->name('auth.register');

// ROUTES UNTUK DASHBOARD
// Route::get('/', function () {
//     return view('dashboard.dashboard');
// });
Route::get('/dashboard', [KejadianController::class, 'dashboard'])->name('dashboard');
Route::get('/kejadian', [KejadianController::class, 'kejadian'])->name('kejadian');


// ROUTES UNTUK PROFILE
Route::prefix('profile')->group(function() {
    Route::get('/', [UserController::class, 'profile_index'])->name('profile.index');
    Route::get('/edit', [UserController::class, 'profile_edit'])->name('profile.edit');
});

// ROUTES UNTUK USER MANAGEMENT
Route::get('/user-management', [UserController::class, 'index']);

//ROUTES UNTUK TAMBAH AKUN
Route::get('/user-management/create', [UserController::class, 'create'])->name('addAkun');
Route::post('/simpanAkun', [UserController::class, 'simpanAkun']);
Route::get('/user-management/create', [DropdownController::class, 'indexKecamatanUser']);

// ROUTES UNTUK EDIT DAN HAPUS USER MANAGEMENT
Route::delete('/user-management/{id}', [UserController::class, 'destroy']);
Route::get('/user-management/{id}/edit', [UserController::class, 'edit']);
Route::put('/user-management/{id}', [UserController::class, 'update']);

// ROUTES UNTUK KEJADIAN
// ROUTES UNTUK KEJADIAN
Route::post('tambah-kejadian', [KejadianController::class,'add'])->name('addKejadian');
//Route::post('/tambah-kejadian/addKejadian', [KejadianController::class,'add']);
Route::get('/kejadian', [KejadianController::class, 'index']);
Route::get('tambah-kejadian', [DropdownController::class, 'indexKecamatan']);
//Route::get('{kejadian}/edit', [DropdownController::class, 'indexKecamatanEdit']);
Route::get('/kejadian/edit/{id}',[KejadianController::class,'edit']);
Route::post('/kejadian/update',[KejadianController::class,'update']);
Route::put('kejadian/{id_kejadian}', [KejadianController::class, 'update'])->name('kejadian.update');
Route::get('edit-kejadian', [DropdownController::class, 'indexKecamatanEdit']);
Route::post('api/fetch-kelurahans', [DropdownController::class, 'fetchKelurahan']);
//Route::resource('kejadian', KejadianController::class);
Route::delete('kejadian/{id}', [KejadianController::class, 'destroy'])->name('kejadian.destroy');
Route::get('/kejadian/view/{id}',[KejadianController::class,'view']);
Route::get('/kejadian/view-assessor/{id_kejadian}',[KejadianController::class,'viewAssessor']);
Route::get('/kejadian/view-lapsit/{id_kejadian}', [KejadianController::class, 'viewLapsit'])->name('kejadian.view-lapsit');



// ROUTES UNTUK ASSESSMENT
Route::get('/form-assessment', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('/form-assessment', [LaporanController::class, 'createA'])->name('laporan.createA');
Route::post('/form-assessment', [LaporanController::class, 'store'])->name('laporan.store');
Route::post('/submit-assessment', [KejadianController::class, 'store'])->name('submit-assessment');
Route::get('/form-assessment', [LaporanController::class, 'createAssessment'])->name('laporan.createAssessment');
// Route::get('/form-assessment', function () {
//     return view('assessment.form-assessment');
// });

// ROUTES UNTUK LAPORAN SITUASI
Route::get('/laporan-situasi/{id_kejadian}', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('/kejadian/view-lapsit/{id_kejadian}', [LaporanController::class, 'index'])->name('kejadian.view-lapsit');
Route::get('/tambah-lapsit', [LaporanController::class, 'create'])->name('laporan.create');
Route::post('/tambah-lapsit', [LaporanController::class, 'store'])->name('laporan.store');
Route::get('/laporan-situasi/view/{id_laporan}', [LaporanController::class, 'view'])->name('laporan.view');

Route::delete('/laporan/{id_laporan}', [LaporanController::class, 'destroy'])->name('laporan.destroy');



// ROUTES UNTUK ASSESSMENT
// Route::get('/laporan-situasi', [LaporanController::class, 'index'])->name('laporan.index');

// Route::get('/laporan-situasi', function () {
//     return view('lapsit.laporan-situasi');
// });

// ROUTES UNTUK EXECUTIVE SUMMARY
Route::prefix('executive-summary')->group(function() {
    Route::get('/', [ExsumController::class, 'index'])->name('executive-summary.index');
    Route::get('/search', [ExsumController::class, 'search'])->name('executive-summary.search');
});

// Route::get('/laporan-triwulan', [ExsumController::class, 'index']);
// Route::get('/laporan-triwulan-search', [ExsumController::class, 'search'])->name('search');

// ROUTES UNTUK FLASH REPORT
Route::get('/flash-report/{id}', [LaporanController::class, 'show'])->name('flash-report');

Route::get('/pdf/{id}', [LaporanController::class, 'pdf'])->name('pdf');

// CONTOH
Route::get('/form', function () {
    return view('forms.form');
});


Route::get('/coba', function () {
    return view('lapsit.lapsit-pdf-3');
});
