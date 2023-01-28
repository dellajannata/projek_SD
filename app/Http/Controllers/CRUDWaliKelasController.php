<?php

namespace App\Http\Controllers;

use App\Models\WaliKelas;
use App\Models\Guru;
use Illuminate\Http\Request;

class CRUDWaliKelasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {

        $wk = WaliKelas::orderBy('id', 'asc')->paginate(5);
        return view('waliKelas.index', compact('wk'));
    }
    public function create()
    {
        $nama= Guru::all();
        return view('waliKelas.create',['nama'=>$nama]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'guru_id'     => 'required',
            'kelas'   => 'required',
        ]);

        $wk = WaliKelas::create([
            'guru_id'=> $request->guru_id,
            'kelas' => $request->kelas,
            'jmlh_siswa_lk' => $request->jmlh_siswa_lk,
            'jmlh_siswa_pr' => $request->jmlh_siswa_pr,

        ]);

        if ($wk) {
            //redirect dengan pesan sukses
            return redirect()->route('crudwalikelas.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudwalikelas.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    public function show($id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wk = WaliKelas::find($id);
        $nama = Guru::all();
        return view('waliKelas.edit', compact('wk','nama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'guru_id'     => 'required',
            'kelas'   => 'required',
        ]);

        //get data kelas by ID
        $wk = WaliKelas::with('guru')->where('id', $id)->first();
        $wk->update([
            'guru_id'=> $request->guru_id,
            'kelas' => $request->kelas,
            'jmlh_siswa_lk' => $request->jmlh_siswa_lk,
            'jmlh_siswa_pr' => $request->jmlh_siswa_pr,

        ]);
        
        if ($wk) {
            //redirect dengan pesan sukses
            return redirect()->route('crudwalikelas.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudwalikelas.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $wk = WaliKelas::findOrFail($id);
        $wk->delete();

        if ($wk) {
            //redirect dengan pesan sukses
            return redirect()->route('crudwalikelas.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudwalikelas.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
