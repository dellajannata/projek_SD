<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CRUDAlbumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $album = Album::orderBy('id', 'asc')->paginate(5);
        return view('album.index', compact('album'));
    }

    public function create()
    {
        return view('album.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'judul'     => 'required',
            'tanggal'     => 'required',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/album', $image->hashName());
        
        $album = Album::create([
            'image' => $image->hashName(),
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
        ]);

        if ($album) {
            //redirect dengan pesan sukses
            return redirect()->route('crudalbumfoto.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudalbumfoto.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request,$id)
    {
        $album = Album::where('id', $id)->first();
        return view('album.detail', compact('album'));
    }
    public function edit($id)
    {
        $album = Album::find($id);
        return view('album.edit', compact('album'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'judul'     => 'required',
            'tanggal'     => 'required',
        ]);

        //get data Album by ID
        $album = Album::findOrFail($id);

        if ($request->file('image') == "") {

            $album->update([
                'judul'     => $request->judul,
                'tanggal' => $request->tanggal,
            ]);
        } else {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/album', $image->hashName());

            $album->update([
                'image'     => $image->hashName(),
                'judul'     => $request->judul,
                'tanggal'     => $request->tanggal,
            ]);
        }
        if ($album) {
            //redirect dengan pesan sukses
            return redirect()->route('crudalbumfoto.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudalbumfoto.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $album = Album::findOrFail($id);
        $album->delete();

        if ($album) {
            //redirect dengan pesan sukses
            return redirect()->route('crudalbumfoto.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudalbumfoto.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
