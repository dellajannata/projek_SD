<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;
use App\Models\informasiLomba;
use App\Models\informasiLink;
use App\Models\Pembiasaan;
use App\Models\Guru;
use App\Models\WaliKelas;

class TampilanBerandaController extends Controller
{
    public function index()
    {
        $informasisd = Informasi::orderBy('id', 'asc')->paginate(12);
        $informasiLomba = InformasiLomba::orderBy('id', 'asc')->paginate(12);
        $InformasiLink = InformasiLink::orderBy('id', 'asc')->paginate(12);
        $pembiasaan = Pembiasaan::orderBy('id', 'asc')->paginate(9);
        $guru = Guru::all()->count();
        $jmlSiswa1 = WaliKelas::all()->sum('jmlh_siswa_lk');
        $jmlSiswa2 = WaliKelas::all()->sum('jmlh_siswa_pr');
        $jmlhSiswa = $jmlSiswa1 + $jmlSiswa2;
        return view('layouts.index', compact('informasisd', 'informasiLomba','InformasiLink', 'pembiasaan','guru','jmlhSiswa'));
        $pembiasaan = Pembiasaan::orderBy('id', 'asc')->paginate(12);
        return view('layouts.index', compact('informasisd', 'informasiLomba', 'InformasiLink', 'pembiasaan'));
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
    public function guru()
    {
        $guru = Guru::all()->count();
        return view('layouts.index',compact('guru'));
    }
}
