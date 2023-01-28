<?php

namespace App\Http\Controllers;

use App\Models\Ekstra1;
use Illuminate\Http\Request;

class CRUDEkstra1Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $ekstra1 = Ekstra1::orderBy('id', 'asc')->paginate(10);
        return view('ekstra1.index', compact('ekstra1'));
    }

    public function create()
    {
        return view('ekstra1.create');
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
        $image->storeAs('public/Ekstra1', $image->hashName());

        $ekstra1 = Ekstra1::create([
            'image' => $image->hashName(),
            'nama' => $request->nama,
            'hari' => $request->hari,
            'jam' => $request->jam,
        ]);

        if ($ekstra1) {
            //redirect dengan pesan sukses
            return redirect()->route('crudekstra1.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudekstra1.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request,$id)
    {
        //
    }
    public function edit($id)
    {
        $ekstra1 = Ekstra1::find($id);
        return view('ekstra1.edit', compact('ekstra1'));
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
        $ekstra1 = Ekstra1::findOrFail($id);

        if ($request->file('image') == "") {

            $ekstra1->update([
            'nama' => $request->nama,
            'hari' => $request->hari,
            'jam' => $request->jam,
            ]);
        } else {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/Ekstra1', $image->hashName());


        $ekstra1->update([
            'image'=> $image->hashName(),
            'nama' => $request->nama,
            'hari' => $request->hari,
            'jam' => $request->jam,
        ]);
    }
        if ($ekstra1) {
            //redirect dengan pesan sukses
            return redirect()->route('crudekstra1.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudekstra1.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $ekstra1 = Ekstra1::findOrFail($id);
        $ekstra1->delete();

        if ($ekstra1) {
            //redirect dengan pesan sukses
            return redirect()->route('crudekstra1.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudekstra1.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
