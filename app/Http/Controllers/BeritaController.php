<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::all();
        return view('berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $berita = new Berita;
        $berita->judul = $request->judul;
        $berita->tgl = $request->tgl;
        $berita->foto = $request->foto;
        if($request->hasFile('foto')){
            $request->file('foto')->move('img/', $request->file('foto')->getClientOriginalName());
            $berita->foto = $request->file('foto')->getClientOriginalName();
        }
        $berita->save();

        return redirect()->route('berita.index')->with('message', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('berita.edit', ['berita' => $berita]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);
        $berita->judul = $request->judul;
        $berita->tgl = $request->tgl;
        $berita->foto = $request->foto;
        if($request->hasFile('foto')){
            $request->file('foto')->move('img/', $request->file('foto')->getClientOriginalName());
            $berita->foto = $request->file('foto')->getClientOriginalName();
        }
        $berita->save();

        return redirect()->route('berita.index')->with('message', 'Barang berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect()->route('berita.index')->with('delete', 'Barang berhasil dihapus.');
    }
}
