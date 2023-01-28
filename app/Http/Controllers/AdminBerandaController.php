<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\WaliKelas;
use App\Models\Informasi;
use App\Models\informasiLomba;
use Illuminate\Http\Request;


class AdminBerandaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $guru = Guru::all()->count();
        $jmlSiswa1 = WaliKelas::all()->sum('jmlh_siswa_lk');
        $jmlSiswa2 = WaliKelas::all()->sum('jmlh_siswa_pr');
        $jmlhSiswa = $jmlSiswa1 + $jmlSiswa2;
        $informasi = Informasi::all()->count();
        $informasi2 = informasiLomba::all()->count();
        $jumlah = $informasi + $informasi2;
        return view('adminBeranda.index', compact('guru', 'jumlah', 'jmlhSiswa'));
    }
}
