<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\SliderController;


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


// Route::middleware('auth:api')->get('/perusahaan', [PerusahaanController::class, 'index']);

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('perusahaan', PerusahaanController::class);
Route::resource('proyek', ProyekController::class);
Route::resource('pegawai', PegawaiController::class);
Route::get('pegawai/filter/{id}', [PegawaiController::class, 'filter'])->name('pegawai.filter');
Route::resource('task', TaskController::class);
Route::get('task/create/{idProyek}', [TaskController::class, 'create'])->name('task.create');
Route::post('/update-task-status', [TaskController::class, 'updateStatus']);
Route::resource('/services', ServicesController::class);
Route::resource('products', ProductController::class);
Route::resource('about', AboutController::class);

Route::get('/index', [FrontendController::class, 'index'])->name('frontend.index');

Route::get('/register', [RegistrationController::class, 'showRegister'])->name('register');
Route::post('/register', [RegistrationController::class, 'register'])->name('register.submit');

Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');

Route::get('/reset-password', [ResetPasswordController::class, 'showForgotPasswordForm'])->name('reset-password');
Route::get('/form-reset-password', [ResetPasswordController::class, 'formResetPassword'])->name('password.reset');
Route::post('/reset-password/reset', [ResetPasswordController::class, 'submitResetPassword'])->name('password.reset.submit');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');

Route::get('/slider', [SliderController::class, 'slider'])->name('slider');
