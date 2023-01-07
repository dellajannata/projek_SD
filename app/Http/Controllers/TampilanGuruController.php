<?php

namespace App\Http\Controllers;

use App\Models\Guru;

use Illuminate\Http\Request;

class TampilanGuruController extends Controller
{
    public function index()
    {
        $guru = Guru::orderBy('id', 'asc')->paginate(32);
        return view('layouts.guru', compact('guru'));
    }
}
