<?php

namespace App\Http\Controllers;

use App\Models\Tentangkami;
use App\Models\visimisi;
use App\Models\Guru;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        $tentang = Tentangkami::orderBy('id', 'asc')->paginate(4);
        $visimisi = visimisi::orderBy('id', 'asc')->paginate(3);
        $guru = Guru::orderBy('id', 'asc')->paginate(32);
        return view('layouts.tentang', compact('tentang', 'visimisi', 'guru'));
    }

    public function detailTentang(Request $request,$id)
    {
        $detailTentang = Tentangkami::where('id', $id)->orderBy('id', 'asc')->paginate(1);
        return view('layouts.detailtentang', compact('detailTentang'));
    }
}
