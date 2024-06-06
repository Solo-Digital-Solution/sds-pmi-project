<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.dashboard');
});

Route::get('/form', function () {
    return view('forms.form');
});

Route::get('/user-management', function () {
    return view('dashboard.UserManagement');
});
