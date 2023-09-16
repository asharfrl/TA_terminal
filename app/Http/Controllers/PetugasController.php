<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = User::all();
        // $petugas = Petugas::all();
        return view('kelolapetugas.index', compact('petugas'));

        // $petugasData = User::where('level', 'Masyarakat')->get();
        // return view('dashboard.petugas.index', compact('petugasData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelolapetugas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $petugas = new User;
        $petugas->username = $request->username;
        $petugas->email = $request->email;
        $petugas->password = Hash::make($request->password);
        $petugas->name = $request->name;
        $petugas->level = $request->level;
        $petugas->save();
        return redirect()->route('dataPetugas.index')->with('message', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function show($petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $petugas = User::find($id);
        return view('kelolapetugas.edit', ['petugas' => $petugas]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $petugas = User::find($id);
        $petugas->username = $request->username;
        $petugas->email = $request->email;
        $petugas->password = Hash::make($request->password);
        $petugas->name = $request->name;
        $petugas->level = $request->level;
        $petugas->save();

        return redirect('/dataPetugas')->with('message', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $petugas = User::find($id);
        $petugas->delete();

        return redirect('/dataPetugas')->with('delete', 'Data berhasil dihapus!');
    }
}
