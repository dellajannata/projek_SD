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
        $kelas = Kelas::where('hari','Senin')->orderBy('id', 'asc')->paginate(10);
        $kelasSelasa = Kelas::where('hari','Selasa')->orderBy('id', 'asc')->paginate(10);
        $kelasRabu = Kelas::where('hari','Rabu')->orderBy('id', 'asc')->paginate(10);
        $kelasKamis = Kelas::where('hari','Kamis')->orderBy('id', 'asc')->paginate(10);
        $kelasJumat = Kelas::where('hari','Jumat')->orderBy('id', 'asc')->paginate(10);
        $kelasSabtu = Kelas::where('hari','Sabtu')->orderBy('id', 'asc')->paginate(10);
        return view('layouts.kelas', compact('kelas','kelasSelasa','kelasRabu','kelasKamis','kelasJumat','kelasSabtu'));
    }
    public function index2()
    {
        $kelas2 = Kelas2::where('hari','Senin')->orderBy('id', 'asc')->paginate(10);
        $kelas2Selasa = Kelas2::where('hari','Selasa')->orderBy('id', 'asc')->paginate(10);
        $kelas2Rabu = Kelas2::where('hari','Rabu')->orderBy('id', 'asc')->paginate(10);
        $kelas2Kamis = Kelas2::where('hari','Kamis')->orderBy('id', 'asc')->paginate(10);
        $kelas2Jumat = Kelas2::where('hari','Jumat')->orderBy('id', 'asc')->paginate(10);
        $kelas2Sabtu = Kelas2::where('hari','Sabtu')->orderBy('id', 'asc')->paginate(10);
        return view('layouts.kelas2', compact('kelas2','kelas2Selasa','kelas2Rabu','kelas2Kamis','kelas2Jumat','kelas2Sabtu'));

    }
    public function index3()
    {
        $kelas3 = Kelas3::where('hari','Senin')->orderBy('id', 'asc')->paginate(10);
        $kelas3Selasa = Kelas3::where('hari','Selasa')->orderBy('id', 'asc')->paginate(10);
        $kelas3Rabu = Kelas3::where('hari','Rabu')->orderBy('id', 'asc')->paginate(10);
        $kelas3Kamis = Kelas3::where('hari','Kamis')->orderBy('id', 'asc')->paginate(10);
        $kelas3Jumat = Kelas3::where('hari','Jumat')->orderBy('id', 'asc')->paginate(10);
        $kelas3Sabtu = Kelas3::where('hari','Sabtu')->orderBy('id', 'asc')->paginate(10);
        return view('layouts.kelas3', compact('kelas3','kelas3Selasa','kelas3Rabu','kelas3Kamis','kelas3Jumat','kelas3Sabtu'));
    }
    public function index4()
    {
        $kelas4 = Kelas4::where('hari','Senin')->orderBy('id', 'asc')->paginate(10);
        $kelas4Selasa = Kelas4::where('hari','Selasa')->orderBy('id', 'asc')->paginate(10);
        $kelas4Rabu = Kelas4::where('hari','Rabu')->orderBy('id', 'asc')->paginate(10);
        $kelas4Kamis = Kelas4::where('hari','Kamis')->orderBy('id', 'asc')->paginate(10);
        $kelas4Jumat = Kelas4::where('hari','Jumat')->orderBy('id', 'asc')->paginate(10);
        $kelas4Sabtu = Kelas4::where('hari','Sabtu')->orderBy('id', 'asc')->paginate(10);
        return view('layouts.kelas4', compact('kelas4','kelas4Selasa','kelas4Rabu','kelas4Kamis','kelas4Jumat','kelas4Sabtu'));
    }
    public function index5()
    {
        $kelas5 = Kelas5::where('hari','Senin')->orderBy('id', 'asc')->paginate(10);
        $kelas5Selasa = Kelas5::where('hari','Selasa')->orderBy('id', 'asc')->paginate(10);
        $kelas5Rabu = Kelas5::where('hari','Rabu')->orderBy('id', 'asc')->paginate(10);
        $kelas5Kamis = Kelas5::where('hari','Kamis')->orderBy('id', 'asc')->paginate(10);
        $kelas5Jumat = Kelas5::where('hari','Jumat')->orderBy('id', 'asc')->paginate(10);
        $kelas5Sabtu = Kelas5::where('hari','Sabtu')->orderBy('id', 'asc')->paginate(10);
        return view('layouts.kelas5', compact('kelas5','kelas5Selasa','kelas5Rabu','kelas5Kamis','kelas5Jumat','kelas5Sabtu'));
    }
    public function index6()
    {
        $kelas6 = Kelas6::where('hari','Senin')->orderBy('id', 'asc')->paginate(10);
        $kelas6Selasa = Kelas6::where('hari','Selasa')->orderBy('id', 'asc')->paginate(10);
        $kelas6Rabu = Kelas6::where('hari','Rabu')->orderBy('id', 'asc')->paginate(10);
        $kelas6Kamis = Kelas6::where('hari','Kamis')->orderBy('id', 'asc')->paginate(10);
        $kelas6Jumat = Kelas6::where('hari','Jumat')->orderBy('id', 'asc')->paginate(10);
        $kelas6Sabtu = Kelas6::where('hari','Sabtu')->orderBy('id', 'asc')->paginate(10);
        return view('layouts.kelas6', compact('kelas6','kelas6Selasa','kelas6Rabu','kelas6Kamis','kelas6Jumat','kelas6Sabtu'));
    }
    
}
