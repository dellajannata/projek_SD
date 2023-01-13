<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\saranaPrasarana;

class SaranaPrasaranaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $saranaPrasarana = saranaPrasarana::orderBy('id', 'asc')->paginate(5);
        return view('saranaPrasarana.index', compact('saranaPrasarana'));
    }

    public function create()
    {
        return view('saranaPrasarana.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'namaSarana'     => 'required'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/saranaPrasarana', $image->hashName());

        $saranaPrasarana = saranaPrasarana::create([
            'image' => $image->hashName(),
            'namaSarana' => $request->namaSarana
        ]);

        if ($saranaPrasarana) {
            //redirect dengan pesan sukses
            return redirect()->route('saranaPrasarana.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('saranaPrasarana.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request, $id)
    {
        $saranaPrasarana = saranaPrasarana::where('id', $id)->first();
        return view('saranaPrasarana.detail', compact('saranaPrasarana'));
    }
    public function edit($id)
    {
        $saranaPrasarana = saranaPrasarana::find($id);
        return view('saranaPrasarana.edit', compact('saranaPrasarana'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'namaSarana'     => 'required'
        ]);

        //get data Kegiatan by ID
        $saranaPrasarana = saranaPrasarana::findOrFail($id);

        if ($request->file('image') == "") {

            $saranaPrasarana->update([
                'namaSarana' => $request->namaSarana
            ]);
        } else {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/saranaPrasarana', $image->hashName());

            $saranaPrasarana->update([
                'image'     => $image->hashName(),
                'namaSarana' => $request->namaSarana
            ]);
        }
        if ($saranaPrasarana) {
            //redirect dengan pesan sukses
            return redirect()->route('saranaPrasarana.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('saranaPrasarana.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $saranaPrasarana = saranaPrasarana::findOrFail($id);
        $saranaPrasarana->delete();

        if ($saranaPrasarana) {
            //redirect dengan pesan sukses
            return redirect()->route('saranaPrasarana.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('saranaPrasarana.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
