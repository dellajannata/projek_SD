<?php

namespace App\Http\Controllers;

use App\Models\Buletin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BuletinController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $buletin = Buletin::orderBy('id', 'asc')->paginate(5);
        return view('buletin.index', compact('buletin'));
    }

    public function create()
    {
        return view('buletin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal'     => 'required',
            'gambar'     => 'required|image|mimes:png,jpg,jpeg',
            'judul'     => 'required',
            'deskripsi'   => 'required',
        ]);

        //upload image
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/buletin', $gambar->hashName());

        $buletin = Buletin::create([
            'tanggal' => $request->tanggal,
            'gambar' => $gambar->hashName(),
            'judul' => $request->judul,
            'deskripsi'=> $request->deskripsi,
        ]);

        if ($buletin) {
            //redirect dengan pesan sukses
            return redirect()->route('crudbuletin.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudbuletin.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request,$id)
    {
        $buletin = Buletin::where('id', $id)->first();
        return view('buletin.detail', compact('buletin'));
    }
    public function edit($id)
    {
        $buletin = Buletin::find($id);
        return view('buletin.edit', compact('buletin'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tanggal'     => 'required',
            'gambar'     => 'required|image|mimes:png,jpg,jpeg',
            'judul'     => 'required',
            'deskripsi'   => 'required',
        ]);

        //get data buletin by ID
        $buletin = Buletin::findOrFail($id);

        if ($request->file('gambar') == "") {

            $buletin->update([
                'tanggal'     => $request->tanggal,
                'judul'     => $request->judul,
                'deskripsi'   => $request->deskripsi,
            ]);
        } else {

            //upload new image
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/buletin', $gambar->hashName());

            $buletin->update([
                'tanggal'     => $request->tanggal,
                'gambar'     => $gambar->hashName(),
                'judul'     => $request->judul,
                'deskripsi'   => $request->deskripsi,
            ]);
        }
        if ($buletin) {
            //redirect dengan pesan sukses
            return redirect()->route('crudbuletin.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudbuletin.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $buletin = Buletin::findOrFail($id);
        $buletin->delete();

        if ($buletin) {
            //redirect dengan pesan sukses
            return redirect()->route('crudbuletin.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudbuletin.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
