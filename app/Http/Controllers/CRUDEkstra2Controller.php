<?php

namespace App\Http\Controllers;

use App\Models\Ekstra2;
use Illuminate\Http\Request;

class CRUDEkstra2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $ekstra2 = Ekstra2::orderBy('id', 'asc')->paginate(10);
        return view('ekstra2.index', compact('ekstra2'));
    }

    public function create()
    {
        return view('ekstra2.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image'  => 'required',
            'nama'   => 'required',
            'hari'   => 'required',
            'jam'   => 'required',
        ]);
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/ekstra2', $image->hashName());

        $ekstra2 = Ekstra2::create([
            'image' => $image->hashName(),
            'nama' => $request->nama,
            'hari' => $request->hari,
            'jam' => $request->jam,
        ]);

        if ($ekstra2) {
            //redirect dengan pesan sukses
            return redirect()->route('crudekstra2.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudekstra2.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request,$id)
    {
        //
    }
    public function edit($id)
    {
        $ekstra2 = Ekstra2::find($id);
        return view('ekstra2.edit', compact('ekstra2'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image'  => 'required',
            'nama'   => 'required',
            'hari'   => 'required',
            'jam'   => 'required',
        ]);

        //get data Ekstra by ID
        $ekstra2 = Ekstra2::findOrFail($id);

        if ($request->file('image') == "") {

            $ekstra2->update([
                'nama' => $request->nama,
            'hari' => $request->hari,
            'jam' => $request->jam,
            ]);
        } else {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/ekstra2', $image->hashName());


        $ekstra2->update([
            'image'=> $image->hashName(),
            'nama' => $request->nama,
            'hari' => $request->hari,
            'jam' => $request->jam,
        ]);
    }
        if ($ekstra2) {
            //redirect dengan pesan sukses
            return redirect()->route('crudekstra2.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudekstra2.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $ekstra2 = Ekstra2::findOrFail($id);
        $ekstra2->delete();

        if ($ekstra2) {
            //redirect dengan pesan sukses
            return redirect()->route('crudekstra2.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudekstra2.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
