<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;

class InformasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $informasi = Informasi::orderBy('id', 'asc')->paginate(5);
        return view('informasi.index', compact('informasi'));
    }

    public function create()
    {
        return view('informasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'deskripsi'   => 'required'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/informasi', $image->hashName());

        $informasi = Informasi::create([
            'image' => $image->hashName(),
            'deskripsi' => $request->deskripsi
        ]);

        if ($informasi) {
            //redirect dengan pesan sukses
            return redirect()->route('informasisd.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('informasisd.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request, $id)
    {
        $informasi = Informasi::where('id', $id)->first();
        return view('informasi.detail', compact('informasi'));
    }
    public function edit($id)
    {
        $informasi = Informasi::find($id);
        return view('informasi.edit', compact('informasi'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'deskripsi'   => 'required'
        ]);

        //get data informasi by ID
        $informasi = Informasi::findOrFail($id);

        if ($request->file('image') == "") {

            $informasi->update([
                'deskripsi' => $request->deskripsi
            ]);
        } else {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/informasi', $image->hashName());

            $informasi->update([
                'image'     => $image->hashName(),
                'deskripsi'=> $request->deskripsi
            ]);
        }
        if ($informasi) {
            //redirect dengan pesan sukses
            return redirect()->route('informasisd.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('informasisd.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $informasi = Informasi::findOrFail($id);
        $informasi->delete();

        if ($informasi) {
            //redirect dengan pesan sukses
            return redirect()->route('informasisd.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('informasisd.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
