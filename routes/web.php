<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\BerangkatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BeritaController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('layouts.master');
// });

Route::get('/', [MasyarakatController::class, 'index']);
Route::get('/laporan', [LaporanController::class, 'layanan']);
Route::post('/laporans', [LaporanController::class, 'store'])->name('laporan.store');

Route::get('/login', [LoginController::class, 'index'])->name('welcome');
Route::post('/logins', [LoginController::class, 'authanticate']);
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registers', [LoginController::class, 'store']);



Route::middleware('login')->group(function () {

    // Route::get('/Dashboard', function () {
    //     return view('officer.master');
    // })->middleware('checkRole:Admin,Petugas');

    Route::resource('/Dashboard', DashboardController::class)->middleware('checkRole:Admin,Petugas');
    Route::resource('dataPetugas', PetugasController::class)->middleware('checkRole:Admin');
    Route::resource('dataLaporan', LaporanController::class)->middleware('checkRole:Petugas');
    Route::resource('berangkat', BerangkatController::class)->middleware('checkRole:Petugas');
    Route::resource('berita', BeritaController::class)->middleware('checkRole:Petugas');
    Route::get('/logout', [LoginController::class, 'logout'])->middleware('checkRole:Admin,Petugas');

    Route::get('/Profile', function () {
        return view('profile');
    })->middleware('checkRole:Admin,Petugas');

});
