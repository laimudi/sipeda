<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\BeritaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Login
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('/register', [App\Http\Controllers\AuthController::class, 'register']);


// Pengguna
Route::get('/', function () {
    return view('pengguna.home');
});

Route::get('/sejarah', [App\Http\Controllers\SejarahController::class, 'sejarah']);
Route::get('/visimisi', [App\Http\Controllers\VisiMisiController::class, 'visimisi']);
Route::get('/strukturorganisasi', [App\Http\Controllers\StrukturOrganisasiController::class, 'strukturorganisasi']);
Route::get('/strukturasrama', [App\Http\Controllers\StrukturAsramaController::class, 'strukturasrama']);


// Admin
Route::get('/admin', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
Route::resource('/profil', ProfilController::class);
Route::resource('/galeri', GaleriController::class);
Route::resource('/berita', BeritaController::class);
