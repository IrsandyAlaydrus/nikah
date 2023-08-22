<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Kota';
        $kota = Kota::all();
        return view('kota.index', compact('title', 'kota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Kota';
        return view('kota.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Atribut Wajib Diisi!',
        ];
        $request->validate([
            'nama_kota' => 'required'
        ], $messages);
        Kota::create($request->all());
        return redirect()->route('kota.index')->with('Sukses', 'Berhasil Tambah Kota');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kota $kota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kota = Kota::find($id);
        $title = 'Edit Kota';
        return view('kota.edit', compact('kota', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kota = Kota::findorfail($id);
        $request->validate([
            'nama_kota' => 'required',
        ]);
        $kota->update($request->all());
        return redirect()->route('kota.index')->with('Sukses', 'Berhasil Edit Kota');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kota = Kota::find($id);
        $kota->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Tambah Kota');
    }
}
