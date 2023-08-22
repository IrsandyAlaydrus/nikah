<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Nikah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Kecamatan;
class NikahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Nikah';
        $nikah = DB::table('nikah')
        ->join('users', 'nikah.id_user', 'users.id')
        ->orderByDesc('nikah.id_nikah')
        ->get();
        return view('nikah.index', compact('title', 'nikah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Data Nikah';
        $kota = DB::table('kota')->orderBy('nama_kota')->get();
        $kecamatan = DB::table('kecamatan')->orderBy('nama_kecamatan')->get();
        return view('nikah.create', compact('title', 'kota', 'kecamatan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Atribut Wajib Diisi'
        ];
        $request->validate([
            'id_kota' => 'required',
            'id_kecamatan' => 'required',
            'lokasi_nikah' => 'required',
            'tanggal_nikah' => 'required',
            'alamat_nikah' => 'required',
            'nama_suami_nikah' => 'required',
            'nik_suami_nikah' => 'required',
            'tempat_lahir_suami_nikah' => 'required',
            'tanggal_lahir_suami_nikah' => 'required',
            'status_suami_nikah' => 'required',
            'agama_suami_nikah' => 'required',
            'pendidikan_suami_nikah' => 'required',
            'pekerjaan_suami_nikah' => 'required',
            'no_hp_suami_nikah' => 'required',
            'email_suami_nikah' => 'required',
            'alamat_suami_nikah' => 'required',
            'foto_suami_nikah' => 'required',
            'nama_ayah_suami_nikah' => 'required',
            'nik_ayah_suami_nikah' => 'required',
            'tempat_lahir_ayah_suami_nikah' => 'required',
            'tanggal_lahir_ayah_suami_nikah' => 'required',
            'agama_ayah_suami_nikah' => 'required',
            'alamat_ayah_suami_nikah' => 'required',
            'nama_ibu_suami_nikah' => 'required',
            'nik_ibu_suami_nikah' => 'required',
            'tempat_lahir_ibu_suami_nikah' => 'required',
            'tanggal_lahir_ibu_suami_nikah' => 'required',
            'agama_ibu_suami_nikah' => 'required',
            'alamat_ibu_suami_nikah' => 'required',
            'nama_istri_nikah' => 'required',
            'nik_istri_nikah' => 'required',
            'tempat_lahir_istri_nikah' => 'required',
            'tanggal_lahir_istri_nikah' => 'required',
            'status_istri_nikah' => 'required',
            'agama_istri_nikah' => 'required',
            'pendidikan_istri_nikah' => 'required',
            'pekerjaan_istri_nikah' => 'required',
            'no_hp_istri_nikah' => 'required',
            'email_istri_nikah' => 'required',
            'alamat_istri_nikah' => 'required',
            'foto_istri_nikah' => 'required',
            'nama_ayah_istri_nikah' => 'required',
            'nik_ayah_istri_nikah' => 'required',
            'tempat_lahir_ayah_istri_nikah' => 'required',
            'tanggal_lahir_ayah_istri_nikah' => 'required',
            'agama_ayah_istri_nikah' => 'required',
            'alamat_ayah_istri_nikah' => 'required',
            'nama_ibu_istri_nikah' => 'required',
            'nik_ibu_istri_nikah' => 'required',
            'tempat_lahir_ibu_istri_nikah' => 'required',
            'tanggal_lahir_ibu_istri_nikah' => 'required',
            'agama_ibu_istri_nikah' => 'required',
            'alamat_ibu_istri_nikah' => 'required',
        ], $messages);

        $foto_suami_nikah = $request->file('foto_suami_nikah');
        $namafotosuami_nikah = 'Nikah'.date('Ymdhis').'.'.$request->file('foto_suami_nikah')->getClientOriginalExtension();
        $foto_suami_nikah->move('file/nikah/',$namafotosuami_nikah);

        $foto_istri_nikah = $request->file('foto_istri_nikah');
        $namafotoistri_nikah = 'Nikah'.date('Ymdhis').'.'.$request->file('foto_istri_nikah')->getClientOriginalExtension();
        $foto_istri_nikah->move('file/nikah/',$namafotoistri_nikah);

        $randomNumber = random_int(10000, 99999);

        $data = new Nikah();
        $data->id_user = Auth::user()->id; 
        $data->id_kota = $request->id_kota; 
        $data->id_kecamatan = $request->id_kecamatan; 
        $data->lokasi_nikah = $request->lokasi_nikah; 
        $data->tanggal_nikah = $request->tanggal_nikah; 
        $data->alamat_nikah = $request->alamat_nikah; 
        $data->nama_suami_nikah = $request->nama_suami_nikah; 
        $data->nik_suami_nikah = $request->nik_suami_nikah; 
        $data->tempat_lahir_suami_nikah = $request->tempat_lahir_suami_nikah; 
        $data->tanggal_lahir_suami_nikah = $request->tanggal_lahir_suami_nikah; 
        $data->status_suami_nikah = $request->status_suami_nikah; 
        $data->agama_suami_nikah = $request->agama_suami_nikah; 
        $data->pendidikan_suami_nikah = $request->pendidikan_suami_nikah; 
        $data->pekerjaan_suami_nikah = $request->pekerjaan_suami_nikah; 
        $data->no_hp_suami_nikah = $request->no_hp_suami_nikah; 
        $data->email_suami_nikah = $request->email_suami_nikah; 
        $data->alamat_suami_nikah = $request->alamat_suami_nikah; 
        $data->foto_suami_nikah = $namafotosuami_nikah; 
        $data->nama_ayah_suami_nikah = $request->nama_ayah_suami_nikah; 
        $data->nik_ayah_suami_nikah = $request->nik_ayah_suami_nikah; 
        $data->tempat_lahir_ayah_suami_nikah = $request->tempat_lahir_ayah_suami_nikah; 
        $data->tanggal_lahir_ayah_suami_nikah = $request->tanggal_lahir_ayah_suami_nikah; 
        $data->agama_ayah_suami_nikah = $request->agama_ayah_suami_nikah; 
        $data->alamat_ayah_suami_nikah = $request->alamat_ayah_suami_nikah; 
        $data->nama_ibu_suami_nikah = $request->nama_ibu_suami_nikah; 
        $data->nik_ibu_suami_nikah = $request->nik_ibu_suami_nikah; 
        $data->tempat_lahir_ibu_suami_nikah = $request->tempat_lahir_ibu_suami_nikah; 
        $data->tanggal_lahir_ibu_suami_nikah = $request->tanggal_lahir_ibu_suami_nikah; 
        $data->agama_ibu_suami_nikah = $request->agama_ibu_suami_nikah; 
        $data->alamat_ibu_suami_nikah = $request->alamat_ibu_suami_nikah; 
        $data->nama_istri_nikah = $request->nama_istri_nikah; 
        $data->nik_istri_nikah = $request->nik_istri_nikah; 
        $data->tempat_lahir_istri_nikah = $request->tempat_lahir_istri_nikah; 
        $data->tanggal_lahir_istri_nikah = $request->tanggal_lahir_istri_nikah; 
        $data->status_istri_nikah = $request->status_istri_nikah; 
        $data->agama_istri_nikah = $request->agama_istri_nikah; 
        $data->pendidikan_istri_nikah = $request->pendidikan_istri_nikah; 
        $data->pekerjaan_istri_nikah = $request->pekerjaan_istri_nikah; 
        $data->no_hp_istri_nikah = $request->no_hp_istri_nikah; 
        $data->email_istri_nikah = $request->email_istri_nikah; 
        $data->alamat_istri_nikah = $request->alamat_istri_nikah; 
        $data->foto_istri_nikah = $namafotoistri_nikah; 
        $data->nama_ayah_istri_nikah = $request->nama_ayah_istri_nikah; 
        $data->nik_ayah_istri_nikah = $request->nik_ayah_istri_nikah; 
        $data->tempat_lahir_ayah_istri_nikah = $request->tempat_lahir_ayah_istri_nikah; 
        $data->tanggal_lahir_ayah_istri_nikah = $request->tanggal_lahir_ayah_istri_nikah; 
        $data->agama_ayah_istri_nikah = $request->agama_ayah_istri_nikah; 
        $data->alamat_ayah_istri_nikah = $request->alamat_ayah_istri_nikah; 
        $data->nama_ibu_istri_nikah = $request->nama_ibu_istri_nikah; 
        $data->nik_ibu_istri_nikah = $request->nik_ibu_istri_nikah; 
        $data->tempat_lahir_ibu_istri_nikah = $request->tempat_lahir_ibu_istri_nikah; 
        $data->tanggal_lahir_ibu_istri_nikah = $request->tanggal_lahir_ibu_istri_nikah; 
        $data->agama_ibu_istri_nikah = $request->agama_ibu_istri_nikah; 
        $data->alamat_ibu_istri_nikah = $request->alamat_ibu_istri_nikah; 
        $data->kode_nikah = $randomNumber;
        $data->save();
        return redirect()->route('nikah.index')->with('Sukses', 'Berhasil Input Data Nikah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nikah $nikah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nikah $nikah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nikah $nikah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $nikah = Nikah::find($id);
        $nikah->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Data Nikah');
    }

    public function fetchKecamatan(Request $request)
    {
        $data['kecamatan'] = Kecamatan::where("id_kota",$request->id_kota)->get(["nama_kecamatan", "id_kecamatan"]);
        return response()->json($data);
    }
}
