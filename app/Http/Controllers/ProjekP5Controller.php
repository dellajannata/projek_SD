<?php

namespace App\Http\Controllers;

use App\Models\projekP5;
use Illuminate\Http\Request;

class ProjekP5Controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $projekP5 = projekP5::orderBy('id', 'asc')->paginate(9);
        return view('layouts.projekP5', compact('projekP5'));
    }

    public function detail(Request $request,$id)
    {
        $detailP5 = projekP5::where('id', $id)->orderBy('id', 'asc')->paginate(1);
        return view('layouts.detailP5', compact('detailP5'));
    }
}
