<?php

namespace App\Http\Controllers;

use App\Models\visimisi;

use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $visimisi = visimisi::orderBy('id', 'asc')->paginate(5);
        return view('visimisi.index', compact('visimisi'));
    }

    public function create()
    {
        return view('visimisi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'     => 'required',
            'deskripsi'   => 'required'
        ]);

        $visimisi = visimisi::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        if ($visimisi) {
            //redirect dengan pesan sukses
            return redirect()->route('visimisi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('visimisi.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request, $id)
    {
        $visimisi = visimisi::where('id', $id)->first();
        return view('visimisi.detail', compact('visimisi'));
    }
    public function edit($id)
    {
        $visimisi = visimisi::find($id);
        return view('visimisi.edit', compact('visimisi'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'deskripsi'   => 'required'
        ]);

        //get data visimisi by ID
        $visimisi = visimisi::findOrFail($id);

        $visimisi->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        if ($visimisi) {
            //redirect dengan pesan sukses
            return redirect()->route('visimisi.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('visimisi.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $visimisi = visimisi::findOrFail($id);
        $visimisi->delete();

        if ($visimisi) {
            //redirect dengan pesan sukses
            return redirect()->route('visimisi.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('visimisi.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
