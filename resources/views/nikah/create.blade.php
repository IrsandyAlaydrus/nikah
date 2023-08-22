@extends('layouts.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Error!</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('nikah.store') }}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                       Data KUA & Jadwal Nikah
                        <hr>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Kota /Kab</label>
                                <select name="id_kota" id="kota-dd" class="form-control">
                                    <option value=""></option>
                                    @foreach ($kota as $row)
                                        <option value="{{ $row->id_kota }}">{{ $row->nama_kota }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Kecamatan</label>
                                <select name="id_kecamatan" id="kecamatan-dd" class="form-control"></select>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label for="">Lokasi Nikah</label>
                                <select name="lokasi_nikah" id="dropdown" class="form-control">
                                    <option></option>
                                    <option>KUA</option>
                                    <option>Luar KUA</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label for="">Tanggal Nikah</label>
                                <input type="date" class="form-control" name="tanggal_nikah" value="{{ old('tanggal_nikah') }}">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="">Alamat Nikah</label>
                                <textarea name="alamat_nikah" rows="3" class="form-control">{{ old('alamat_nikah') }}</textarea>
                            </div>
                        </div>
                       
                        <div class="row g-3">
                            <div class="col-12 mt-4">
                                Data Suami
                                <hr>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Nik Suami</label>
                                <input type="text" class="form-control" name="nik_suami_nikah" value="{{ old('nik_suami_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Nama Suami</label>
                                <input type="text" class="form-control" name="nama_suami_nikah" value="{{ old('nama_suami_nikah') }}">
                            </div>
                            <div class="col md-6 mt-3">
                                <label for="">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir_suami_nikah" value="{{ old('tempat_lahir_suami_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir_suami_nikah" value="{{ old('tanggal_lahir_suami_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Status</label>
                                <select name="status_suami_nikah" class="form-control">
                                    <option>Pilih Status</option>
                                    <option>Lajang</option>
                                    <option>Kawin</option>
                                    <option>Cerai Mati</option>
                                    <option>Cerai Hidup</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Agama</label>
                                <select name="agama_suami_nikah" class="form-control">
                                    <option>Pilih Agama</option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Konghucu</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Pendidikan</label>
                                <select name="pendidikan_suami_nikah" class="form-control">
                                    <option>Pilih Pendidikan Terakhir</option>
                                    <option>Tidak Berpendidikan</option>
                                    <option>SD</option>
                                    <option>SMP</option>
                                    <option>SMA /SMK / MA</option>
                                    <option>D3</option>
                                    <option>S1</option>
                                    <option>S2</option>
                                    <option>S3</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Pekerjaan</label>
                                <select name="pekerjaan_suami_nikah" class="form-control">
                                    <option>Pilih Pekerjaan</option>
                                    <option>Tidak Bekerja</option>
                                    <option>PNS / TNI / Polri</option>
                                    <option>Petani / Nelayan / Peternak</option>
                                    <option>Wiraswasta / Pengusaha</option>
                                    <option>Pegawai Honorer / Kontrak / Swasta</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">No. HP</label>
                                <input type="number" class="form-control" name="no_hp_suami_nikah" value="{{ old('no_hp_suami_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email_suami_nikah" value="{{ old('email_suami_nikah') }}">
                            </div>
                            <div class="col-12 mt-3">
                                <label for="">Alamat Suami</label>
                                <textarea name="alamat_suami_nikah" rows="3" class="form-control">{{ old('alamat_suami_nikah') }}</textarea>
                            </div>
                            <div class="col-12 mt-3">
                                <label for="">Foto Suami</label>
                                <input type="file" class="form-control" accept="image*" name="foto_suami_nikah">
                            </div>
                        </div>  
                        <div class="row g-3">
                            <div class="col-12 mt-4">
                                Data Ayah Suami
                                <hr>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Nik Ayah</label>
                                <input type="number" class="form-control" name="nik_ayah_suami_nikah" value="{{ old('nik_ayah_suami_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Nama Ayah</label>
                                <input type="text" name="nama_ayah_suami_nikah" class="form-control" value="{{ old('nama_ayah_suami_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Tempat Lahir Ayah</label>
                                <input type="text" class="form-control" name="tempat_lahir_ayah_suami_nikah" value="{{ old('tempat_lahir_ayah_suami_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Tanggal Lahir Ayah</label>
                                <input type="date" class="form-control" name="tanggal_lahir_ayah_suami_nikah" value="{{ old('tanggal_lahir_ayah_suami_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Agama Ayah</label>
                                <select name="agama_ayah_suami_nikah" class="form-control">
                                    <option>Pilih Agama</option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Konghucu</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Alamat Ayah</label>
                                <input type="text" class="form-control" name="alamat_ayah_suami_nikah" value="{{ old('alamat_ayah_suami_nikah') }}">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-12 mt-4">
                                Data Ibu Suami
                                <hr>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Nik Ibu</label>
                                <input type="number" name="nik_ibu_suami_nikah" class="form-control" value="{{ old('nik_ibu_suami_nikah') }}">
                            </div>
                            <div class="col md-6 mt-3">
                                <label for="">Nama Ibu</label>
                                <input type="text" name="nama_ibu_suami_nikah" class="form-control" value="{{ old('nama_ibu_suami_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Tempat Lahir Ibu</label>
                                <input type="text" class="form-control" name="tempat_lahir_ibu_suami_nikah" value="{{ old('tempat_lahir_ibu_suami_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Tanggal Lahir Ibu</label>
                                <input type="date" class="form-control" name="tanggal_lahir_ibu_suami_nikah" value="{{ old('tanggal_lahir_ibu_suami_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Agama Ibu</label>
                                <select name="agama_ibu_suami_nikah" class="form-control">
                                    <option>Pilih Agama</option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Konghucu</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Alamat Ibu</label>
                                <input type="text" class="form-control" name="alamat_ibu_suami_nikah" value="{{ old('alamat_ibu_suami_nikah') }}">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-12 mt-4">
                                Data Istri
                                <hr>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Nik Istri</label>
                                <input type="number" class="form-control" name="nik_istri_nikah" value="{{ old('nik_istri_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Nama Istri</label>
                                <input type="text" class="form-control" name="nama_istri_nikah" value="{{ old('nama_istri_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Tempat Lahir Istri</label>
                                <input type="text" class="form-control" name="tempat_lahir_istri_nikah" value="{{ old('tempat_lahir_istri_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Tanggal Lahir Istri</label>
                                <input type="date" class="form-control" name="tanggal_lahir_istri_nikah" value="{{ old('tanggal_lahir_istri_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Status</label>
                                <select name="status_istri_nikah" class="form-control">
                                    <option>Pilih Status</option>
                                    <option>Lajang</option>
                                    <option>Kawin</option>
                                    <option>Cerai Mati</option>
                                    <option>Cerai Hidup</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Agama</label>
                                <select name="agama_istri_nikah" class="form-control">
                                    <option>Pilih Agama</option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Konghucu</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Pendidikan</label>
                                <select name="pendidikan_istri_nikah" class="form-control">
                                    <option>Pilih Pendidikan Terakhir</option>
                                    <option>Tidak Berpendidikan</option>
                                    <option>SD</option>
                                    <option>SMP</option>
                                    <option>SMA /SMK / MA</option>
                                    <option>D3</option>
                                    <option>S1</option>
                                    <option>S2</option>
                                    <option>S3</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Pekerjaan</label>
                                <select name="pekerjaan_istri_nikah" class="form-control">
                                    <option>Pilih Pekerjaan</option>
                                    <option>Tidak Bekerja</option>
                                    <option>PNS / TNI / Polri</option>
                                    <option>Petani / Nelayan / Peternak</option>
                                    <option>Wiraswasta / Pengusaha</option>
                                    <option>Pegawai Honorer / Kontrak / Swasta</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">No. HP</label>
                                <input type="number" class="form-control" name="no_hp_istri_nikah" value="{{ old('no_hp_istri_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email_istri_nikah" value="{{ old('email_istri_nikah') }}">
                            </div>
                            <div class="col-12 mt-3">
                                <label for="">Alamat Istri</label>
                                <textarea name="alamat_istri_nikah" rows="3" class="form-control">{{ old('alamat_istri_nikah') }}</textarea>
                            </div>
                            <div class="col-12 mt-3">
                                <label for="">Foto Istri</label>
                                <input type="file" class="form-control" accept="image*" name="foto_istri_nikah">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-12 mt-4">
                                Data Ayah Istri
                                <hr>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Nik Ayah</label>
                                <input type="number" class="form-control" name="nik_ayah_istri_nikah" value="{{ old('nik_ayah_istri_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Nama Ayah</label>
                                <input type="text" name="nama_ayah_istri_nikah" class="form-control" value="{{ old('nama_ayah_istri_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Tempat Lahir Ayah</label>
                                <input type="text" class="form-control" name="tempat_lahir_ayah_istri_nikah" value="{{ old('tempat_lahir_ayah_istri_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Tanggal Lahir Ayah</label>
                                <input type="date" class="form-control" name="tanggal_lahir_ayah_istri_nikah" value="{{ old('tanggal_lahir_ayah_istri_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Agama Ayah</label>
                                <select name="agama_ayah_istri_nikah" class="form-control">
                                    <option>Pilih Agama</option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Konghucu</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Alamat Ayah</label>
                                <input type="text" class="form-control" name="alamat_ayah_istri_nikah" value="{{ old('alamat_ayah_istri_nikah') }}">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-12 mt-4">
                                Data Ibu Istri
                                <hr>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Nik Ibu</label>
                                <input type="number" name="nik_ibu_istri_nikah" class="form-control" value="{{ old('nik_ibu_istri_nikah') }}">
                            </div>
                            <div class="col md-6 mt-3">
                                <label for="">Nama Ibu</label>
                                <input type="text" name="nama_ibu_istri_nikah" class="form-control" value="{{ old('nama_ibu_istri_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Tempat Lahir Ibu</label>
                                <input type="text" class="form-control" name="tempat_lahir_ibu_istri_nikah" value="{{ old('tempat_lahir_ibu_istri_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Tanggal Lahir Ibu</label>
                                <input type="date" class="form-control" name="tanggal_lahir_ibu_istri_nikah" value="{{ old('tanggal_lahir_ibu_istri_nikah') }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Agama Ibu</label>
                                <select name="agama_ibu_istri_nikah" class="form-control">
                                    <option>Pilih Agama</option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Konghucu</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Alamat Ibu</label>
                                <input type="text" class="form-control" name="alamat_ibu_istri_nikah" value="{{ old('alamat_ibu_istri_nikah') }}">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-dark" type="submit">Simpan</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
@endsection
