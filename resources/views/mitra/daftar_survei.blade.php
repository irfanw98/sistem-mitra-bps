@extends('mitra.master_mitra')

@section('title')
    Daftar Survei - SOBAT BPS
@endsection

@section('content')
<div class="mt-3 mb-5">
    <div class="container">
        <div class="card p-2">
            <div class="card-body">
                <h3><u>DAFTAR SURVEI</u></h3>
                <form action="{{ url('/daftar-survei') }}" method="post" class="mt-3">
                    @csrf
                    <div class="mb-2 row">
                        <label for="nik" class="col-md col-form-label">Nik</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="nik" id="nik" value="{{ $user->nik }}">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="nama_lengkap" class="col-md col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="{{ $user->nama_lengkap }}">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="alamat" class="col-md col-form-label">Alamat Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat" id="alamat">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="tempat_lahir" class="col-md-2 col-form-label">Tempat Lahir</label>
                        <div class="col-md">
                            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
                        </div>
                        <label for="tanggal_lahir" class="col-md-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-md">
                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4 mt-2">
                                    <label for="email">Alamat Email</label>
                                </div>
                                <div class="col-md">
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="jenis_kelamin">Jenis Kelamin</label><br>
                                    <div>
                                        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="L">
                                        <label for="jenis_kelamin">L</label>
                                        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="P">
                                        <label for="jenis_kelamin">P</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <label for="umur">Umur</label>
                                    <input type="text" class="form-control" name="umur" id="umur">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="nomor_hp" class="col-md col-form-label">Nomor Hp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nomor_hp" id="nomor_hp">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <div class="col-md-6 mt-2">
                            <div class="col-md">
                                <label for="pengalaman_survei" class="col-md col-form-label">Pengalaman Survei</label>
                            </div>
                            <div class="col-md">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 p-2">
                                                <input type="checkbox" id="pengalaman_survei" name="pengalaman_survei[]" value="sensus_ekonomi">
                                                <label for="pengalaman_survei">Sensus Ekonomi</label><br>
                                                <input type="checkbox" id="pengalaman_survei" name="pengalaman_survei[]" value="sensus_penduduk">
                                                <label for="pengalaman_survei">Sensus Penduduk</label><br>
                                                <input type="checkbox" id="pengalaman_survei" name="pengalaman_survei[]" value="sensus_pertanian">
                                                <label for="pengalaman_survei">Sensus Pertanian</label>
                                            </div>
                                            <div class="col-md-6 p-2">
                                                <input type="checkbox" id="pengalaman_survei" name="pengalaman_survei[]" value="survei_lainnya">
                                                <label for="pengalaman_survei">Survei Lainnya</label><br>
                                                <input type="checkbox" id="pengalaman_survei" name="pengalaman_survei[]" value="belum_pernah">
                                                <label for="pengalaman_survei">Belum Pernah</label><br>
                                                <input type="checkbox" id="pengalaman_survei" name="pengalaman_survei[]" value="susenas">
                                                <label for="pengalaman_survei">Susenas</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md m-1">
                                                <label for="memiliki" class="col-md col-form-label">Memiliki</label>
                                            </div>
                                            <div class="col-md m-1">
                                                <input type="checkbox" id="memiliki" name="memiliki[]" value="motor">
                                                <label for="memiliki">Motor</label><br>
                                                <input type="checkbox" id="memiliki" name="memiliki[]" value="hp_android">
                                                <label for="memiliki">HP Android</label><br>
                                                <input type="checkbox" id="memiliki" name="memiliki[]" value="laptop">
                                                <label for="memiliki">Laptop</label><br>
                                                <input type="checkbox" id="memiliki" name="memiliki[]" value="pc">
                                                <label for="memiliki">PC</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md m-1">
                                                <label for="menggunakan" class="col-md col-form-label">Menggunakan</label>
                                            </div>
                                            <div class="col-md m-1">
                                                <input type="radio" id="menggunakan_motor" name="menggunakan_motor" value="bisa">
                                                <label for="menggunakan_motor">Bisa</label>
                                                <input type="radio" id="menggunakan_motor" name="menggunakan_motor" value="tidak">
                                                <label for="menggunakan_motor">Tidak</label><br>
                                                <input type="radio" id="menggunakan_hp" name="menggunakan_hp" value="bisa">
                                                <label for="menggunakan_hp">Bisa</label>
                                                <input type="radio" id="menggunakan_hp" name="menggunakan_hp" value="tidak">
                                                <label for="menggunakan_motor">Tidak</label><br>
                                                <input type="radio" id="menggunakan_laptop" name="menggunakan_laptop" value="bisa">
                                                <label for="menggunakan_laptop">Bisa</label>
                                                <input type="radio" id="menggunakan_laptop" name="menggunakan_laptop" value="tidak">
                                                <label for="menggunakan_laptop">Tidak</label><br>
                                                <input type="radio" id="menggunakan_pc" name="menggunakan_pc" value="bisa">
                                                <label for="menggunakan_pc">Bisa</label>
                                                <input type="radio" id="menggunakan_pc" name="menggunakan_pc" value="tidak">
                                                <label for="menggunakan_pc">Tidak</label><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="pendidikan" class="col-md-3 col-form-label">Pendidikan yang ditamatkan</label>
                        <div class="col-md-3">
                            <select name="pendidikan" class="form-control" id="pendidikan">
                                {{-- <option value="{{ $gejala->kode_gejala }}">{{ $gejala->kode_gejala }} - {{ $gejala->nama }}</option> --}}
                                <option value="" class="text-center" disabled selected>-- Pilih Pendidikan --</option>
                                <option value="sd">SD</option>
                                <option value="smp">SMP</option>
                                <option value="sma">SMA</option>
                                <option value="s1">S1</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="status_perkawinan" class="col-md-3 col-form-label">Status Perkawinan</label>
                        <div class="col-md-3">
                            <select name="status_perkawinan" class="form-control" id="status_perkawinan">
                                {{-- <option value="{{ $gejala->kode_gejala }}">{{ $gejala->kode_gejala }} - {{ $gejala->nama }}</option> --}}
                                <option value="" class="text-center" disabled selected>-- Pilih Status --</option>
                                <option value="belum_kawin">Belum Kawin</option>
                                <option value="kawin">Kawin</option>
                                <option value="cerai_hidup">Cerai Hidup</option>
                                <option value="cerai_mati">Cerai Mati</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-2 mt-3 row">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
