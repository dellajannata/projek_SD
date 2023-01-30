<?php

namespace App\Http\Controllers;
use App\Models\InformasiLink;
use Illuminate\Http\Request;

class CRUDInformasiLinkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $InformasiLink = InformasiLink::orderBy('id', 'asc')->paginate(5);
        return view('InformasiLink.index', compact('InformasiLink'));
    }

    public function create()
    {
        return view('InformasiLink.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'     => 'required',
            'keterangan'   => 'required'
        ]);

        $InformasiLink = InformasiLink::create([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan
        ]);

        if ($InformasiLink) {
            //redirect dengan pesan sukses
            return redirect()->route('InformasiLink.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('InformasiLink.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Request $request, $id)
    {
        $InformasiLink = InformasiLink::where('id', $id)->first();
        return view('InformasiLink.detail', compact('InformasiLink'));
    }
    public function edit($id)
    {
        $InformasiLink = InformasiLink::find($id);
        return view('InformasiLink.edit', compact('InformasiLink'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'keterangan'   => 'required'
        ]);

        //get data visimisi by ID
        $InformasiLink = InformasiLink::findOrFail($id);

        $InformasiLink->update([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan
        ]);

        if ($InformasiLink) {
            //redirect dengan pesan sukses
            return redirect()->route('InformasiLink.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('InformasiLink.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $InformasiLink = InformasiLink::findOrFail($id);
        $InformasiLink->delete();

        if ($InformasiLink) {
            //redirect dengan pesan sukses
            return redirect()->route('InformasiLink.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('InformasiLink.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
