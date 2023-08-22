<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nikah extends Model
{
    use HasFactory;
    protected $table = 'nikah';
    protected $primaryKey = 'id_nikah';
    protected $fillable = [
        'id_user',
        'id_kota',
        'id_kecamatan',
        'lokasi_nikah',
        'tanggal_nikah',
        'alamat_nikah',
        'nama_suami_nikah',
        'nik_suami_nikah',
        'tempat_lahir_suami_nikah',
        'tanggal_lahir_suami_nikah',
        'status_suami_nikah',
        'agama_suami_nikah',
        'pendidikan_suami_nikah',
        'pekerjaan_suami_nikah',
        'no_hp_suami_nikah',
        'email_suami_nikah',
        'alamat_suami_nikah',
        'foto_suami_nikah',
        'nama_ayah_suami_nikah',
        'nik_ayah_suami_nikah',
        'tempat_lahir_ayah_suami_nikah',
        'tanggal_lahir_ayah_suami_nikah',
        'agama_ayah_suami_nikah',
        'alamat_ayah_suami_nikah',
        'nama_ibu_suami_nikah',
        'nik_ibu_suami_nikah',
        'tempat_lahir_ibu_suami_nikah',
        'tanggal_lahir_ibu_suami_nikah',
        'agama_ibu_suami_nikah',
        'alamat_ibu_suami_nikah',
        'nama_istri_nikah',
        'nik_istri_nikah',
        'tempat_lahir_istri_nikah',
        'tanggal_lahir_istri_nikah',
        'status_istri_nikah',
        'agama_istri_nikah',
        'pendidikan_istri_nikah',
        'pekerjaan_istri_nikah',
        'no_hp_istri_nikah',
        'email_istri_nikah',
        'alamat_istri_nikah',
        'foto_istri_nikah',
        'nama_ayah_istri_nikah',
        'nik_ayah_istri_nikah',
        'tempat_lahir_ayah_istri_nikah',
        'tanggal_lahir_ayah_istri_nikah',
        'agama_ayah_istri_nikah',
        'alamat_ayah_istri_nikah',
        'nama_ibu_istri_nikah',
        'nik_ibu_istri_nikah',
        'tempat_lahir_ibu_istri_nikah',
        'tanggal_lahir_ibu_istri_nikah',
        'agama_ibu_istri_nikah',
        'alamat_ibu_istri_nikah',
        'kode_nikah',
    ];
}
