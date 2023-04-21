<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
        <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
        <!-- Font Poppins -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet" />
        <!-- Bootstrap v5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- HightCharts -->
        <script src="https://code.highcharts.com/highcharts.js"></script>
    </head>
    <body>
        <div>
            {{-- Header --}}
            <div class="header p-2">
                <div class="container">
                    <div class="row mt-3">
                        <div class="col-md-2">
                            <img src="{{ asset('img/logo-bps.svg') }}" alt="logo" width="100px">
                        </div>
                        <div class="col-md-8 text-center">
                            <h1>Badan Pusat Statistik</h1>
                        </div>
                    </div>
                </div>
            </div><hr>
            {{-- Navbar --}}
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-2">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item p-3">
                            <a class="nav-link active" href="{{ url('/beranda-admin') }}">Beranda</a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="nav-link active" href="{{ url('/data-pendaftar') }}">Data Pendaftar</a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="nav-link active" href="{{ url('/data-penilaian-cluster') }}">Data Penilaian</a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="nav-link active" href="{{ url('/penilaian-rekruitmen') }}">Penilaian Rekruitmen</a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="nav-link active" href="{{ url('/logout') }}">Logout</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>

            @yield('content')
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        @yield('script')
    </body>
</html>
