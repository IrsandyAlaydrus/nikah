<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nikah', function (Blueprint $table) {
            $table->increments('id_nikah');
            $table->integer('id_user');
            $table->integer('id_kota');
            $table->integer('id_kecamatan');
            $table->string('lokasi_nikah');
            $table->date('tanggal_nikah');
            $table->text('alamat_nikah');
            $table->string('nama_suami_nikah');
            $table->string('nik_suami_nikah');
            $table->string('tempat_lahir_suami_nikah');
            $table->date('tanggal_lahir_suami_nikah');
            $table->string('status_suami_nikah');
            $table->string('agama_suami_nikah');
            $table->string('pendidikan_suami_nikah');
            $table->string('pekerjaan_suami_nikah');
            $table->string('no_hp_suami_nikah', 15);
            $table->string('email_suami_nikah');
            $table->text('alamat_suami_nikah');
            $table->string('foto_suami_nikah');
            // Ayah Suami
            $table->string('nama_ayah_suami_nikah');
            $table->string('nik_ayah_suami_nikah');
            $table->string('tempat_lahir_ayah_suami_nikah');
            $table->date('tanggal_lahir_ayah_suami_nikah');
            $table->string('agama_ayah_suami_nikah');
            $table->text('alamat_ayah_suami_nikah');
            // Ibu Suami
            $table->string('nama_ibu_suami_nikah');
            $table->string('nik_ibu_suami_nikah');
            $table->string('tempat_lahir_ibu_suami_nikah');
            $table->date('tanggal_lahir_ibu_suami_nikah');
            $table->string('agama_ibu_suami_nikah');
            $table->text('alamat_ibu_suami_nikah');
            // Istri
            $table->string('nama_istri_nikah');
            $table->string('nik_istri_nikah');
            $table->string('tempat_lahir_istri_nikah');
            $table->date('tanggal_lahir_istri_nikah');
            $table->string('status_istri_nikah');
            $table->string('agama_istri_nikah');
            $table->string('pendidikan_istri_nikah');
            $table->string('pekerjaan_istri_nikah');
            $table->string('no_hp_istri_nikah', 15);
            $table->string('email_istri_nikah');
            $table->text('alamat_istri_nikah');
            $table->string('foto_istri_nikah');
            // Ayah Istri
            $table->string('nama_ayah_istri_nikah');
            $table->string('nik_ayah_istri_nikah');
            $table->string('tempat_lahir_ayah_istri_nikah');
            $table->date('tanggal_lahir_ayah_istri_nikah');
            $table->string('agama_ayah_istri_nikah');
            $table->text('alamat_ayah_istri_nikah');
            // Ibu Istri
            $table->string('nama_ibu_istri_nikah');
            $table->string('nik_ibu_istri_nikah');
            $table->string('tempat_lahir_ibu_istri_nikah');
            $table->date('tanggal_lahir_ibu_istri_nikah');
            $table->string('agama_ibu_istri_nikah');
            $table->text('alamat_ibu_istri_nikah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nikah');
    }
};
