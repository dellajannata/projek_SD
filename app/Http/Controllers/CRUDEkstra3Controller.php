<?php

namespace App\Http\Controllers;

use App\Models\Ekstra3;
use Illuminate\Http\Request;

class CRUDEkstra3Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $ekstra3 = Ekstra3::orderBy('id', 'asc')->paginate(10);
        return view('ekstra3.index', compact('ekstra3'));
    }

    public function create()
    {
        return view('ekstra3.create');
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
        $image->storeAs('public/ekstra3', $image->hashName());

        $ekstra3 = Ekstra3::create([
            'image' => $image->hashName(),
            'nama' => $request->nama,
            'hari' => $request->hari,
            'jam' => $request->jam,
        ]);

        if ($ekstra3) {
            //redirect dengan pesan sukses
            return redirect()->route('crudekstra3.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudekstra3.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request,$id)
    {
        //
    }
    public function edit($id)
    {
        $ekstra3 = Ekstra3::find($id);
        return view('ekstra3.edit', compact('ekstra3'));
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
        $ekstra3 = Ekstra3::findOrFail($id);

        if ($request->file('image') == "") {

            $ekstra3->update([
                'nama' => $request->nama,
            'hari' => $request->hari,
            'jam' => $request->jam,
            ]);
        } else {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/ekstra3', $image->hashName());


        $ekstra3->update([
            'image'=> $image->hashName(),
            'nama' => $request->nama,
            'hari' => $request->hari,
            'jam' => $request->jam,
        ]);
    }
        if ($ekstra3) {
            //redirect dengan pesan sukses
            return redirect()->route('crudekstra3.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudekstra3.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $ekstra3 = Ekstra3::findOrFail($id);
        $ekstra3->delete();

        if ($ekstra3) {
            //redirect dengan pesan sukses
            return redirect()->route('crudekstra3.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudekstra3.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
