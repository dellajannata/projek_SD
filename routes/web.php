<?php

use App\Http\Controllers\AdminBerandaController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CRUDAlbumController;
use App\Http\Controllers\TampilanGuruController;
use App\Http\Controllers\CRUDGuruController;
use App\Http\Controllers\CRUDWaliKelasController;
use App\Http\Controllers\CRUDKelasController;
use App\Http\Controllers\CRUDKelas2Controller;
use App\Http\Controllers\CRUDKelas3Controller;
use App\Http\Controllers\CRUDKelas4Controller;
use App\Http\Controllers\CRUDKelas5Controller;
use App\Http\Controllers\CRUDKelas6Controller;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\pembiasaanController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\TampilanBerandaController;
use App\Http\Controllers\InformasiLombaController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\SaranaPrasaranaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Auth::routes();

Route::redirect('/', '/beranda');

Route::get('/album', [AlbumController::class, 'index']);
Route::get('/beranda', [TampilanBerandaController::class, 'index']);
Route::get('/guru', [TampilanGuruController::class, 'index']);
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);
Route::get('/tentang', [TentangController::class, 'index']);
Route::get('/sarana', [SaranaController::class, 'index']);

Route::middleware(['auth', 'role:admin'])->group(function () {
    //adminBeranda
    Route::get('/adminBeranda', [AdminBerandaController::class, 'index']);

    //adminGuru
    Route::resource('crudguru', CRUDGuruController::class);
    
    //pembiasaan
    Route::resource('pembiasaan', PembiasaanController::class);

    //visimisi
    Route::resource('visimisi', VisimisiController::class);

    //saranaprasarana
    Route::resource('saranaPrasarana', SaranaPrasaranaController::class);

    //INFORMASI
    Route::resource('informasisd', InformasiController::class);
    Route::resource('informasiLomba', InformasiLombaController::class);

    //DETAIL INFORMASI
    Route::get('detailinformasi', [TampilanBerandaController::class, 'detail']);
    Route::get('detailLomba', [TampilanBerandaController::class, 'detailLomba']);
    Route::get('detailPembiasaan', [TampilanBerandaController::class, 'detailPembiasaan']);

    //TENTANGKAMI
    Route::resource('tentangkami', TentangKamiController::class);

    //adminKelas
    Route::resource('crudkelas', CRUDKelasController::class);
    Route::resource('crudkelas2', CRUDKelas2Controller::class);
    Route::resource('crudkelas3', CRUDKelas3Controller::class);
    Route::resource('crudkelas4', CRUDKelas4Controller::class);
    Route::resource('crudkelas5', CRUDKelas5Controller::class);
    Route::resource('crudkelas6', CRUDKelas6Controller::class);

    //ALBUM
    Route::resource('crudalbum', CRUDAlbumController::class);

    //adminWaliKelas
    Route::resource('crudwalikelas', CRUDWaliKelasController::class);
 
    //semua route dalam grup ini hanya bisa diakses oleh admin
});