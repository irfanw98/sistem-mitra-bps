@extends('admin.master_admin')

@section('title')
    Penilaian Rekruitmen - SOBAT BPS
@endsection

@section('content')
<div class="container mt-3">
    <h3><u>PENILAIAN REKRUITMEN</u></h3>
    <table class="table table-bordered">
        <thead class="text-center">
            <tr>
                <th>Nik</th>
                <th>Nama</th>
                <th>Nilai C1</th>
                <th>Nilai C2</th>
                <th>Nilai C3</th>
                <th>Jarak Terdekat</th>
                <th>CLuster</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penilaians as $penilaian)
            <tr>
                <td>{{ $penilaian->survei->nik }}</td>
                <td>{{ $penilaian->survei->nama_lengkap }}</td>
                <td class="text-center">
                    <span style="font-size: 15px;">
                        {{ number_format($penilaian->nilai_c1, 4) }}
                    </span>
                </td>
                <td class="text-center">
                    <span style="font-size: 15px;">
                        {{ number_format($penilaian->nilai_c2, 4) }}
                    </span>
                </td>
                <td class="text-center">
                    <span style="font-size: 15px;">
                        {{ number_format($penilaian->nilai_c3, 4) }}
                    </span>
                </td>
                <td class="text-center">
                    <span class="badge bg-primary" style="font-size: 15px;">
                        {{ number_format($penilaian->hasil_akhir, 4) }}
                    </span>
                </td>
                <td class="text-center">
                    <span style="font-size: 15px;">
                        {{ $penilaian->cluster }}
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-md-6">
            <div id="container" style="width:100%; height:400px;"></div>
        </div>
        <div class="col-md-6 mt-4">
            <div class="row">
                <div class="col-md-12">
                    <h4>Cluster 1 :</h4>
                    @foreach($penilaian_c1 as $value)
                        <li>{{ $value->survei->nama_lengkap }}</li>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-4">
                    <h4>Cluster 2 :</h4>
                    @foreach($penilaian_c2 as $value)
                        <li>{{ $value->survei->nama_lengkap }}</li>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-4">
                    <h4>Cluster 3 :</h4>
                    @foreach($penilaian_c3 as $value)
                        <li>{{ $value->survei->nama_lengkap }}</li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 

@section('script')
<script type="text/javascript">
Highcharts.chart('container', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            // pointFormat: '{series.name}: <b>{!! json_encode($hitungMitra[0]) !!}</b>'
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: ''
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Mitra',
            colorByPoint: true,
            data: {!! $hasilAkhir !!}
        }]
    });
</script>
@endsection