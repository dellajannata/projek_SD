<?php

namespace App\Http\Controllers;

use App\Models\Buletin;

use Illuminate\Http\Request;

class TampilanBuletinController extends Controller
{
    public function index()
    {
        $buletin = Buletin::orderBy('id', 'asc')->paginate(8);
        return view('layouts.buletin', compact('buletin'));
    }

    public function detailbuletin(Request $request,$id)
    {
        $detailbuletin = Buletin::where('id', $id)->orderBy('id', 'asc')->paginate(1);
        return view('layouts.detailbuletin', compact('detailbuletin'));
    }
}
