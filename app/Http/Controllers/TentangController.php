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
        $tentang = Tentangkami::whereRaw('(id % 2) = 0')->orderBy('id', 'asc')->paginate(2);
        $tentang1 = Tentangkami::whereRaw('(id % 2) = 1')->orderBy('id', 'asc')->paginate(2);
        $visimisi = visimisi::orderBy('id', 'asc')->paginate(3);
        $guru = Guru::orderBy('id', 'asc')->paginate(32);
        return view('layouts.tentang', compact('tentang', 'visimisi', 'guru','tentang1'));
    }
}
