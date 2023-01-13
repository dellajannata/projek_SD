<?php

namespace App\Http\Controllers;
use App\Models\InformasiLomba;
use Illuminate\Http\Request;

class InformasiLombaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $informasi = InformasiLomba::orderBy('id', 'asc')->paginate(5);
        return view('informasiLomba.index', compact('informasi'));
    }

    public function create()
    {
        return view('informasiLomba.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'deskripsi'   => 'required'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/informasiLomba', $image->hashName());

        $informasi = InformasiLomba::create([
            'image' => $image->hashName(),
            'deskripsi' => $request->deskripsi
        ]);

        if ($informasi) {
            //redirect dengan pesan sukses
            return redirect()->route('informasiLomba.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('informasiLomba.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request, $id)
    {
        $informasi = InformasiLomba::where('id', $id)->first();
        return view('informasiLomba.detail', compact('informasi'));
    }
    public function edit($id)
    {
        $informasi = InformasiLomba::find($id);
        return view('informasiLomba.edit', compact('informasi'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'deskripsi'   => 'required'
        ]);

        //get data informasi by ID
        $informasi = InformasiLomba::findOrFail($id);

        if ($request->file('image') == "") {

            $informasi->update([
                'deskripsi' => $request->deskripsi
            ]);
        } else {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/informasiLomba', $image->hashName());

            $informasi->update([
                'image'     => $image->hashName(),
                'deskripsi'=> $request->deskripsi
            ]);
        }
        if ($informasi) {
            //redirect dengan pesan sukses
            return redirect()->route('informasiLomba.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('informasiLomba.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $informasi = InformasiLomba::findOrFail($id);
        $informasi->delete();

        if ($informasi) {
            //redirect dengan pesan sukses
            return redirect()->route('informasiLomba.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('informasiLomba.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
