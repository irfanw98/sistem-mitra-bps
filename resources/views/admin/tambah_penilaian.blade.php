@extends('admin.master_admin')

@section('title')
    Tambah Penilaian - SOBAT BPS
@endsection

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <h3><u>TAMBAH PENILAIAN</u></h3>
            <form action="{{ url('/penilaian-rekruitmen') }}" method="post" class="mt-3">
                @csrf
                <div class="mb-2 row">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="survei_id" class="col-form-label"><b>Pendaftar :</b></label>
                        </div>
                        <div class="col-md-9">
                            <select class="form-control" name="survei_id" id="survei_id">
                                <option value="" disabled selected>-- Pilih Pendaftar --</option>
                                @foreach($surveis as $survei)
                                    <option value="{{ $survei->id }}">{{ $survei->nama_lengkap }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                {{-- <div class="mb-2 row">
                    <label for="nama_lengkap" class="col-md col-form-label"><b>Nama Lengkap</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="" readonly>
                    </div>
                </div> --}}
                <div class="mb-2 row">
                    <div class="row">
                        <label for="nilai_c1" class="col-md col-form-label"><b>Nilai C1 :</b></label>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="pengalaman_c1">Pengalaman </label>
                            <input type="number" step="any" id="pengalaman_c1" name="pengalaman_c1" class="col-form-label">
                        </div>
                        <div class="col-md-4">
                            <label for="wawancara_c1">Wawancara </label>
                            <input type="number" step="any" id="wawancara_c1" name="wawancara_c1" class="col-form-label">
                        </div>
                        <div class="col-md-4">
                            <label for="soal_c1">Soal - Soal </label>
                            <input type="number" step="any" id="soal_c1" name="soal_c1" class="col-form-label">
                        </div>
                    </div>
                </div>
                <div class="mb-2 row">
                    <div class="row">
                        <label for="nilai_c2" class="col-md col-form-label"><b>Nilai C2 :</b></label>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="pengalaman_c2">Pengalaman </label>
                            <input type="number" step="any" id="pengalaman_c2" name="pengalaman_c2" class="col-form-label">
                        </div>
                        <div class="col-md-4">
                            <label for="wawancara_c2">Wawancara </label>
                            <input type="number" step="any" id="wawancara_c2" name="wawancara_c2" class="col-form-label">
                        </div>
                        <div class="col-md-4">
                            <label for="soal_c2">Soal - Soal </label>
                            <input type="number" step="any" id="soal_c2" name="soal_c2" class="col-form-label">
                        </div>
                    </div>
                </div>
                <div class="mb-2 row">
                    <div class="row">
                        <label for="nilai_c3" class="col-md col-form-label"><b>Nilai C3 :</b></label>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="pengalaman_c3">Pengalaman </label>
                            <input type="number" step="any" id="pengalaman_c3" name="pengalaman_c3" class="col-form-label">
                        </div>
                        <div class="col-md-4">
                            <label for="wawancara_c3">Wawancara </label>
                            <input type="number" step="any" id="wawancara_c3" name="wawancara_c3" class="col-form-label">
                        </div>
                        <div class="col-md-4">
                            <label for="soal_c3">Soal - Soal </label>
                            <input type="number" step="any" id="soal_c3" name="soal_c3" class="col-form-label">
                        </div>
                    </div>
                </div>
                <div class="mb-2 row">
                    <div class="row">
                        <label for="nilai_c4" class="col-md col-form-label"><b>Nilai C4 :</b></label>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="pengalaman_c4">Pengalaman </label>
                            <input type="number" step="any" id="pengalaman_c4" name="pengalaman_c4" class="col-form-label">
                        </div>
                        <div class="col-md-4">
                            <label for="wawancara_c4">Wawancara </label>
                            <input type="number" step="any" id="wawancara_c4" name="wawancara_c4" class="col-form-label">
                        </div>
                        <div class="col-md-4">
                            <label for="soal_c4">Soal - Soal </label>
                            <input type="number" step="any" id="soal_c4" name="soal_c4" class="col-form-label">
                        </div>
                    </div>
                </div>
                <div class="mt-3 p-2 row">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection 