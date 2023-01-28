<?php

namespace App\Http\Controllers;

use App\Models\Kelas5;
use Illuminate\Http\Request;

class CRUDKelas5Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $kelas5 = Kelas5::orderBy('id', 'asc')->paginate(10);
        return view('kelas5.index', compact('kelas5'));
    }

    public function create()
    {
        return view('kelas5.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mapel'     => 'required',
            'jm_mulai'   => 'required',
            'jm_akhir'   => 'required',
            'hari'   => 'required',
        ]);

        $kelas5 = Kelas5::create([
            'mapel'=> $request->mapel,
            'jm_mulai' => $request->jm_mulai,
            'jm_akhir' => $request->jm_akhir,
            'hari' => $request->hari,
            'guru_id' => $request->guru_id,
            'ket' => $request->ket,
        ]);

        if ($kelas5) {
            //redirect dengan pesan sukses
            return redirect()->route('crudkelas5.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudkelas5.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request,$id)
    {
       //
    }
    public function edit($id)
    {
        $kelas5 = Kelas5::find($id);
        return view('kelas5.edit', compact('kelas5'));
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
        $kelas5 = Kelas5::findOrFail($id);
        $kelas5->update([
            'mapel'=> $request->mapel,
            'jm_mulai' => $request->jm_mulai,
            'jm_akhir' => $request->jm_akhir,
            'hari' => $request->hari,
            'guru_id' => $request->guru_id,
            'ket' => $request->ket,
        ]);
        
        if ($kelas5) {
            //redirect dengan pesan sukses
            return redirect()->route('crudkelas5.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudkelas5.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $kelas5 = Kelas5::findOrFail($id);
        $kelas5->delete();

        if ($kelas5) {
            //redirect dengan pesan sukses
            return redirect()->route('crudkelas5.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudkelas5.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
