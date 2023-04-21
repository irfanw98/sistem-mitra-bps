<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminRegistrasiController extends Controller
{
    public function registrasi()
    {
        return view('register_admin');
    }

    public function StoreRegistrasi(Request $request)
    {
        $user = new User;
        $user->nik = $request->nik;
        $user->nama_lengkap = $request->nama_lengkap;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'admin';
        $user->save();

        return redirect('/');
    }
}
