<?php

namespace App\Http\Controllers;

use App\Models\Kelas2;
use Illuminate\Http\Request;

class CRUDKelas2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $kelas2 = Kelas2::orderBy('id', 'asc')->paginate(10);
        return view('kelas2.index', compact('kelas2'));
    }

    public function create()
    {
        return view('kelas2.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mapel'     => 'required',
            'jm_mulai'   => 'required',
            'jm_akhir'   => 'required',
            'hari'   => 'required',
        ]);

        $kelas2 = Kelas2::create([
            'mapel'=> $request->mapel,
            'jm_mulai' => $request->jm_mulai,
            'jm_akhir' => $request->jm_akhir,
            'hari' => $request->hari,
            'guru_id' => $request->guru_id,
            'ket' => $request->ket,
        ]);

        if ($kelas2) {
            //redirect dengan pesan sukses
            return redirect()->route('crudkelas2.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudkelas2.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request,$id)
    {
        //
    }
    public function edit($id)
    {
        $kelas2 = Kelas2::find($id);
        return view('kelas2.edit', compact('kelas2'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'mapel'     => 'required',
            'jm_mulai'   => 'required',
            'jm_akhir'   => 'required',
            'hari'   => 'required',
        ]);

        //get data kelas by ID
        $kelas2 = Kelas2::findOrFail($id);
        $kelas2->update([
            'mapel'=> $request->mapel,
            'jm_mulai' => $request->jm_mulai,
            'jm_akhir' => $request->jm_akhir,
            'hari' => $request->hari,
            'guru_id' => $request->guru_id,
            'ket' => $request->ket,
        ]);
        
        if ($kelas2) {
            //redirect dengan pesan sukses
            return redirect()->route('crudkelas2.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudkelas2.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $kelas2 = Kelas2::findOrFail($id);
        $kelas2->delete();

        if ($kelas2) {
            //redirect dengan pesan sukses
            return redirect()->route('crudkelas2.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudkelas2.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
