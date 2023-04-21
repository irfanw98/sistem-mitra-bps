{{-- penanda bahwa kita menggunakan mitra/master_mitra.blade.php sebagai layout website --}}
@extends('mitra.master_mitra')

@section('title')
    Detail Riwayat - SOBAT BPS
@endsection

@section('content')
<div class="container mt-3">
    <h3><u>DETAIL RIWAYAT</u></h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="20%">Nik</th>
                <td>{{ $survei->nik }}</td>
            </tr>
            <tr>
                <th>Nama Lengkap</th>
                <td>{{ $survei->nama_lengkap }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $survei->alamat }}</td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>{{ $survei->tempat_lahir }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $survei->tanggal_lahir }}</td>
            </tr>
            <tr>
                <th>Alamat Email</th>
                <td>{{ $survei->email }}</td>
            </tr>
            <tr>
                <th>Nomor Hp</th>
                <td>{{ $survei->nomor_hp }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>
                    {{ $survei->jenis_kelamin == 'L' ? 'Laki - Laki' : 'Perempuan'}}
                </td>
            </tr>
            <tr>
                <th>Umur</th>
                <td>{{ $survei->umur }}</td>
            </tr>
            <tr>
                <th>Pengalaman Survei</th>
                <td>
                    @php
                        $pengalaman_surveis = json_decode($survei->pengalaman_survei)
                    @endphp
                    @foreach($pengalaman_surveis as $pengalaman_survei)
                        @if($pengalaman_survei == 'sensus_ekonomi')
                            <span>Sensus Ekonomi</span>, 
                        @elseif($pengalaman_survei == 'sensus_penduduk')
                            <span>Sensus Penduduk</span>,
                        @elseif($pengalaman_survei == 'sensus_pertanian')
                            <span>Sensus Pertanian</span>,
                        @elseif($pengalaman_survei == 'survei_lainnya')
                            <span>Survei Lainnya</span>,
                        @elseif($pengalaman_survei == 'belum_pernah')
                            <span>Belum Pernah</span>,
                        @elseif($pengalaman_survei == 'susenas')
                            <span>Susenas</span>,
                        @endif
                    @endforeach
                </td>
            </tr>
            <tr>
                <th>Pendidikan</th>
                <td>{{ $survei->pendidikan }}</td>
            </tr>
            <tr>
                <th>Status Perkawinan</th>
                <td>
                    @if($survei->status_perkawinan == 'belum_kawin')
                        <span>Belum Kawin</span>
                    @elseif($survei->status_perkawinan == 'cerai_hidup')
                        <span>Cerai Hidup</span>
                    @elseif($survei->status_perkawinan == 'cerai_mati')
                        <span>Cerai Mati</span>
                    @elseif($survei->status_perkawinan == 'kawin')
                        <span>Kawin</span>
                    @endif
                </td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    {{-- Ada Tambahan --}}
                    <span class="badge {{ $survei->status == 0 ? 'bg-warning' : 'bg-success' }}">
                        {{ $survei->status == 0 ? 'Diproses' : 'Diterima'}}
                    </span>
                </td>
            </tr>
        </thead>
    </table>
    <table class="table table-bordered text-center"> 
        <thead>
            <tr>
                <th width="50%">Memiliki</th>
                <th width="50%">Menggunakan</th>
            </tr>
        </thead>
        <tbody>
            @php
                $memiliki_fasilitas = json_decode($survei->memiliki_fasilitas)
            @endphp
            @foreach($memiliki_fasilitas as $memiliki_fasilitas)
            <tr>
                <td>
                    @if($memiliki_fasilitas == 'motor')
                        <span>Motor</span>
                        <td>{{ $survei->menggunakan_motor }}</td>
                    @elseif($memiliki_fasilitas == 'hp_android')
                        <span>Hp Android</span>
                        <td>{{ $survei->menggunakan_hp }}</td>
                    @elseif($memiliki_fasilitas == 'laptop')
                        <span>Laptop</span>
                        <td>{{ $survei->menggunakan_laptop }}</td>
                    @elseif($memiliki_fasilitas == 'pc')
                        <span>Pc</span>
                        <td>{{ $survei->menggunakan_pc }}</td>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection