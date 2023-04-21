<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    User,
    Survei,
    Cluster
};

class SurveiController extends Controller
{
    public function index()
    {
        $surveis = Survei::where('user_id', Auth::user()->id)->get();

        return view('mitra.riwayat_daftar', compact('surveis'));
    }

    public function show($id)
    {
        $survei = Survei::findOrFail($id);

        return view('mitra.detail_riwayat', compact('survei'));
    }

    public function create()
    {
        $surveiByUserId = Survei::where('user_id', Auth::user()->id)->first();
        $user = User::where('id', Auth::user()->id)->first();

        if(!$surveiByUserId)
        {
            return view('mitra.daftar_survei', compact('user'));
        }

        return view('mitra.sudah_survei');
    }

    public function store(Request $request)
    {

        $jml_pengalaman = count($request->pengalaman_survei);

        // Hitung Nilai Pengalaman
        if (!$request->pengalaman_survei) {
            $nilai_pengalaman = 0;
        } else {
            $nilai_pengalaman = ceil(($jml_pengalaman / 6) * 10);
        }
        // dd($nilai_pengalaman);

        $user = User::where('id', Auth::user()->id)->first();

        Survei::create([
            'user_id' => $user->id,
            'nik' => $request->nik,
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'umur' => $request->umur,
            'nomor_hp' => $request->nomor_hp,
            'pengalaman_survei' => json_encode($request->pengalaman_survei),
            'memiliki_fasilitas' => json_encode($request->memiliki),
            'menggunakan_motor' => $request->menggunakan_motor,
            'menggunakan_hp' => $request->menggunakan_hp,
            'menggunakan_laptop' => $request->menggunakan_laptop,
            'menggunakan_pc' => $request->menggunakan_pc,
            'pendidikan' => $request->pendidikan,
            'status_perkawinan' => $request->status_perkawinan,
            'status' => 0
        ]);

        $survei = Survei::latest()->first();

        Cluster::create([
            'survei_id' => $survei->id,
            'jml_pengalaman' => $jml_pengalaman,
            'nilai_pengalaman' => $nilai_pengalaman
        ]);

        return redirect('/riwayat-daftar');
    }
}