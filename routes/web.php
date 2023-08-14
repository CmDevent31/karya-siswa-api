<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\TimKamiController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\PageNotFoundController;
use App\Http\Controllers\PembelajaranController;

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
    return view('welcome');
});

Route::get('/Home', [HomeController::class, 'index']);
Route::get('/TentangKami', [TentangKamiController::class, 'index']);
Route::get('/Pembelajaran', [PembelajaranController::class, 'index']);
Route::get('/TimKami', [TimKamiController::class, 'index']);
Route::get('/Kontak', [KontakController::class, 'index']);
Route::get('/Testimoni', [TestimoniController::class, 'index']);
Route::get('/PageNotFound', [PageNotFoundController::class, 'index']);
Route::get('/Login', [LoginController ::class, 'index']);
Route::get('/Registrasi', [RegistrasiController ::class, 'index']);
