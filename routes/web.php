<?php

use App\Http\Controllers\AdminBerandaController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BuletinController;
use App\Http\Controllers\CRUDAlbumController;
use App\Http\Controllers\CRUDAlbumVideoController;
use App\Http\Controllers\TampilanGuruController;
use App\Http\Controllers\CRUDGuruController;
use App\Http\Controllers\CRUDWaliKelasController;
use App\Http\Controllers\CRUDKelasController;
use App\Http\Controllers\CRUDKelas2Controller;
use App\Http\Controllers\CRUDKelas3Controller;
use App\Http\Controllers\CRUDKelas4Controller;
use App\Http\Controllers\CRUDKelas5Controller;
use App\Http\Controllers\CRUDKelas6Controller;
use App\Http\Controllers\CRUDEkstra1Controller;
use App\Http\Controllers\CRUDEkstra2Controller;
use App\Http\Controllers\CRUDEkstra3Controller;
use App\Http\Controllers\CRUDEkstra4Controller;
use App\Http\Controllers\CRUDEkstra5Controller;
use App\Http\Controllers\CRUDEkstra6Controller;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\pembiasaanController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\TampilanBerandaController;
use App\Http\Controllers\TampilanBuletinController;
use App\Http\Controllers\InformasiLombaController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\SaranaPrasaranaController;
use App\Http\Controllers\CRUDProjekP5Controller;
use App\Http\Controllers\CRUDInformasiLinkController;
use App\Http\Controllers\ProjekP5Controller;
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
Route::get('/P5', [ProjekP5Controller::class, 'index']);
Route::get('/beranda', [TampilanBerandaController::class, 'index']);
Route::get('/guru', [TampilanGuruController::class, 'index']);
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/kelas2', [KelasController::class, 'index2']);
Route::get('/kelas3', [KelasController::class, 'index3']);
Route::get('/kelas4', [KelasController::class, 'index4']);
Route::get('/kelas5', [KelasController::class, 'index5']);
Route::get('/kelas6', [KelasController::class, 'index6']);
Route::get('/dataKelas', [KelasController::class, 'dataKelas']);
Route::get('/kontak', [KontakController::class, 'index']);
Route::get('/tentang', [TentangController::class, 'index']);
Route::get('/sarana', [SaranaController::class, 'index']);
Route::get('/buletin', [TampilanBuletinController::class, 'index']);
Route::get('detailbuletin/{id}', [TampilanBuletinController::class, 'detailbuletin']);
Route::get('/ekstrakurikuler-kelas-1', [KelasController::class, 'ekstra1']);
Route::get('/ekstrakurikuler-kelas-2', [KelasController::class, 'ekstra2']);
Route::get('/ekstrakurikuler-kelas-3', [KelasController::class, 'ekstra3']);
Route::get('/ekstrakurikuler-kelas-4', [KelasController::class, 'ekstra4']);
Route::get('/ekstrakurikuler-kelas-5', [KelasController::class, 'ekstra5']);
Route::get('/ekstrakurikuler-kelas-6', [KelasController::class, 'ekstra6']);

Route::middleware(['auth', 'role:admin'])->group(function () {
    //adminBeranda
    Route::get('/adminBeranda', [AdminBerandaController::class, 'index']);

    //adminGuru
    Route::resource('crudguru', CRUDGuruController::class);

    //pembiasaan
    Route::resource('pembiasaan', PembiasaanController::class);

    //projek p5
    Route::resource('projekP5', CRUDProjekP5Controller::class);

    //visimisi
    Route::resource('visimisi', VisimisiController::class);

    //informasi Link
    Route::resource('InformasiLink', CRUDInformasiLinkController::class);

    //saranaprasarana
    Route::resource('saranaPrasarana', SaranaPrasaranaController::class);

    //INFORMASI
    Route::resource('informasisd', InformasiController::class);
    Route::resource('informasiLomba', InformasiLombaController::class);

    //BULETIN
    Route::resource('crudbuletin', BuletinController::class);

    //TENTANGKAMI
    Route::resource('tentangkami', TentangKamiController::class);

    //adminKelas
    Route::resource('crudkelas1', CRUDKelasController::class);
    Route::resource('crudkelas2', CRUDKelas2Controller::class);
    Route::resource('crudkelas3', CRUDKelas3Controller::class);
    Route::resource('crudkelas4', CRUDKelas4Controller::class);
    Route::resource('crudkelas5', CRUDKelas5Controller::class);
    Route::resource('crudkelas6', CRUDKelas6Controller::class);

    //adminEkstra
    Route::resource('crudekstra1', CRUDEkstra1Controller::class);
    Route::resource('crudekstra2', CRUDEkstra2Controller::class);
    Route::resource('crudekstra3', CRUDEkstra3Controller::class);
    Route::resource('crudekstra4', CRUDEkstra4Controller::class);
    Route::resource('crudekstra5', CRUDEkstra5Controller::class);
    Route::resource('crudekstra6', CRUDEkstra6Controller::class);

    //ALBUM
    Route::resource('crudalbumfoto', CRUDAlbumController::class);

    //ALBUMVIDEO
    Route::resource('crudalbumvideo', CRUDAlbumVideoController::class);

    //adminWaliKelas
    Route::resource('crudwalikelas', CRUDWaliKelasController::class);

    //semua route dalam grup ini hanya bisa diakses oleh admin
});

// DETAIL INFORMASI
Route::get('detailinformasi/{id}', [TampilanBerandaController::class, 'detail']);
Route::get('detailLomba/{id}', [TampilanBerandaController::class, 'detailLomba']);
Route::get('detailPembiasaan/{id}', [TampilanBerandaController::class, 'detailPembiasaan']);

//detail p5
Route::get('detailP5/{id}', [ProjekP5Controller::class, 'detail']);

// DETAIL INFORMASI
Route::get('detailTentang/{id}', [TentangController::class, 'detailTentang']);
