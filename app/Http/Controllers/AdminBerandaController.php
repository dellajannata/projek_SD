<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Informasi;
use Illuminate\Http\Request;


class AdminBerandaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $guru = Guru::all()->count();
        $informasi = Informasi::orderBy('id', 'asc')->paginate(1);
        return view('adminBeranda.index',compact('guru','informasi'));
    }
}
