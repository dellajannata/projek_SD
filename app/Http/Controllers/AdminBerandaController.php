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
        $jmlSiswa = WaliKelas::all()->sum('jmlh_siswa');
        $informasi = Informasi::all()->count();
        $informasi2 = informasiLomba::all()->count();
        $jumlah = $informasi + $informasi2;
        return view('adminBeranda.index', compact('guru', 'jumlah', 'jmlSiswa'));
    }
}
