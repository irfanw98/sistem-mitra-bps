@extends('admin.master_admin')

@section('title')
    Edit Cluster - SOBAT BPS
@endsection

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <h3><u>DATA PENILAIAN</u></h3>
            <form action="{{ url('/data-penilaian-cluster') }}/{{ $cluster->id }}" method="post" class="mt-3">
                @method('put')
                @csrf
                <div class="mb-2 row">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nilai_wawancara" class="col-form-label"><b>Nilai Wawancara :</b></label>
                            <input type="text" name="nilai_wawancara" id="nilai_wawancara" value="{{ $cluster->nilai_wawancara }}">
                        </div>
                        <div class="col-md-6">
                            <label for="nilai_pertanyaan" class="col-form-label"><b>Nilai Pertanyaan :</b></label>
                            <input type="text" name="nilai_pertanyaan" id="nilai_pertanyaan" value="{{ $cluster->nilai_pertanyaan }}">
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