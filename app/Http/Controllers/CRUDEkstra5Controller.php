<?php

namespace App\Http\Controllers;

use App\Models\Ekstra5;
use Illuminate\Http\Request;

class CRUDEkstra5Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $ekstra5 = Ekstra5::orderBy('id', 'asc')->paginate(10);
        return view('ekstra5.index', compact('ekstra5'));
    }

    public function create()
    {
        return view('ekstra5.create');
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
        $image->storeAs('public/ekstra5', $image->hashName());

        $ekstra5 = Ekstra5::create([
            'image' => $image->hashName(),
            'nama' => $request->nama,
            'hari' => $request->hari,
            'jam' => $request->jam,
        ]);

        if ($ekstra5) {
            //redirect dengan pesan sukses
            return redirect()->route('crudekstra5.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudekstra5.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request,$id)
    {
        //
    }
    public function edit($id)
    {
        $ekstra5 = Ekstra5::find($id);
        return view('ekstra5.edit', compact('ekstra5'));
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
        $ekstra5 = Ekstra5::findOrFail($id);

        if ($request->file('image') == "") {

            $ekstra5->update([
            'nama' => $request->nama,
            'hari' => $request->hari,
            'jam' => $request->jam,
            ]);
        } else {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/ekstra5', $image->hashName());


        $ekstra5->update([
            'image'=> $image->hashName(),
            'nama' => $request->nama,
            'hari' => $request->hari,
            'jam' => $request->jam,
        ]);
    }
        if ($ekstra5) {
            //redirect dengan pesan sukses
            return redirect()->route('crudekstra5.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudekstra5.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $ekstra5 = Ekstra5::findOrFail($id);
        $ekstra5->delete();

        if ($ekstra5) {
            //redirect dengan pesan sukses
            return redirect()->route('crudekstra5.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudekstra5.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
