<?php

namespace App\Http\Controllers;

use App\Models\Pembiasaan;

use Illuminate\Http\Request;

class PembiasaanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $pembiasaan = Pembiasaan::orderBy('id', 'asc')->paginate(5);
        return view('pembiasaan.index', compact('pembiasaan'));
    }

    public function create()
    {
        return view('pembiasaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'namaKegiatan'     => 'required',
            'deskripsi'   => 'required'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/pembiasaan', $image->hashName());

        $pembiasaan = Pembiasaan::create([
            'image' => $image->hashName(),
            'namaKegiatan' => $request->namaKegiatan,
            'deskripsi' => $request->deskripsi
        ]);

        if ($pembiasaan) {
            //redirect dengan pesan sukses
            return redirect()->route('pembiasaan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('pembiasaan.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request, $id)
    {
        $pembiasaan = Pembiasaan::where('id', $id)->first();
        return view('pembiasaan.detail', compact('pembiasaan'));
    }
    public function edit($id)
    {
        $pembiasaan = Pembiasaan::find($id);
        return view('pembiasaan.edit', compact('pembiasaan'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'namaKegiatan'     => 'required',
            'deskripsi'   => 'required'
        ]);

        //get data Kegiatan by ID
        $pembiasaan = Pembiasaan::findOrFail($id);

        if ($request->file('image') == "") {

            $pembiasaan->update([
                'namaKegiatan' => $request->namaKegiatan,
                'deskripsi' => $request->deskripsi
            ]);
        } else {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/pembiasaan', $image->hashName());

            $pembiasaan->update([
                'image'     => $image->hashName(),
                'namaKegiatan' => $request->namaKegiatan,
                'deskripsi'=> $request->deskripsi
            ]);
        }
        if ($pembiasaan) {
            //redirect dengan pesan sukses
            return redirect()->route('pembiasaan.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('pembiasaan.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $pembiasaan = pembiasaan::findOrFail($id);
        $pembiasaan->delete();

        if ($pembiasaan) {
            //redirect dengan pesan sukses
            return redirect()->route('pembiasaan.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('pembiasaan.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
