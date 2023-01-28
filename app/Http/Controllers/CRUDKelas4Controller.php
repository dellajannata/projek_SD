<?php

namespace App\Http\Controllers;

use App\Models\Kelas4;
use Illuminate\Http\Request;

class CRUDKelas4Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $kelas4 = Kelas4::orderBy('id', 'asc')->paginate(10);
        return view('kelas4.index', compact('kelas4'));
    }

    public function create()
    {
        return view('kelas4.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mapel'     => 'required',
            'jm_mulai'   => 'required',
            'jm_akhir'   => 'required',
            'hari'   => 'required',
        ]);

        $kelas4 = Kelas4::create([
            'mapel'=> $request->mapel,
            'jm_mulai' => $request->jm_mulai,
            'jm_akhir' => $request->jm_akhir,
            'hari' => $request->hari,
            'guru_id' => $request->guru_id,
            'ket' => $request->ket,
        ]);

        if ($kelas4) {
            //redirect dengan pesan sukses
            return redirect()->route('crudkelas4.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudkelas4.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request,$id)
    {
        //
    }
    public function edit($id)
    {
        $kelas4 = Kelas4::find($id);
        return view('kelas4.edit', compact('kelas4'));
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
        $kelas4 = Kelas4::findOrFail($id);
        $kelas4->update([
            'mapel'=> $request->mapel,
            'jm_mulai' => $request->jm_mulai,
            'jm_akhir' => $request->jm_akhir,
            'hari' => $request->hari,
            'guru_id' => $request->guru_id,
            'ket' => $request->ket,
        ]);
        
        if ($kelas4) {
            //redirect dengan pesan sukses
            return redirect()->route('crudkelas4.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudkelas4.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $kelas4 = Kelas4::findOrFail($id);
        $kelas4->delete();

        if ($kelas4) {
            //redirect dengan pesan sukses
            return redirect()->route('crudkelas4.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudkelas4.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
