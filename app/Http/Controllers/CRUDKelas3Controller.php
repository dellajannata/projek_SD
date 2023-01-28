<?php

namespace App\Http\Controllers;

use App\Models\Kelas3;
use Illuminate\Http\Request;

class CRUDKelas3Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $kelas3 = Kelas3::orderBy('id', 'asc')->paginate(10);
        return view('kelas3.index', compact('kelas3'));
    }

    public function create()
    {
        return view('kelas3.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mapel'     => 'required',
            'jm_mulai'   => 'required',
            'jm_akhir'   => 'required',
            'hari'   => 'required',
        ]);

        $kelas3 = Kelas3::create([
            'mapel'=> $request->mapel,
            'jm_mulai' => $request->jm_mulai,
            'jm_akhir' => $request->jm_akhir,
            'hari' => $request->hari,
            'guru_id' => $request->guru_id,
            'ket' => $request->ket,
        ]);

        if ($kelas3) {
            //redirect dengan pesan sukses
            return redirect()->route('crudkelas3.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudkelas3.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request,$id)
    {
        //
    }
    public function edit($id)
    {
        $kelas3 = Kelas3::find($id);
        return view('kelas3.edit', compact('kelas3'));
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
        $kelas3 = Kelas3::findOrFail($id);
        $kelas3->update([
            'mapel'=> $request->mapel,
            'jm_mulai' => $request->jm_mulai,
            'jm_akhir' => $request->jm_akhir,
            'hari' => $request->hari,
            'guru_id' => $request->guru_id,
            'ket' => $request->ket,
        ]);
        
        if ($kelas3) {
            //redirect dengan pesan sukses
            return redirect()->route('crudkelas3.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudkelas3.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $kelas3 = Kelas3::findOrFail($id);
        $kelas3->delete();

        if ($kelas3) {
            //redirect dengan pesan sukses
            return redirect()->route('crudkelas3.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudkelas3.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
