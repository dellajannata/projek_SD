<?php

use App\Http\Controllers\AdminBerandaController;
use App\Http\Controllers\AdminGuruController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\TampilanGuruController;
use App\Http\Controllers\CRUDGuruController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\pembiasaanController;
use App\Http\Controllers\SaranaController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/album', [AlbumController::class, 'index']);
Route::get('/beranda', [BerandaController::class, 'index']);
Route::get('/guru', [TampilanGuruController::class, 'index']);
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);
Route::get('/pembiasaan', [PembiasaanController::class, 'index']);
Route::get('/sarana', [SaranaController::class, 'index']);

//adminBeranda
Route::get('/adminBeranda', [AdminBerandaController::class, 'index']);

//adminGuru
Route::get('/adminGuru', [AdminGuruController::class, 'index']);


Route::resource('crudguru', CRUDGuruController::class);
Route::resource('pembiasaan', PembiasaanController::class);

