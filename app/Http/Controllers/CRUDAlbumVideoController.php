<?php

namespace App\Http\Controllers;

use App\Models\AlbumVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CRUDAlbumVideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $albumvideo = AlbumVideo::orderBy('id', 'asc')->paginate(5);
        return view('albumvideo.index', compact('albumvideo'));
    }

    public function create()
    {
        return view('albumvideo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'video'     => 'required|file|mimetypes:video/mp4',
            'judul'     => 'required',
            'tanggal'     => 'required',
        ]);

        //upload video
        $video = $request->file('video');
        $video->storeAs('public/albumvideo', $video->hashName());
        
        $albumvideo = AlbumVideo::create([
            'video' => $video->hashName(),
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
        ]);

        if ($albumvideo) {
            //redirect dengan pesan sukses
            return redirect()->route('crudalbumvideo.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudalbumvideo.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request,$id)
    {
        $albumvideo = AlbumVideo::where('id', $id)->first();
        return view('albumvideo.detail', compact('albumvideo'));
    }
    public function edit($id)
    {
        $albumvideo = AlbumVideo::find($id);
        return view('albumvideo.edit', compact('albumvideo'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'video'     => 'required|file|mimetypes:video/mp4',
            'judul'     => 'required',
            'tanggal'     => 'required',
        ]);

        //get data Album by ID
        $albumvideo = AlbumVideo::findOrFail($id);

        if ($request->file('video') == "") {

            $albumvideo->update([
                'judul'     => $request->judul,
                'tanggal' => $request->tanggal,
            ]);
        } else {

            //upload new video
            $video = $request->file('video');
            $video->storeAs('public/albumvideo', $video->hashName());

            $albumvideo->update([
                'video'     => $video->hashName(),
                'judul'     => $request->judul,
                'tanggal'     => $request->tanggal,
            ]);
        }
        if ($albumvideo) {
            //redirect dengan pesan sukses
            return redirect()->route('crudalbumvideo.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudalbumvideo.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $albumvideo = AlbumVideo::findOrFail($id);
        $albumvideo->delete();

        if ($albumvideo) {
            //redirect dengan pesan sukses
            return redirect()->route('crudalbumvideo.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudalbumvideo.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
