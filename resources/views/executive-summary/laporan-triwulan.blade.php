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
<div class="row gutters">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Laporan Triwulan</div>
            <div class="clearfix m-3">
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
            <!-- TABEL LAPORAN TRIWULAN -->
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
<!-- Row ends -->
@endsection