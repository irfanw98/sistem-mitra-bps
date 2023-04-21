@extends('admin.master_admin')

@section('title')
    Data Pendaftar - SOBAT BPS
@endsection

@section('content')
<div class="container mt-3">
    <h3><u>DATA PENDAFTAR</u></h3>
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
        <tbody>
            @foreach($surveis as $survei)
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
                        <form action="{{ url('/data-pendaftar',$survei->id) }}" method="POST">

                            <a class="btn btn-primary btn-sm" href="{{ url('/data-pendaftar',$survei->id) }}">Detail</a>
        
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Terima Proses?')">Terima</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 