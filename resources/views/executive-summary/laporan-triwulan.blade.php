@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-laptop_windows"></i>
            </div>
            <div class="page-title">
                <h5>Executive Summary</h5>
                <h6 class="sub-heading">Selamat datang di Sistem Penanggulangan Bencana PMI Solo</h6>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="right-actions">
                <span class="last-login">Last Login: 5 minutes ago</span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<!-- Row start -->
<div class="col-sm-12">
    <div class="clearfix">
        <div class="btn-group float-left form-group" role="group">
            <form action="{{ route('executive-summary.search') }}" method="GET">
                <div class="input-group">
                    <input type="date" class="form-control" id="startDate" name="tanggal_awal" placeholder="Tanggal Awal">
                    <input type="date" class="form-control" id="endDate" name="tanggal_akhir" placeholder="Tanggal Akhir">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- <div class="row gutters">
        {{-- <div class="col-sm-4">
            <div class="card">
                <div class="card-header">Pie Chart</div>
                <div class="card-body">
                    <div id="pieChart" class="chart-height"></div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="col-sm-4">
            <div class="card">
                <div class="card-header">Donut Chart</div>
                <div class="card-body">
                    <div id="donutChart" class="chart-height"></div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="col-sm-4">
            <div class="card">
                <div class="card-header">Pie Chart</div>
                <div class="card-body">
                    <div id="pieChart1" class="chart-height"></div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Row end -->

    <!-- Row start -->
    {{-- <div class="row gutters">
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">Line Graph</div>
                <div class="card-body">
                    <div id="lineGraphOverview" class="chart-height"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">Stacked Area Graph</div>
                <div class="card-body">
                    <div id="splineSales" class="chart-height"></div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Row end -->

    <!-- Row start -->
    {{-- <div class="row gutters">
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">Line Graph</div>
                <div class="card-body">
                    <div id="lineGraph" class="chart-height"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">Stacked Bar Graph</div>
                <div class="card-body">
                    <div id="stackedBarGraph" class="chart-height"></div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Row end -->

    <!-- Row start -->
    {{-- <div class="row gutters">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Area Spline Graph</div>
                <div class="card-body">
                    <div id="areaSplineGraph" class="chart-height"></div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Row end -->

    <!-- Row start -->
    {{-- <div class="row gutters">
        <div class="col-lg-6 col-sm-12">
            <div class="card">
                <div class="card-header">Scatter Plot</div>
                <div class="card-body">
                    <div id="scatterPlot" class="chart-height"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="card">
                <div class="card-header">Step Graph</div>
                <div class="card-body">
                    <div id="stepGraph" class="chart-height"></div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Row end -->

    <!-- Row start -->
    {{-- <div class="row gutters">
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">Spline Graph</div>
                <div class="card-body">
                    <div id="splineGraph" class="chart-height"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">Line Graph</div>
                <div class="card-body">
                    <div id="barAreaGraph" class="chart-height"></div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Tenaga yang Dikerahkan</div>
                <div class="card-body">
                    <div id="barGraph" class="chart-height"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Jumlah Korban Jiwa Setiap Kejadian</div>
                <div class="card-body">
                    <div id="serverRequests" class="chart-height"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->
</div>
{{-- <div class="content-section">
                    <table border="0" width="500px" cellpadding="10px" cellspacing="0px" id="content-section">
                        <thead>
                            <tr>
                                <th style="background-color: #860200; width: 2px"></th>
                                <th colspan=2 style="background-color: #650103;color: white; font-family: 'Inter', sans-serif; font-style: normal; font-weight: 300; text-align: center; height: 20px; width: 50px; font-size: 24px">infografis</th>
                                <th style="background-color: #860200;"></th>

                                <th rowspan="2" colspan="5" style="background-color: #EBF1F1; color: #ED292C; font-family: 'Bebas Neue', sans-serif; font-style: normal; font-weight: 300; font-size: 67px; white-space: nowrap; padding-top: 0; padding-bottom: 0; align-items: center; line-height: 1; vertical-align: bottom;">
                                    KEJADIAN BULAN MEI-JULI 2024<br>
                                    <span style="font-size: 54px; color: #000000;">SURAKARTA <p style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; font-size: 39px; background-color: #1E1E1C; color: white; padding: 5px 10px;display: inline-block;">JAWA TENGAH</p></span>
                                </th>

                                <th rowspan="2" colspan="3" style="background-color: #EBF1F1; align-item: right;padding-left: 100px;"><img src="https://www.starjogja.com/assets/2016/10/PMI.png" alt="Logo PMI" style="width: 280; padding: 0px 20px"></th>
                            </tr>
                            <tr>
                                <th style="background-color: #860200;"></th>
                                <th colspan="3" style="background-color: #860200;color: white; font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; font-size: 28px;white-space: nowrap; text-align:center">LAPORAN TRIWULAN</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <td colspan="12" style="background-color: #860200;color: white; font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; font-size: 14px;white-space: nowrap; padding-left: 2">Posko PMI Jawa Tengah</td>
                        </tfoot>

                        <tbody>

                            <tr>
                                <td colspan="5" rowspan="10">
                                    <div id="map"></div>
                                </td>
                                <td colspan="4" rowspan="2" style="background-color: #650103;">
                                    <div id="informasi">
                                        Kejadian : <span style="font-weight: 900">{{ $kjd->nama_kejadian }}</span> <br>
Lokasi : <span style="font-weight: 900">{{ $kjd->lokasi }}</span> <br>
Waktu Kejadian : <span style="font-weight: 900">{{ $kjd->waktu_kejadian }}</span> <br><br>
<span style="font-size: 14px"><span style="font-weight: 900; text-align:right">UPDATE</span> {{ $kjd->update }}</span><br><br>
</div>
</td>
<td colspan="3" style="background-color: #E91A20;"><span style="color: #FFFFFF; font-family: 'Bebas Neue', sans-serif; font-style: normal; font-weight: 300; font-size: 28px; padding: 5px 20px; display: inline-block; width:100%">JUMLAH LAYANAN PER KECAMATAN</span></td>
</tr>

<tr>
    <td colspan="3" rowspan="4">
        <div class="graph-container" id="graph-container">
    </td>
</tr>

<tr>
    <td colspan="4" style="background-color: #E91A20;"><span style="color: #FFFFFF; font-family: 'Bebas Neue', sans-serif; font-style: normal; font-weight: 300; font-size: 28px; padding: 5px 20px; display: inline-block; width: 100%;">DATA KORBAN SEMENTARA</span></td>

</tr>

<tr>
    <td rowspan="2"><i class="fa-solid fa-person-walking-dashed-line-arrow-right icon" style="color: #bc202d;"></i></td>
    <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap">MENGUNGSI</td>
    <td rowspan="2"><i class="fa-solid fa-tent-arrows-down icon" style="color: #bc202d;"></i></td>
    <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">PENGUNGSIAN</td>
</tr>

<tr>
    <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap; color:#bc202d;">
        @if($kjd->mengungsi !== 0)
        {{ $kjd->mengungsi }} ORANG
        @elseif($kjd->mengungsi === 0)
        0 ORANG
        @endif
    </td>
    <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap; color:#bc202d;"> TITIK</td>
</tr>

<tr>
    <td rowspan="2"><i class="fa-solid fa-user-injured icon" style="color: #bc202d;"></i></td>
    <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">LUKA-LUKA</td>
    <td rowspan="2"><i class="fa-solid fa-house-crack icon" style="color: #bc202d;"></i></td>
    <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;"">RUMAH RUSAK</td>
                                <td colspan=" 3" rowspan="6" style="
                                border-right-width: 0px;
                                padding-right: 0px;
                                border-top-width: 0px;
                                border-left-width: 0px;
                                border-bottom-width: 0px;
                                padding-left: 0px;
                                padding-top: 0px;
                                padding-bottom: 0px;
                                "><img src="https://tangerangkota.go.id/files/berita/29821siap-hadapi-bencana-pmi-kota-tangerang-gelar-simulasi-kebakaran-29821.jpeg" style="width: 100%"></td>
</tr>
<tr>
    <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap; color:#bc202d;">
        @if($kjd->luka_berat + $kjd->luka_ringan !== 0)
        {{ $kjd->luka_berat + $kjd->luka_ringan }} JIWA
        @elseif($kjd->luka_berat + $kjd->luka_ringan === 0)
        0 JIWA
        @endif
    </td>
    <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap; color:#bc202d;">
        @if($kjd->rusak_berat + $kjd->rusak_ringan + $kjd->rusak_sedang !== 0)
        {{ $kjd->rusak_berat + $kjd->rusak_ringan + $kjd->rusak_sedang }} BANGUNAN
        @elseif($kjd->rusak_berat + $kjd->rusak_ringan + $kjd->rusak_sedang === 0)
        0 BANGUNAN
        @endif
    </td>
</tr>

<tr>
    <td colspan="4" rowspan="3" style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap; color:#bc202d;">KEBUTUHAN MENDESAK <br><span style="color: #000000">
            @if($kjd->kebutuhan !== '-')
            {{ $kjd->kebutuhan }}
            @elseif($kjd->kebutuhan === '-')
            BELUM ADA
            @endif
        </span></td>
</tr>

<tr>

</tr>

<tr>
</tr>

<tr>
    <td rowspan="3" style="writing-mode: vertical-rl; text-orientation: sideways; white-space: nowrap; text-align: center; font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800;">PELAYANAN PMI</td>
    <td style="width: 20px;height: 20px; text-align: center"><i class="fa-solid fa-droplet icon" style="color: #bc202d;"></i></td>
    <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">DISTRIBUSI AIR </br>BERSIH</br><span style="color:#bc202d;"></br>
            @if ($kjd->jenis_distribusi_layanan === 'Layanan Air Bersih')
            {{ $kjd->jumlah }} {{ $kjd->unit }}
            @elseif( $kjd->jumlah != 0)
            0 LITER
            @endif
        </span></td>
    <td style="width: 20px;height: 20px; text-align: center"><i class="fa-solid fa-kitchen-set icon" style="color: #bc202d;"></i></td>
    <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">FOOD ITEM</br><span style="color:#bc202d;"></br>
            @if ($kjd->jenis_distribusi_layanan === 'Food Item')
            {{ $kjd->jumlah }} {{ $kjd->unit }}
            @elseif( $kjd->jumlah === 0)
            0 KK
            @endif
        </span></td>
    <td colspan="4" style="background-color: #E91A20;"><span style="color: #FFFFFF; font-family: 'Bebas Neue', sans-serif; font-style: normal; font-weight: 300; font-size: 28px; padding: 5px 20px; display: inline-block; width: 100%;">PENERIMA MANFAAT</span></td>

    <input type="hidden" id="perempuan" value="{{ $kjd->jumlah_perempuan }}">
    <input type="hidden" id="laki_laki" value="{{ $kjd->jumlah_laki }}">

    <input type="hidden" id="latitude" value="{{ $kjd->latitude }}">
    <input type="hidden" id="longitude" value="{{ $kjd->longitude }}">
</tr>

<tr>
    <td style="width: 20px;height: 40px; text-align: center"><i class="fa-solid fa-handshake-angle icon" style="color: #bc202d;"></i></td>
    <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">RELAWAN</br><span style="color:#bc202d;"></br>
            @if( $kjd->relawan_pmi !== 0)
            {{ $kjd->relawan_pmi }} ORANG
            @elseif( $kjd->relawan_pmi === 0)
            0 ORANG
            @endif
        </span></td>
    <td style="width: 20px;height: 40px; text-align: center"><i class="fa-solid fa-user-doctor icon" style="color: #bc202d;"></i></td>
    <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">TENAGA</br>KESEHATAN</br><span style="color:#bc202d;"></br>
            @if( $kjd->medis + $kjd->paramedis !== 0)
            {{ $kjd->medis + $kjd->paramedis }} ORANG
            @elseif( $kjd->medis + $kjd->paramedis === 0)
            0 ORANG
            @endif
        </span></td>
    <td colspan="4" rowspan="2">
        <div class="chart-container">
            <canvas id="genderChart" width="150" height="150"></canvas>
        </div>
    </td>
    <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800;">Bank Mandiri<span style="color:#bc202d;"></br>070-00-0011601-7</span></br><span style="font-size: 10px"></br>a/n Palang Merah Indonesia</span></td>
    <td valign="top" style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800;">Bank BCA<span style="color:#bc202d;"></br>206.300668.8</span></br><span style="font-size: 10px"></br>a/n Kantor PMI Pusat</span></td>
    <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800;">Bank BRI<span style="color:#bc202d;"></br>070-00-0011601-7</span></br><span style="font-size: 10px"></br>a/n Palang Merah Indonesia</span></td>
</tr>

<tr>
    <td style="width: 20px;height: 40px; text-align: center"><i class="fa-solid fa-suitcase-medical icon" style="color: #bc202d;"></i></td>
    <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">PERTOLONGAN</br>PERTAMA</br>DARURAT DAN</br>EVAKUASI</BR>BENCANA</td>
    <td style="width: 20px;height: 40px; text-align: center"><i class="fa-solid fa-tents icon" style="color: #bc202d;"></i></td>
    <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">HUNIAN DARURAT</td>
    <td colspan="3" style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 300; white-space: nowrap; color:#bc202d;font-size:18px"><span style="color:black">klik </span><span style="text-decoration: underline; font-weight:800">donasi.pmi.or.id</span><br><span style="color: black">your <span style="font-weight:800">small donation</span> is a <span style="font-weight:800">big opportunity</span> to us</span></td>
</tr>
</tbody>

</table>
</div> --}}

<!-- TABEL LAPORAN TRIWULAN -->
<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="basicExample" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th rowspan="2">Tanggal Kejadian</th>
                            <th rowspan="2">Tanggal Update</th>
                            <th rowspan="2">Kejadian</th>
                            {{-- <th rowspan="2">Status</th> --}}
                            <th rowspan="2">Lokasi</th>
                            <th rowspan="2">Kelurahan</th>
                            <th rowspan="2">Kecamatan</th>
                            <th colspan="7" style="text-align:center">Total</th>
                            <th rowspan="2">Action</th>
                        </tr>
                        <tr>
                            <!-- <th>Pengungsi</th> -->
                            <th>Korban</th>
                            <th>Kerusakan Rumah</th>
                            <th>Kerusakan Fasilitas</th>
                            <th>Kerusakan Infrastruktur</th>
                            <th>Personil</th>
                            <th>TSR</th>
                            <th>TDB</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($exsum as $kjd)
                        <tr>
                            <td>{{ $kjd->waktu_kejadian }}</td>
                            @if ($kjd->laporan_terbaru)
                            <td>{{ $kjd->laporan_terbaru->update }}</td>
                            <td>{{ $kjd->nama_kejadian }}</td>
                            <td>{{ $kjd->lokasi }}</td>
                            <td>{{ $kjd->kelurahan }}</td>
                            <td>{{ $kjd->kecamatan }}</td>
                            <td>{{ optional($kjd->laporan_terbaru->dampak->korbanTerdampak)->jmlh_jiwa }}</td> <!-- KORBAN TERDAMPAK -->
                            <td>{{ optional($kjd->laporan_terbaru->dampak->kerusakanRumah)->rusak_ringan + optional($kjd->laporan_terbaru->dampak->kerusakanRumah)->rusak_sedang + optional($kjd->laporan_terbaru->dampak->kerusakanRumah)->rusak_berat }}</td> <!-- KERUSAKAN RUMAH -->
                            <td>{{ $kjd->laporan_terbaru->dampak->kerusakanFasilitas->sekolah + $kjd->laporan_terbaru->dampak->kerusakanFasilitas->tempat_ibadah + $kjd->laporan_terbaru->dampak->kerusakanFasilitas->rumah_sakit + $kjd->laporan_terbaru->dampak->kerusakanFasilitas->pasar + $kjd->laporan_terbaru->dampak->kerusakanFasilitas->gedung_pemerintah }}</td> <!-- KERUSAKAN FASILITAS -->
                            <td>{{ optional($kjd->laporan_terbaru->dampak->kerusakanInfrastruktur)->deskripsi_kerusakan }}</td> <!-- KERUSAKAN INFRASTRUKTUR -->
                            <td>{{ optional($kjd->laporan_terbaru->mobilisasi->personil)->pengurus + optional($kjd->laporan_terbaru->mobilisasi->personil)->staf_markas + optional($kjd->laporan_terbaru->mobilisasi->personil)->relawan_pmi + optional($kjd->laporan_terbaru->mobilisasi->personil)->sukarelawan_spesialis }}</td>
                            <td>{{ optional($kjd->laporan_terbaru->mobilisasi->tsr)->medis + optional($kjd->laporan_terbaru->mobilisasi->tsr)->paramedis + optional($kjd->laporan_terbaru->mobilisasi->tsr)->relief + optional($kjd->laporan_terbaru->mobilisasi->tsr)->logistics + optional($kjd->laporan_terbaru->mobilisasi->tsr)->watsan + optional($kjd->laporan_terbaru->mobilisasi->tsr)->it_telekom + optional($kjd->laporan_terbaru->mobilisasi->tsr)->sheltering }}</td>
                            <td>{{ optional($kjd->laporan_terbaru->mobilisasi->tdb)->kend_ops + optional($kjd->laporan_terbaru->mobilisasi->tdb)->truk_angkutan + optional($kjd->laporan_terbaru->mobilisasi->tdb)->truk_tangki + optional($kjd->laporan_terbaru->mobilisasi->tdb)->double_cabin + optional($kjd->laporan_terbaru->mobilisasi->tdb)->alat_du + optional($kjd->laporan_terbaru->mobilisasi->tdb)->ambulans +
                    optional($kjd->laporan_terbaru->mobilisasi->tdb)->alat_watsan + optional($kjd->laporan_terbaru->mobilisasi->tdb)->rs_lapangan + optional($kjd->laporan_terbaru->mobilisasi->tdb)->alat_pkdd + optional($kjd->laporan_terbaru->mobilisasi->tdb)->gudang_lapangan + optional($kjd->laporan_terbaru->mobilisasi->tdb)->posko_aju + optional($kjd->laporan_terbaru->mobilisasi->tdb)->alat_it_lapangan }}</td>
                            <td><a href="{{ url('/generate-lapsit/' . $kjd->laporan_terbaru->id_laporan) }}" style="color:red" target="_blank">Lihat Detail</a></td>
                            @else
                            <td colspan="14">Tidak ada laporan terbaru.</td>
                            @endif
                        </tr>
                        @empty
                        <tr>
                            <td colspan="14">Tidak ada data kejadian.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    // Expose chart data to global context
    window.barData = @json($barData);
</script>
<script>
    // Expose chart data to global context
    window.chartData = @json($chartData);
</script>
<!-- Row ends -->
@endsection
