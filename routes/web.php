<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfilController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [App\Http\Controllers\AuthController::class, 'login']);


// Admin
// Route::get('/admin', function () {
//     return view('admin.dashboard');
// });

Route::get('/admin', [App\Http\Controllers\DashboardController::class, 'index']);

Route::resource('/profil', ProfilController::class,);
