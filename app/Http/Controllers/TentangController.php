<?php

namespace App\Http\Controllers;

use App\Models\Tentangkami;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        $tentang = Tentangkami::orderBy('id', 'asc')->paginate(8);
        return view('layouts.tentang', compact('tentang'));
    }
}
