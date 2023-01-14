<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Kelas2;
use App\Models\Kelas3;
use App\Models\Kelas4;
use App\Models\Kelas5;
use App\Models\Kelas6;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::orderBy('id', 'asc')->paginate(10);
        return view('layouts.kelas', compact('kelas'));
    }
    public function index2()
    {
        $kelas2 = Kelas2::orderBy('id', 'asc')->paginate(10);
        return view('layouts.kelas2', compact('kelas2'));
    }
    public function index3()
    {
        $kelas3 = Kelas3::orderBy('id', 'asc')->paginate(10);
        return view('layouts.kelas3', compact('kelas3'));
    }
    public function index4()
    {
        $kelas4 = Kelas4::orderBy('id', 'asc')->paginate(10);
        return view('layouts.kelas4', compact('kelas4'));
    }
    public function index5()
    {
        $kelas5 = Kelas5::orderBy('id', 'asc')->paginate(10);
        return view('layouts.kelas5', compact('kelas5'));
    }
    public function index6()
    {
        $kelas6 = Kelas6::orderBy('id', 'asc')->paginate(10);
        return view('layouts.kelas6', compact('kelas6'));
    }
}
