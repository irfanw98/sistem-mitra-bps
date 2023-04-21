<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\{
    Survei,
    Penilaian,
};

class AdminController extends Controller
{
    public function index()
    {
        return view('beranda_admin');
    }

    public function datapendaftar()
    {
        $surveis = Survei::latest()->get();

        return view('admin.data_pendaftar', compact('surveis'));
    }

    public function detailpendaftar($id)
    {
        $survei = Survei::findOrFail($id);

        return view('admin.detail_pendaftar', compact('survei'));
    }

    public function terimapendaftar($id)
    {
        $survei = Survei::findOrFail($id);
        $penilaian = Penilaian::where('survei_id', $id)->first();

        if(!$penilaian) {
            return "Mitra ini belum ada penilaian rekruitmen.";
        }

        if($survei->id == $penilaian->survei_id)
        {

            if($survei->status == 0){
                $survei->status = 1;
                $survei->save();

                return redirect()->back();
            } else {
                return "Mitra sudah diterima.";
            }
        }
    }

    public function datapenilaian()
    {
        $penilaians = Penilaian::with(['survei', 'cluster'])->get();

        $penilaian_c1 = $penilaians->where('cluster', 'C1');
        $penilaian_c2 = $penilaians->where('cluster', 'C2');
        $penilaian_c3 = $penilaians->where('cluster', 'C3');
        // dd($penilaian_c3);

        $clusters = DB::table('penilaian')
                ->select('cluster', DB::raw('count(*) as total'))
                ->groupBy('cluster')
                ->get();
        // dd($clusters);

        $hasil = [];

        foreach ($clusters as $key => $value) {
            $cluster = $value->cluster;
            $total = $value->total;

            $chart['name'] = $cluster;
            $chart['y'] = $total;
            array_push($hasil, $chart);
        }

        $hitungMitra = [];

        foreach ($hasil as $key => $value) {
            $hitungMitra[] = $value['y'];
        }

        $encode = json_encode($hasil);
        $replace_first = str_replace('"', "", $encode);
        $string_replace = array('C1', 'C2', 'C3');
        $replace = array("'C1'", "'C2'", "'C3'");
        $hasilAkhir= str_replace($string_replace, $replace, $replace_first);

        return view('admin.penilaian_rekruitmen', compact('penilaians', 'penilaian_c1', 'penilaian_c2', 'penilaian_c3',  'hasilAkhir', 'hitungMitra', 'replace'));
    }

}