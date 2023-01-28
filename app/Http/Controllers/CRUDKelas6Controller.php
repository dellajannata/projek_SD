<?php

namespace App\Http\Controllers;

use App\Models\Kelas6;
use Illuminate\Http\Request;

class CRUDKelas6Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $kelas6 = Kelas6::orderBy('id', 'asc')->paginate(10);
        return view('kelas6.index', compact('kelas6'));
    }

    public function create()
    {
        return view('kelas6.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mapel'     => 'required',
            'jm_mulai'   => 'required',
            'jm_akhir'   => 'required',
            'hari'   => 'required',
        ]);

        $kelas6 = Kelas6::create([
            'mapel'=> $request->mapel,
            'jm_mulai' => $request->jm_mulai,
            'jm_akhir' => $request->jm_akhir,
            'hari' => $request->hari,
            'guru_id' => $request->guru_id,
            'ket' => $request->ket,
        ]);

        if ($kelas6) {
            //redirect dengan pesan sukses
            return redirect()->route('crudkelas6.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudkelas6.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request,$id)
    {
     //
    }
    public function edit($id)
    {
        $kelas6 = Kelas6::find($id);
        return view('kelas6.edit', compact('kelas6'));
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
        $kelas6 = Kelas6::findOrFail($id);
        $kelas6->update([
            'mapel'=> $request->mapel,
            'jm_mulai' => $request->jm_mulai,
            'jm_akhir' => $request->jm_akhir,
            'hari' => $request->hari,
            'guru_id' => $request->guru_id,
            'ket' => $request->ket,
        ]);
        
        if ($kelas6) {
            //redirect dengan pesan sukses
            return redirect()->route('crudkelas6.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudkelas6.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $kelas6 = Kelas6::findOrFail($id);
        $kelas6->delete();

        if ($kelas6) {
            //redirect dengan pesan sukses
            return redirect()->route('crudkelas6.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudkelas6.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
