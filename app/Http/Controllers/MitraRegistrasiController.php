<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Hash;

class MitraRegistrasiController extends Controller
{
    public function registrasi()
    {
        return view('register_mitra');
    }

    public function StoreRegistrasi(Request $request)
    {
        $user = new User;
        $user->nik = $request->nik;
        $user->nama_lengkap = $request->nama_lengkap;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'mitra';
        $user->save();

        return redirect('/registrasi-mitra')->with(['success' => 'Pesan Berhasil']);
    }
}