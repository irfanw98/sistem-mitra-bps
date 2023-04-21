@extends('welcome')

@section('content')
<div class="card mx-auto" style="width: 32rem;">
    <main class="form-register">
        <form action="{{ url('/registrasi-mitra') }}" method="post">
            @if ($message = Session::get('success'))
                  <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                      <strong>{{ $message }}</strong>
                  </div>
                @endif
            @csrf
            <div class="text-center">
                <img class="mb-4" src="{{ asset('img/logo.png') }}" alt="logo" width="80" height="70">
            </div>
            <div class="mb-2">
                <label for="nik" class="form-label">Nik</label>
                <input type="nik" class="form-control" name="nik" id="nik" required>
            </div>
            <div class="mb-2">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="nama_lengkap" class="form-control" name="nama_lengkap" id="nama_lengkap" required>
            </div>
            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            <div class="mt-3 mb-3 text-center">
                <p>
                    Sudah punya akun ?
                    <a href="{{ url('/') }}">Login di sini</a>
                </p>
            </div>
        </form>
    </main>
</div> 
@endsection
