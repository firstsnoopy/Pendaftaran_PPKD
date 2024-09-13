<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LevelsController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GelombangController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PesertaPelatihanController;

Route::get('/', function () {
    return view('landing.intro');
});

Route::middleware(['checkLevel:3'])->group(function () {
    // Route::resource('penjualan', \App\Http\Controllers\TransactionController::class);
});

Route::resource('dashboard', DashboardController::class);
Route::post('action-login', [LoginController::class, 'actionLogin'])->name('action-login');
Route::get('login', [LoginController::class, 'index']);

Route::resource('user', UserController::class);
Route::resource('peserta', PesertaPelatihanController::class);
Route::resource('jurusan', JurusanController::class);
Route::resource('level', LevelsController::class);
Route::resource('gelombang', GelombangController::class);

Route::resource('landing', LandingPageController::class);
Route::resource('pendaftaran', PendaftaranController::class);
Route::resource('profile', PesertaPelatihanController::class);
