<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;
use App\Models\informasiLomba;
use App\Models\Pembiasaan;
use App\Models\Guru;

class TampilanBerandaController extends Controller
{
    public function index()
    {
        $informasisd = Informasi::orderBy('id', 'asc')->paginate(3);
        $informasiLomba = InformasiLomba::orderBy('id', 'asc')->paginate(3);
        $pembiasaan = Pembiasaan::orderBy('id', 'asc')->paginate(8);
        return view('layouts.index', compact('informasisd', 'informasiLomba', 'pembiasaan'));
    }

    public function detail()
    {
        $detailinformasi = Informasi::orderBy('id', 'asc')->paginate(1);
        $guru = Guru::orderBy('id', 'asc')->paginate(32);
        return view('layouts.detailinformasi', compact('detailinformasi','guru'));
    }

    public function detailLomba()
    {
        $detailLomba = InformasiLomba::orderBy('id', 'asc')->paginate(1);
        $guru = Guru::orderBy('id', 'asc')->paginate(32);
        return view('layouts.detaillomba', compact('detailLomba','guru'));
    }

    public function detailPembiasaan()
    {
        $detailPembiasaan = Pembiasaan::orderBy('id', 'asc')->paginate(1);
        $guru = Guru::orderBy('id', 'asc')->paginate(32);
        return view('layouts.detailpembiasaan', compact('detailPembiasaan','guru'));
    }
}
