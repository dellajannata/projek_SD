<?php

namespace App\Http\Controllers;

use App\Models\Ekstra6;
use Illuminate\Http\Request;

class CRUDEkstra6Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $ekstra6 = Ekstra6::orderBy('id', 'asc')->paginate(10);
        return view('ekstra6.index', compact('ekstra6'));
    }

    public function create()
    {
        return view('ekstra6.create');
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
        $image->storeAs('public/ekstra6', $image->hashName());

        $ekstra6 = Ekstra6::create([
            'image' => $image->hashName(),
            'nama' => $request->nama,
            'hari' => $request->hari,
            'jam' => $request->jam,
        ]);

        if ($ekstra6) {
            //redirect dengan pesan sukses
            return redirect()->route('crudekstra6.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudekstra6.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request,$id)
    {
        //
    }
    public function edit($id)
    {
        $ekstra6 = Ekstra6::find($id);
        return view('ekstra6.edit', compact('ekstra6'));
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
        $ekstra6 = Ekstra6::findOrFail($id);

        if ($request->file('image') == "") {

            $ekstra6->update([
            'nama' => $request->nama,
            'hari' => $request->hari,
            'jam' => $request->jam,
            ]);
        } else {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/ekstra6', $image->hashName());


        $ekstra6->update([
            'image'=> $image->hashName(),
            'nama' => $request->nama,
            'hari' => $request->hari,
            'jam' => $request->jam,
        ]);
    }
        if ($ekstra6) {
            //redirect dengan pesan sukses
            return redirect()->route('crudekstra6.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudekstra6.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $ekstra6 = Ekstra6::findOrFail($id);
        $ekstra6->delete();

        if ($ekstra6) {
            //redirect dengan pesan sukses
            return redirect()->route('crudekstra6.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudekstra6.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
