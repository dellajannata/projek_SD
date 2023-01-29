<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Kelas2;
use App\Models\Kelas3;
use App\Models\Kelas4;
use App\Models\Kelas5;
use App\Models\Kelas6;
use App\Models\Ekstra1;
use App\Models\Ekstra2;
use App\Models\Ekstra3;
use App\Models\Ekstra4;
use App\Models\Ekstra5;
use App\Models\Ekstra6;
use App\Models\WaliKelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $jmlSiswa1 = WaliKelas::where('kelas','Kelas 1')->sum('jmlh_siswa_lk');
        $jmlSiswa2 = WaliKelas::where('kelas','Kelas 1')->sum('jmlh_siswa_pr');
        $kelas = Kelas::where('hari','Senin')->orderBy('id', 'asc')->paginate(10);
        $kelasSelasa = Kelas::where('hari','Selasa')->orderBy('id', 'asc')->paginate(10);
        $kelasRabu = Kelas::where('hari','Rabu')->orderBy('id', 'asc')->paginate(10);
        $kelasKamis = Kelas::where('hari','Kamis')->orderBy('id', 'asc')->paginate(10);
        $kelasJumat = Kelas::where('hari','Jumat')->orderBy('id', 'asc')->paginate(10);
        $kelasSabtu = Kelas::where('hari','Sabtu')->orderBy('id', 'asc')->paginate(10);
        $k1= Ekstra1::orderBy('id','asc')->paginate(5);
        return view('layouts.kelas', compact('kelas','kelasSelasa','kelasRabu','kelasKamis','kelasJumat','kelasSabtu','jmlSiswa1','jmlSiswa2','k1'));
    }
    public function index2()
    {
        $jmlSiswa1 = WaliKelas::where('kelas','Kelas 2')->sum('jmlh_siswa_lk');
        $jmlSiswa2 = WaliKelas::where('kelas','Kelas 2')->sum('jmlh_siswa_pr');
        $kelas2 = Kelas2::where('hari','Senin')->orderBy('id', 'asc')->paginate(10);
        $kelas2Selasa = Kelas2::where('hari','Selasa')->orderBy('id', 'asc')->paginate(10);
        $kelas2Rabu = Kelas2::where('hari','Rabu')->orderBy('id', 'asc')->paginate(10);
        $kelas2Kamis = Kelas2::where('hari','Kamis')->orderBy('id', 'asc')->paginate(10);
        $kelas2Jumat = Kelas2::where('hari','Jumat')->orderBy('id', 'asc')->paginate(10);
        $kelas2Sabtu = Kelas2::where('hari','Sabtu')->orderBy('id', 'asc')->paginate(10);
        $k2= Ekstra2::orderBy('id','asc')->paginate(5);
        return view('layouts.kelas2', compact('kelas2','kelas2Selasa','kelas2Rabu','kelas2Kamis','kelas2Jumat','kelas2Sabtu','jmlSiswa1','jmlSiswa2','k2'));

    }
    public function index3()
    {
        $jmlSiswa1 = WaliKelas::where('kelas','Kelas 3')->sum('jmlh_siswa_lk');
        $jmlSiswa2 = WaliKelas::where('kelas','Kelas 3')->sum('jmlh_siswa_pr');
        $kelas3 = Kelas3::where('hari','Senin')->orderBy('id', 'asc')->paginate(10);
        $kelas3Selasa = Kelas3::where('hari','Selasa')->orderBy('id', 'asc')->paginate(10);
        $kelas3Rabu = Kelas3::where('hari','Rabu')->orderBy('id', 'asc')->paginate(10);
        $kelas3Kamis = Kelas3::where('hari','Kamis')->orderBy('id', 'asc')->paginate(10);
        $kelas3Jumat = Kelas3::where('hari','Jumat')->orderBy('id', 'asc')->paginate(10);
        $kelas3Sabtu = Kelas3::where('hari','Sabtu')->orderBy('id', 'asc')->paginate(10);
        $k3= Ekstra3::orderBy('id','asc')->paginate(5);
        return view('layouts.kelas3', compact('kelas3','kelas3Selasa','kelas3Rabu','kelas3Kamis','kelas3Jumat','kelas3Sabtu','jmlSiswa1','jmlSiswa2','k3'));
    }
    public function index4()
    {
        $jmlSiswa1 = WaliKelas::where('kelas','Kelas 4')->sum('jmlh_siswa_lk');
        $jmlSiswa2 = WaliKelas::where('kelas','Kelas 4')->sum('jmlh_siswa_pr');
        $kelas4 = Kelas4::where('hari','Senin')->orderBy('id', 'asc')->paginate(10);
        $kelas4Selasa = Kelas4::where('hari','Selasa')->orderBy('id', 'asc')->paginate(10);
        $kelas4Rabu = Kelas4::where('hari','Rabu')->orderBy('id', 'asc')->paginate(10);
        $kelas4Kamis = Kelas4::where('hari','Kamis')->orderBy('id', 'asc')->paginate(10);
        $kelas4Jumat = Kelas4::where('hari','Jumat')->orderBy('id', 'asc')->paginate(10);
        $kelas4Sabtu = Kelas4::where('hari','Sabtu')->orderBy('id', 'asc')->paginate(10);
        $k4= Ekstra4::orderBy('id','asc')->paginate(5);
        return view('layouts.kelas4', compact('kelas4','kelas4Selasa','kelas4Rabu','kelas4Kamis','kelas4Jumat','kelas4Sabtu','jmlSiswa1','jmlSiswa2','k4'));
    }
    public function index5()
    {
        $jmlSiswa1 = WaliKelas::where('kelas','Kelas 5')->sum('jmlh_siswa_lk');
        $jmlSiswa2 = WaliKelas::where('kelas','Kelas 5')->sum('jmlh_siswa_pr');
        $kelas5 = Kelas5::where('hari','Senin')->orderBy('id', 'asc')->paginate(10);
        $kelas5Selasa = Kelas5::where('hari','Selasa')->orderBy('id', 'asc')->paginate(10);
        $kelas5Rabu = Kelas5::where('hari','Rabu')->orderBy('id', 'asc')->paginate(10);
        $kelas5Kamis = Kelas5::where('hari','Kamis')->orderBy('id', 'asc')->paginate(10);
        $kelas5Jumat = Kelas5::where('hari','Jumat')->orderBy('id', 'asc')->paginate(10);
        $kelas5Sabtu = Kelas5::where('hari','Sabtu')->orderBy('id', 'asc')->paginate(10);
        $k5= Ekstra5::orderBy('id','asc')->paginate(5);
        return view('layouts.kelas5', compact('kelas5','kelas5Selasa','kelas5Rabu','kelas5Kamis','kelas5Jumat','kelas5Sabtu','jmlSiswa1','jmlSiswa2','k5'));
    }
    public function index6()
    {
        $jmlSiswa1 = WaliKelas::where('kelas','Kelas 6')->sum('jmlh_siswa_lk');
        $jmlSiswa2 = WaliKelas::where('kelas','Kelas 6')->sum('jmlh_siswa_pr');
        $kelas6 = Kelas6::where('hari','Senin')->orderBy('id', 'asc')->paginate(10);
        $kelas6Selasa = Kelas6::where('hari','Selasa')->orderBy('id', 'asc')->paginate(10);
        $kelas6Rabu = Kelas6::where('hari','Rabu')->orderBy('id', 'asc')->paginate(10);
        $kelas6Kamis = Kelas6::where('hari','Kamis')->orderBy('id', 'asc')->paginate(10);
        $kelas6Jumat = Kelas6::where('hari','Jumat')->orderBy('id', 'asc')->paginate(10);
        $kelas6Sabtu = Kelas6::where('hari','Sabtu')->orderBy('id', 'asc')->paginate(10);
        $k6= Ekstra6::orderBy('id','asc')->paginate(5);
        return view('layouts.kelas6', compact('kelas6','kelas6Selasa','kelas6Rabu','kelas6Kamis','kelas6Jumat','kelas6Sabtu','jmlSiswa1','jmlSiswa2','k6'));
    }
    public function ekstra1()
    {
        $jmlSiswa1 = WaliKelas::where('kelas','Kelas 1')->sum('jmlh_siswa_lk');
        $jmlSiswa2 = WaliKelas::where('kelas','Kelas 1')->sum('jmlh_siswa_pr');
        $k1= Ekstra1::orderBy('id','asc')->paginate(5);
        return view('layouts.ekstra1', compact('jmlSiswa1','jmlSiswa2','k1'));
    }
    public function ekstra2()
    {
        $jmlSiswa1 = WaliKelas::where('kelas','Kelas 2')->sum('jmlh_siswa_lk');
        $jmlSiswa2 = WaliKelas::where('kelas','Kelas 2')->sum('jmlh_siswa_pr');
        $k2= Ekstra2::orderBy('id','asc')->paginate(5);
        return view('layouts.ekstra2', compact('jmlSiswa1','jmlSiswa2','k2'));
    }
    public function ekstra3()
    {
        $jmlSiswa1 = WaliKelas::where('kelas','Kelas 3')->sum('jmlh_siswa_lk');
        $jmlSiswa2 = WaliKelas::where('kelas','Kelas 3')->sum('jmlh_siswa_pr');
        $k3= Ekstra3::orderBy('id','asc')->paginate(5);
        return view('layouts.ekstra3', compact('jmlSiswa1','jmlSiswa2','k3'));
    }
    public function ekstra4()
    {
        $jmlSiswa1 = WaliKelas::where('kelas','Kelas 4')->sum('jmlh_siswa_lk');
        $jmlSiswa2 = WaliKelas::where('kelas','Kelas 4')->sum('jmlh_siswa_pr');
        $k4= Ekstra4::orderBy('id','asc')->paginate(5);
        return view('layouts.ekstra4', compact('jmlSiswa1','jmlSiswa2','k4'));
    }
    public function ekstra5()
    {
        $jmlSiswa1 = WaliKelas::where('kelas','Kelas 5')->sum('jmlh_siswa_lk');
        $jmlSiswa2 = WaliKelas::where('kelas','Kelas 5')->sum('jmlh_siswa_pr');
        $k5= Ekstra5::orderBy('id','asc')->paginate(5);
        return view('layouts.ekstra5', compact('jmlSiswa1','jmlSiswa2','k5'));
    }
    public function ekstra6()
    {
        $jmlSiswa1 = WaliKelas::where('kelas','Kelas 6')->sum('jmlh_siswa_lk');
        $jmlSiswa2 = WaliKelas::where('kelas','Kelas 6')->sum('jmlh_siswa_pr');
        $k6= Ekstra6::orderBy('id','asc')->paginate(5);
        return view('layouts.ekstra6', compact('jmlSiswa1','jmlSiswa2','k6'));
    }
}
