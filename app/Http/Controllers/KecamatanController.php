<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kota;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kecamatan = DB::table('kecamatan')
        ->join('kota', 'kecamatan.id_kota', 'kota.id_kota')
        ->get();
        $title = 'Data Kecamatan';
        return view('kecamatan.index', compact('title', 'kecamatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kota = Kota::all();
        $title = 'Tambah Kecamatan';
        return view('kecamatan.create', compact('title', 'kota'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_kota' => 'required',
            'nama_kecamatan' => 'required',
        ]);
        Kecamatan::create($request->all());
        return redirect()->route('kecamatan.index')->with('Sukses', 'Berhasil Tambah Kecamatan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kecamatan $kecamatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kecamatan = Kecamatan::find($id);
        $kota = Kota::all();
        $title = 'Edit Kecamatan';
        return view('kecamatan.edit', compact('title', 'kota', 'kecamatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_kota' => 'required',
            'nama_kecamatan' => 'required',
        ]);
        $kecamatan = Kecamatan::findorfail($id);
        $kecamatan->update($request->all());
        return redirect()->route('kecamatan.index')->with('Sukses', 'Berhasil Edit Kecamatan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kecamatan = Kecamatan::find($id);
        $kecamatan->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Kecamatan');
    }
}
