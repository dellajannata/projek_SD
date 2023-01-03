<?php

namespace App\Http\Controllers;

use App\Models\Tentangkami;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tentangkami = Tentangkami::paginate(3);
        return view('tentang.index')
            ->with('title', 'Tentang Kami')
            ->with('tentangkami', $tentangkami);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tentang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
        ]);

        $gambar = $request->file('gambar')->store('images','public');

        Tentangkami::create([
            'id' => $request->id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
        ]);

        return redirect()->route('tentang.index')
            ->with('success', 'Tentang Kami Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Menampilkan detail data dengan menemukan/berdasarkan ID Tentang Kami
        $tentangkami = Tentangkami::find($id);
        return view('tentang.detail', compact('tentangkami'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tentangkami = Tentangkami::find($id);
        return view('tentang.edit', compact('tentangkami'));
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
        $tentangkami = Tentangkami::findOrFail($id);
        
        //melakukan validasi data
        $request->validate([
            'id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
        ]);

        $gambar = $request->file('gambar')->store('images','public');

        $tentangkami->update([
            'id' => $request->id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
        ]);
        $tentangkami->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('tentang.index')
            ->with('success', 'Tentang Kami Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data 
        Tentangkami::find($id)->delete();
        return redirect()->route('tentang.index')
            ->with('success', 'Tentang Kami Berhasil Dihapus');
    }
}