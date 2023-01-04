<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;
use App\Models\informasiLomba;

class TampilanBerandaController extends Controller
{
    public function index()
    {
        $informasisd = Informasi::orderBy('id', 'asc')->paginate(3);
        $informasiLomba = InformasiLomba::orderBy('id', 'asc')->paginate(3);
        return view('layouts.index', compact('informasisd', 'informasiLomba'));
    }
}
