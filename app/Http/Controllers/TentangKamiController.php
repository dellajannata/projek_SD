<?php

namespace App\Http\Controllers;

use App\Models\Tentangkami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TentangKamiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $tentangkami = Tentangkami::orderBy('id', 'asc')->paginate(5);
        return view('tentang.index', compact('tentangkami'));
    }

    public function create()
    {
        return view('tentang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'     => 'required',
            'deskripsi'   => 'required',
            'gambar'     => 'required|image|mimes:png,jpg,jpeg',
        ]);

        //upload image
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/tentangkami', $gambar->hashName());

        $tentangkami = Tentangkami::create([
            'judul' => $request->judul,
            'deskripsi'=> $request->deskripsi,
            'gambar' => $gambar->hashName(),
        ]);

        if ($tentangkami) {
            //redirect dengan pesan sukses
            return redirect()->route('tentangkami.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('tentangkami.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request,$id)
    {
        $tentangkami = Tentangkami::where('id', $id)->first();
        return view('tentang.detail', compact('tentangkami'));
    }
    public function edit($id)
    {
        $tentangkami = Tentangkami::find($id);
        return view('tentang.edit', compact('tentangkami'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'deskripsi'   => 'required',
            'gambar'     => 'required|image|mimes:png,jpg,jpeg',
        ]);

        //get data tentangkami by ID
        $tentangkami = Tentangkami::findOrFail($id);

        if ($request->file('gambar') == "") {

            $tentangkami->update([
                'judul'     => $request->judul,
                'deskripsi'   => $request->deskripsi,
            ]);
        } else {

            //upload new image
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/tentangkami', $gambar->hashName());

            $tentangkami->update([
                'gambar'     => $gambar->hashName(),
                'judul'     => $request->judul,
                'deskripsi'   => $request->deskripsi,
            ]);
        }
        if ($tentangkami) {
            //redirect dengan pesan sukses
            return redirect()->route('tentangkami.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('tentangkami.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $tentangkami = Tentangkami::findOrFail($id);
        $tentangkami->delete();

        if ($tentangkami) {
            //redirect dengan pesan sukses
            return redirect()->route('tentangkami.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('tentangkami.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
