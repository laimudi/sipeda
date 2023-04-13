<?php

use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\Anggota\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ketua_org\ProfileeController;
use App\Http\Controllers\ketua_asm\ProfilleController;
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

// Pengguna
// Route::get('/', function () {
//     return view('pengguna.home');
// });

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/sejarah', [App\Http\Controllers\SejarahController::class, 'sejarah']);
Route::get('/visimisi', [App\Http\Controllers\VisiMisiController::class, 'visimisi']);
Route::get('/strukturorganisasi', [App\Http\Controllers\StrukturOrganisasiController::class, 'strukturorganisasi']);
Route::get('/strukturasrama', [App\Http\Controllers\StrukturAsramaController::class, 'strukturasrama']);


// Login
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
    Route::post('/login', [App\Http\Controllers\AuthController::class, 'storeLogin']);

    Route::get('/register', [App\Http\Controllers\AuthController::class, 'register']);
});




Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => ['role:admin'], 'prefix' => 'admin'], function () {
        // Admin
        // Route::prefix('admin')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
        Route::resource('/profil', ProfilController::class);
        Route::resource('/galeri', GaleriController::class);
        Route::resource('/berita', BeritaController::class);
        Route::resource('/mahasiswa', MahasiswaController::class);
        // });
    });

    // Anggota
    Route::group(['middleware' => ['role:anggota'], 'prefix' => 'anggota'], function () {
        Route::get('/', [App\Http\Controllers\Anggota\DashboardController::class, 'index'])->name('anggota.dashboard');
        Route::resource('/profile', ProfileController::class);
    });



    // Ketua-Org
    // Route::prefix('ketua-org')->group(['middleware' => ['role:anggota']], function () {
    //     Route::get('/', [App\Http\Controllers\ketua_org\DashboardController::class, 'index']);
    //     Route::resource('/profilee', ProfileeController::class);
    // });


    // Ketua-Asm
    // Route::prefix('ketua-asm')->group(['middleware' => ['role:anggota']], function () {
    //     Route::get('/', [App\Http\Controllers\ketua_asm\DashboardController::class, 'index']);
    //     Route::resource('/profille', ProfilleController::class);
    // });

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
