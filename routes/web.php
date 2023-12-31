<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KuisController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;

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

Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');
Route::get('/modul-view',[LandingPageController::class, 'modul'])->name('modul');
Route::get('/modul-view/details',[LandingPageController::class, 'content'])->name('isi_modul');

Route::get('/event-view',[LandingPageController::class, 'jadwal'])->name('jadwal');

// authentication
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('kuis', KuisController::class);
Route::resource('modul', ModulController::class);
Route::resource('event', EventController::class);