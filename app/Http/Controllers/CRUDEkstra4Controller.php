<?php

namespace App\Http\Controllers;

use App\Models\Ekstra4;
use Illuminate\Http\Request;

class CRUDEkstra4Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $ekstra4 = Ekstra4::orderBy('id', 'asc')->paginate(10);
        return view('ekstra4.index', compact('ekstra4'));
    }

    public function create()
    {
        return view('ekstra4.create');
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
        $image->storeAs('public/ekstra4', $image->hashName());

        $ekstra4 = Ekstra4::create([
            'image' => $image->hashName(),
            'nama' => $request->nama,
            'hari' => $request->hari,
            'jam' => $request->jam,
        ]);

        if ($ekstra4) {
            //redirect dengan pesan sukses
            return redirect()->route('crudekstra4.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudekstra4.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request,$id)
    {
        //
    }
    public function edit($id)
    {
        $ekstra4 = Ekstra4::find($id);
        return view('ekstra4.edit', compact('ekstra4'));
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
        $ekstra4 = Ekstra4::findOrFail($id);

        if ($request->file('image') == "") {

            $ekstra4->update([
            'nama' => $request->nama,
            'hari' => $request->hari,
            'jam' => $request->jam,
            ]);
        } else {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/ekstra4', $image->hashName());


        $ekstra4->update([
            'image'=> $image->hashName(),
            'nama' => $request->nama,
            'hari' => $request->hari,
            'jam' => $request->jam,
        ]);
    }
        if ($ekstra4) {
            //redirect dengan pesan sukses
            return redirect()->route('crudekstra4.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudekstra4.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $ekstra4 = Ekstra4::findOrFail($id);
        $ekstra4->delete();

        if ($ekstra4) {
            //redirect dengan pesan sukses
            return redirect()->route('crudekstra4.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudekstra4.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
