@extends('admin.master_admin')

@section('title')
    Data Cluster - SOBAT BPS
@endsection

@section('content')
<div class="container mt-3">
    <h3><u>DATA PENILAIAN</u></h3>
    <table class="table table-bordered">
        <thead class="text-center">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Berapa (X) Pengalaman</th>
                <th>Nilai Pengalaman</th>
                <th>Nilai Wawancara</th>
                <th>Nilai Pertanyaan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clusters as $cluster)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $cluster->survei->nama_lengkap }}</td>
                    <td class="text-center">{{ $cluster->jml_pengalaman }}</td>
                    <td class="text-center">{{ $cluster->nilai_pengalaman }}</td>
                    <td class="text-center">{{ $cluster->nilai_wawancara }}</td>
                    <td class="text-center">{{ $cluster->nilai_pertanyaan }}</td>
                    <td class="text-center">
                        <a class="btn btn-warning btn-sm" href="{{ url('/data-penilaian-cluster/edit',$cluster->id) }}">Nilai</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 