<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\saranaPrasarana;
class SaranaController extends Controller
{
    public function index()
    {
        $saranaPrasarana = saranaPrasarana::orderBy('id', 'asc')->paginate(9);
        return view('layouts.sarana', compact('saranaPrasarana'));
    }
}
