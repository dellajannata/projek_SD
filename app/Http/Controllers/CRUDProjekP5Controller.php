<?php

namespace App\Http\Controllers;

use App\Models\projekP5;

use Illuminate\Http\Request;

class CRUDProjekP5Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $projekP5 = projekP5::orderBy('id', 'asc')->paginate(5);
        return view('projekP5.index', compact('projekP5'));
    }

    public function create()
    {
        return view('projekP5.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'namaKegiatan'     => 'required',
            'deskripsi'   => 'required',
            'tanggal'     => 'required',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/projekP5', $image->hashName());

        $projekP5 = projekP5::create([
            'image' => $image->hashName(),
            'namaKegiatan' => $request->namaKegiatan,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
        ]);

        if ($projekP5) {
            //redirect dengan pesan sukses
            return redirect()->route('projekP5.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('projekP5.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request, $id)
    {
        $projekP5 = projekP5::where('id', $id)->first();
        return view('projekP5.detail', compact('projekP5'));
    }
    public function edit($id)
    {
        $projekP5 = projekP5::find($id);
        return view('projekP5.edit', compact('projekP5'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'namaKegiatan'     => 'required',
            'deskripsi'   => 'required',
            'tanggal'     => 'required',
        ]);

        //get data Kegiatan by ID
        $projekP5 = projekP5::findOrFail($id);

        if ($request->file('image') == "") {

            $projekP5->update([
                'namaKegiatan' => $request->namaKegiatan,
                'deskripsi' => $request->deskripsi,
                'tanggal'     => $request->tanggal,
            ]);
        } else {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/projekP5', $image->hashName());

            $projekP5->update([
                'image'     => $image->hashName(),
                'namaKegiatan' => $request->namaKegiatan,
                'deskripsi' => $request->deskripsi,
                'tanggal'     => $request->tanggal,
            ]);
        }
        if ($projekP5) {
            //redirect dengan pesan sukses
            return redirect()->route('projekP5.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('projekP5.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $projekP5 = projekP5::findOrFail($id);
        $projekP5->delete();

        if ($projekP5) {
            //redirect dengan pesan sukses
            return redirect()->route('projekP5.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('projekP5.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
