@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-laptop_windows"></i>
            </div>
            <div class="page-title">
                <h5>Laporan Triwulan</h5>
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
                <div class="btn-group float-left" role="group">
                    <form action="{{ route('search') }}" method="GET" class="mb-3">
                        <div class="row">
                            <div class="col">
                                <input type="date" class="form-control" name="tanggal_awal" placeholder="Tanggal Awal">
                            </div>
                            <div class="col">
                                <input type="date" class="form-control" name="tanggal_akhir" placeholder="Tanggal Akhir">
                            </div>
                            <div class="col">
                                <button class="btn btn-primary" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--<div class="btn-group custom-btn-group float-right" role="group">
                    <button type="button" class="btn btn-primary btn-sm">Export PDF</button>
                    <button type="button" class="btn btn-primary btn-sm">Export Excel</button>
                </div>-->
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basicExample" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Nama Kejadian</th>
                                <th>Kecamatan</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kejadian as $kjd)
                            <tr>
                                <td>{{ $kjd->waktu_kejadian }}</td>
                                <td>{{ $kjd->nama_kejadian }}</td>
                                <td>{{ $kjd->lokasi }}</td>
                                <td>detail</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">Tidak ada data kejadian.</td>
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
