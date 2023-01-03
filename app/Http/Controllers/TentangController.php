<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pembiasaanController extends Controller
{
    public function index()
    {
        return view('layouts.pembiasaan');
    }
}
