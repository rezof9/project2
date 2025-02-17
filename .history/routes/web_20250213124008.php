<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\TaskController;

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



Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('perusahaan', PerusahaanController::class);
Route::resource('proyek', ProyekController::class);
Route::resource('pegawai', PegawaiController::class);
Route::get('pegawai/filter/{id}', [PegawaiController::class, 'filter'])->name('pegawai.filter');
Route::resource('task', TaskController::class);


