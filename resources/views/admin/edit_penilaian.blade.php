@extends('admin.master_admin')

@section('title')
    Edit Penilaian - SOBAT BPS
@endsection

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <h3><u>EDIT PENILAIAN</u></h3>
            <form action="{{ url('/penilaian-rekruitmen') }}/{{ $penilaian->id }}" method="post" class="mt-3">
                @method('put')
                @csrf
                <div class="mb-2 row">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="survei_id" class="col-form-label"><b>Pendaftar :</b></label>
                        </div>
                        <div class="col-md-9">
                            <select class="form-control" name="survei_id" id="survei_id">
                                {{-- <option value="" disabled selected>-- Pilih Pendaftar --</option> --}}
                                @foreach($surveis as $survei)
                                    <option value="{{ $survei->id }}"  @if($penilaian->survei->id == $survei->id  ) selected @endif>{{ $survei->nama_lengkap }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                {{-- Ada Perbaikan bug di value input --}}
                <div class="mb-2 row">
                    <div class="row">
                        <label for="nilai_c1" class="col-md col-form-label"><b>Nilai C1 :</b></label>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="pengalaman_c1">Pengalaman </label>
                            <input type="number" step="any" id="pengalaman_c1" name="pengalaman_c1" class="col-form-label" value="{{ $penilaian->pengalaman_c1 }}">
                        </div>
                        <div class="col-md-4">
                            <label for="wawancara_c1">Wawancara </label>
                            <input type="number" step="any" id="wawancara_c1" name="wawancara_c1" class="col-form-label" value="{{ $penilaian->wawancara_c1 }}">
                        </div>
                        <div class="col-md-4">
                            <label for="soal_c1">Soal - Soal </label>
                            <input type="number" step="any" id="soal_c1" name="soal_c1" class="col-form-label" value="{{ $penilaian->soal_c1 }}">
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
                            <input type="number" step="any" id="pengalaman_c2" name="pengalaman_c2" class="col-form-label" value="{{ $penilaian->pengalaman_c2 }}">
                        </div>
                        <div class="col-md-4">
                            <label for="wawancara_c2">Wawancara </label>
                            <input type="number" step="any" id="wawancara_c2" name="wawancara_c2" class="col-form-label" value="{{ $penilaian->wawancara_c2 }}">
                        </div>
                        <div class="col-md-4">
                            <label for="soal_c2">Soal - Soal </label>
                            <input type="number" step="any" id="soal_c2" name="soal_c2" class="col-form-label" value="{{ $penilaian->soal_c2 }}">
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
                            <input type="number" step="any" id="pengalaman_c3" name="pengalaman_c3" class="col-form-label" value="{{ $penilaian->pengalaman_c3 }}">
                        </div>
                        <div class="col-md-4">
                            <label for="wawancara_c3">Wawancara </label>
                            <input type="number" step="any" id="wawancara_c3" name="wawancara_c3" class="col-form-label" value="{{ $penilaian->wawancara_c3 }}">
                        </div>
                        <div class="col-md-4">
                            <label for="soal_c3">Soal - Soal </label>
                            <input type="number" step="any" id="soal_c3" name="soal_c3" class="col-form-label" value="{{ $penilaian->soal_c3 }}">
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
                            <input type="number" step="any" id="pengalaman_c4" name="pengalaman_c4" class="col-form-label" value="{{ $penilaian->pengalaman_c4 }}">
                        </div>
                        <div class="col-md-4">
                            <label for="wawancara_c4">Wawancara </label>
                            <input type="number" step="any" id="wawancara_c4" name="wawancara_c4" class="col-form-label" value="{{ $penilaian->wawancara_c4 }}">
                        </div>
                        <div class="col-md-4">
                            <label for="soal_c4">Soal - Soal </label>
                            <input type="number" step="any" id="soal_c4" name="soal_c4" class="col-form-label" value="{{ $penilaian->soal_c4 }}">
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