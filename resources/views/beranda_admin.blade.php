@extends('admin.master_admin')

@section('title')
    Beranda - SOBAT BPS
@endsection

@section('content')
<div class="mt-3 text-center">
    <h1>Halaman Beranda Admin</h1>
</div>
<div class="content mt-5">
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-6">
                            <p style="text-align:justify">
                                Kegiatan Pemutakhiran Kerangka Geospasial dan Muatan Wilkerstat ST2023 adalah kegiatan pemetaan wilayah kerja statistik menjelang Sensus Pertanian 2023 (ST2023) yang dilaksanakan Tahun 2022. Output yang dihasilkan dari kegiatan ini adalah peta wilkerstat yang mutakhir beserta informasi muatan yang akan digunakan dalam pelaksanaan lapangan ST2023, serta kerangka geospasial tutupan lahan pertanian. <br><br>

                                Kegiatan ini dilaksanakan mulai Maret-Desember 2022 yang terdiri dari 2 tahapan yaitu Lapangan dan Pengolahan. Petugas yang diperlukan untuk kegiatan ini adalah pemeta, pengawas, pengolah muatan dan peta.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('img/gambar_satu.jpeg') }}" width="500px" height="300px" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <p style="text-align:justify">
                                Sesuai amanat Undang-Undang Nomor 16 Tahun 1997 tentang Statistk dan Peraturan Pemerintah Nomor 51 Tahun 1999 tentang Penyelenggaraan Statstk, Badan Pusat Statistik (BPS) menyelenggarakan kegiatan sensus dan survei secara rutin. <br><br>

                                Salah satu tahapan penting dalam pelaksanaan kegiatan sensus dan survei adalah rekruitment mitra/petugas. Rekrutmen mitra/petugas harus direncanakan dan dilaksanakan dengan sungguh-sungguh dan saksama agar diperoleh petugas yang bertanggung jawab, disiplin, ulet, dan teliti.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('img/gambar_dua.jpeg') }}" width="500px" height="300px" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
@endsection
