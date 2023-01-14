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

    public function detail(Request $request,$id)
    {
        $detailinformasi = Informasi::where('id', $id)->orderBy('id', 'asc')->paginate(1);
        return view('layouts.detailinformasi', compact('detailinformasi'));
    }

    public function detailLomba(Request $request,$id)
    {
        $detailLomba = InformasiLomba::where('id', $id)->orderBy('id', 'asc')->paginate(1);
        return view('layouts.detaillomba', compact('detailLomba'));
    }

    public function detailPembiasaan(Request $request,$id)
    {
        $detailPembiasaan = Pembiasaan::where('id', $id)->orderBy('id', 'asc')->paginate(1);
        return view('layouts.detailpembiasaan', compact('detailPembiasaan'));
    }
}
