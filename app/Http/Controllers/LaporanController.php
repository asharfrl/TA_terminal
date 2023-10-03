<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laporan = Laporan::latest()->paginate(5);
        return view('kelolalaporan.index', compact('laporan'));
    }

    public function layanan()
    {
        $title = "LAPORAN PELAYANAN";
        return view('laporan.index', compact('title'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $laporan = new Laporan;
        $laporan->nama_pelapor = $request->nama_pelapor;
        $laporan->kontak = $request->kontak;
        $laporan->tipe = $request->tipe;
        $laporan->pesan = $request->pesan;
        $laporan->save();
        return redirect()->back()->with('success', 'Laporan Anda Telah Masuk!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
