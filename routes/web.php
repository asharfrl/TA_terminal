<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PetugasController;


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
Route::get('/laporan', [LaporanController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('welcome');
Route::post('/logins', [LoginController::class, 'authanticate']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/register', [LoginController::class, 'register']);
Route::post('/registers', [LoginController::class, 'store']);

Route::get('/Dashboard', function () {
    return view('officer.master');
});

Route::get('/Profile', function () {
    return view('profile');
});

Route::resource('dataPetugas', PetugasController::class);

