<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CRUDGuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $guru = Guru::orderBy('id', 'asc')->paginate(5);
        return view('guru.index', compact('guru'));
    }

    public function create()
    {
        return view('guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'nik'     => 'required|numeric',
            'nama'   => 'required',
            'jk'   => 'required',
            'tglLahir'   => 'required',
            'nuptk'   => 'required|numeric',
            'nip'   => 'required|numeric',
            'gol'   => 'required',
            'status'   => 'required',
            'jenisPTK'   => 'required',
            'pendidikanTerakhir'   => 'required',
            'jurusan'   => 'required',
            'tmt_gtk'   => 'required',
            'tmt_gtk_induk'   => 'required'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/guru', $image->hashName());
        
        $guru = Guru::create([
            'image' => $image->hashName(),
            'nik' => $request->nik,
            'nama'=> $request->nama,
            'jk' => $request->jk,
            'tglLahir' => $request->tglLahir,
            'nuptk' => $request->nuptk,
            'nip' => $request->nip,
            'gol' => $request->gol,
            'status' => $request->status,
            'jenisPTK'  => $request->jenisPTK,
            'pendidikanTerakhir' => $request->pendidikanTerakhir,
            'jurusan'=> $request->jurusan,
            'tmt_gtk' => $request->tmt_gtk,
            'tmt_gtk_induk'=> $request->tmt_gtk_induk
        ]);

        if ($guru) {
            //redirect dengan pesan sukses
            return redirect()->route('crudguru.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudguru.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request,$id)
    {
        $guru = Guru::where('id', $id)->first();
        return view('guru.detail', compact('guru'));
    }
    public function edit($id)
    {
        $guru = Guru::find($id);
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nik'     => 'required|numeric',
            'nama'   => 'required',
            'jk'   => 'required',
            'tglLahir'   => 'required',
            'nuptk'   => 'required|numeric',
            'nip'   => 'required|numeric',
            'gol'   => 'required',
            'status'   => 'required',
            'jenisPTK'   => 'required',
            'pendidikanTerakhir'   => 'required',
            'jurusan'   => 'required',
            'tmt_gtk'   => 'required',
            'tmt_gtk_induk'   => 'required'
        ]);

        //get data Guru by ID
        $guru = Guru::findOrFail($id);

        if ($request->file('image') == "") {

            $guru->update([
                'nik'     => $request->nik,
                'nama'   => $request->nama,
                'jk'   => $request->jk,
                'tglLahir'   => $request->tglLahir,
                'nuptk'   => $request->nuptk,
                'nip'   => $request->nip,
                'gol'   => $request->gol,
                'status'   => $request->status,
                'jenisPTK'   => $request->jenisPTK,
                'pendidikanTerakhir'   => $request->pendidikanTerakhir,
                'jurusan'   => $request->jurusan,
                'tmt_gtk'   => $request->tmt_gtk,
                'tmt_gtk_induk'   => $request->tmt_gtk_induk
            ]);
        } else {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/guru', $image->hashName());

            $guru->update([
                'image'     => $image->hashName(),
                'nik'     => $request->nik,
                'nama'   => $request->nama,
                'jk'   => $request->jk,
                'tglLahir'   => $request->tglLahir,
                'nuptk'   => $request->nuptk,
                'nip'   => $request->nip,
                'gol'   => $request->gol,
                'status'   => $request->status,
                'jenisPTK'   => $request->jenisPTK,
                'pendidikanTerakhir'   => $request->pendidikanTerakhir,
                'jurusan'   => $request->jurusan,
                'tmt_gtk'   => $request->tmt_gtk,
                'tmt_gtk_induk'   => $request->tmt_gtk_induk,
            ]);
        }
        if ($guru) {
            //redirect dengan pesan sukses
            return redirect()->route('crudguru.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudguru.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();

        if ($guru) {
            //redirect dengan pesan sukses
            return redirect()->route('crudguru.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('crudguru.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
