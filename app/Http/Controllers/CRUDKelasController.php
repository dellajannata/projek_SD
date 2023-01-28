<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class CRUDKelasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $kelas = Kelas::orderBy('id', 'asc')->paginate(10);
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mapel'     => 'required',
            'jm_mulai'   => 'required',
            'jm_akhir'   => 'required',
            'hari'   => 'required',
        ]);

        $kelas = Kelas::create([
            'mapel'=> $request->mapel,
            'jm_mulai' => $request->jm_mulai,
            'jm_akhir' => $request->jm_akhir,
            'hari' => $request->hari,
            'guru_id' => $request->guru_id,
            'ket' => $request->ket,
        ]);

        if ($kelas) {
            //redirect dengan pesan sukses
            return redirect()->route('crudkelas1.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudkelas1.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request,$id)
    {
        //
    }
    public function edit($id)
    {
        $kelas = Kelas::find($id);
        return view('kelas.edit', compact('kelas'));
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
        $kelas = Kelas::findOrFail($id);
        $kelas->update([
            'mapel'=> $request->mapel,
            'jm_mulai' => $request->jm_mulai,
            'jm_akhir' => $request->jm_akhir,
            'hari' => $request->hari,
            'guru_id' => $request->guru_id,
            'ket' => $request->ket,
        ]);
        
        if ($kelas) {
            //redirect dengan pesan sukses
            return redirect()->route('crudkelas1.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudkelas1.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        if ($kelas) {
            //redirect dengan pesan sukses
            return redirect()->route('crudkelas1.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudkelas1.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
