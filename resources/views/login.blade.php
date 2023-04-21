@extends('welcome')

@section('content')
    <div class="card mx-auto p-2" style="width: 24rem;">
        <main class="form-signin">
            <form action="{{ url('/login') }}" method="post">
                @csrf
                <div class="text-center">
                    <img class="mb-4" src="{{ asset('img/logo.png') }}" alt="logo" width="80" height="70">
                    {{-- <h1 class="h3 mb-3 fw-normal">Login</h1> --}}
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                <div class="mt-3 mb-3 text-center">
                    <p>Belum punya akun ? 
                        <a href="{{ url('/registrasi-mitra') }}">Register di sini</a>
                    </p>
                </div>
            </form>
        </main>
    </div> 
@endsection
