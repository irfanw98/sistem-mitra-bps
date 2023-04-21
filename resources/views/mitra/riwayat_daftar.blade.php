@extends('mitra.master_mitra')

@section('title')
    Riwayat Daftar - SOBAT BPS
@endsection

@section('content')
<div class="container mt-3">
    <h3><u>RIWAYAT DAFTAR</u></h3>
    <table class="table table-bordered">
        <thead class="text-center">
            <tr>
                <th>Nik</th>
                <th>Nama</th>
                <th>Alamat Email</th>
                <th>Nomor Hp</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        @foreach($surveis as $survei)
        <tbody>
            <tr>
                <td>{{ $survei->nik }}</td>
                <td>{{ $survei->nama_lengkap }}</td>
                <td>{{ $survei->email }}</td>
                <td>{{ $survei->nomor_hp }}</td>
                <td class="text-center">
                    {{-- Ada Tambahan --}}
                    <span class="badge {{ $survei->status == 0 ? 'bg-warning' : 'bg-success' }}">
                        {{ $survei->status == 0 ? 'Diproses' : 'Diterima'}}
                    </span>
                </td>
                <td class="text-center">
                    <a href="{{ url('/riwayat-daftar') }}/{{ $survei->id }}" class="btn btn-success">Detail</a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection