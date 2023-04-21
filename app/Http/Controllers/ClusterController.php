<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Cluster,
    Penilaian
};

class ClusterController extends Controller
{
    public function index()
    {
        $clusters = Cluster::with('survei')->get();

        return view('admin.data_cluster', compact('clusters'));
    }

    public function penilaiancluster($id)
    {
        $cluster = Cluster::with('survei')->findOrFail($id);

        return view('admin.edit_cluster', compact('cluster'));
    }

    public function nilaicluster(Request $request, $id)
    {
        //Nilai Cluster Wanwancara Dan Pertanyaan
        $cluster = Cluster::findOrFail($id);
        $cluster->nilai_wawancara = $request->nilai_wawancara;
        $cluster->nilai_pertanyaan = $request->nilai_pertanyaan;
        $cluster->save();

        //Perhitungan Cluster
        $nilai_pangkat = 2;

        //C1
        $pengalaman_centroid_c1 = $cluster->nilai_pengalaman - 0;
        $wawancara_centroid_c1  = $cluster->nilai_wawancara - 1;
        $soal_centroid_c1 = $cluster->nilai_pertanyaan - 0;

        //hitung jarak terhdap nilai centroid
        // sqrt() => untuk menghitung akar quadrat
        // pow() => untuk menghitung pangkat suatu bil
        $hasil_c1 =  sqrt((pow($pengalaman_centroid_c1, $nilai_pangkat)) + (pow($wawancara_centroid_c1, $nilai_pangkat)) + (pow($soal_centroid_c1, $nilai_pangkat)));
        // dd($hasil_c1);

        //C2
        $pengalaman_centroid_c2 = $cluster->nilai_pengalaman - 0;
        $wawancara_centroid_c2  = $cluster->nilai_wawancara - 0;
        $soal_centroid_c2 = $cluster->nilai_pertanyaan - 1;

        $hasil_c2 =  sqrt((pow($pengalaman_centroid_c2, $nilai_pangkat)) + (pow($wawancara_centroid_c2, $nilai_pangkat)) + (pow($soal_centroid_c2, $nilai_pangkat)));

        //C3
        $pengalaman_centroid_c3 = $cluster->nilai_pengalaman - 1;
        $wawancara_centroid_c3  = $cluster->nilai_wawancara - 0;
        $soal_centroid_c3 = $cluster->nilai_pertanyaan - 0;

        $hasil_c3 =  sqrt((pow($pengalaman_centroid_c3, $nilai_pangkat)) + (pow($wawancara_centroid_c3, $nilai_pangkat)) + (pow($soal_centroid_c3, $nilai_pangkat)));

        //Hasil Akhir
        $hasil_akhir = min($hasil_c1, $hasil_c2, $hasil_c3);

        //Cek Hasil Cluster
        if ($hasil_akhir == $hasil_c1) {
            $hasil_cluster = 'C1';
        } else if ($hasil_akhir == $hasil_c2) {
            $hasil_cluster = 'C2';
        } else {
            $hasil_cluster = 'C3';
        }
        //Cek Apakah Ada Penilaian berdasarkan cluster_id
        $penilaian = Penilaian::where('cluster_id', $id)->first();

        //Jika tidak ada, create
        if (!$penilaian) {
            $penilaian = new Penilaian;
            $penilaian->survei_id = $cluster->survei_id;
            $penilaian->cluster_id = $cluster->id;
            $penilaian->nilai_c1 = $hasil_c1;
            $penilaian->nilai_c2 = $hasil_c2;
            $penilaian->nilai_c3 = $hasil_c3;
            $penilaian->hasil_akhir = $hasil_akhir;
            $penilaian->cluster = $hasil_cluster;
            $penilaian->save();
        }
        //Jika ada, update
            $penilaian->survei_id = $cluster->survei_id;
            $penilaian->cluster_id = $cluster->id;
            $penilaian->nilai_c1 = $hasil_c1;
            $penilaian->nilai_c2 = $hasil_c2;
            $penilaian->nilai_c3 = $hasil_c3;
            $penilaian->hasil_akhir = $hasil_akhir;
            $penilaian->cluster = $hasil_cluster;
            $penilaian->save();

        return redirect('/data-penilaian-cluster');
    }
}
