<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\AlbumVideo;
use Illuminate\Http\Request;

class AlbumController extends Controller
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
        $album = Album::orderBy('id', 'asc')->paginate(9);
        $albumvideo = AlbumVideo::orderBy('id', 'asc')->paginate(9);
        return view('layouts.album', compact('album','albumvideo'));
    }
    
}
