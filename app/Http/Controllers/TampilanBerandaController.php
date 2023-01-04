<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;
use App\Models\informasiLomba;
use App\Models\Pembiasaan;

class TampilanBerandaController extends Controller
{
    public function index()
    {
        $informasisd = Informasi::orderBy('id', 'asc')->paginate(3);
        $informasiLomba = InformasiLomba::orderBy('id', 'asc')->paginate(3);
        $pembiasaan = Pembiasaan::orderBy('id', 'asc')->paginate(8);
        return view('layouts.index', compact('informasisd', 'informasiLomba', 'pembiasaan'));
    }
}
