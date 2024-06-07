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
<!-- BEGIN .main-content -->
<div class="main-content">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Basic Datatable</div>
                <div class="card-body">
                    <table id="basicExample" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Bulan</th>
                                <th>Tahun</th>
                                <th>Nama Kejadian</th>
                                <th>Kecamatan</th>
                                <th>Tanggal Laporan</th>
                                <th>Tanggal Selesai</th>
                                <th>Status</th>
                                <th>Mengungsi</th>
                                <th>Luka-luka</th>
                                <th>Rumah Rusak</th>
                                <th>Pengungsian</th>
                                <th>Distribusi Air (Liter)</th>
                                <th>Dapur Umum (Pack)</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Januari</td>
                                <td>2023</td>
                                <td>Banjir</td>
                                <td>Laweyan</td>
                                <td>2023/01/05</td>
                                <td>2023/01/10</td>
                                <td>Selesai</td>
                                <td>150</td>
                                <td>5</td>
                                <td>20</td>
                                <td>3</td>
                                <td>200000</td>
                                <td>9000</td>
                                <td><a href="#">Lihat Laporan Situasi</a></td>
                            </tr>
                            <tr>
                                <td>Februari</td>
                                <td>2023</td>
                                <td>Gempa Bumi</td>
                                <td>Banjarsari</td>
                                <td>2023/02/12</td>
                                <td>2023/02/15</td>
                                <td>Selesai</td>
                                <td>200</td>
                                <td>15</td>
                                <td>50</td>
                                <td>2</td>
                                <td>200000</td>
                                <td>9000</td>
                                <td><a href="#">Lihat Laporan Situasi</a></td>
                            </tr>
                            <tr>
                                <td>Maret</td>
                                <td>2023</td>
                                <td>Pohon Tumbang</td>
                                <td>Jebres</td>
                                <td>2024/06/06</td>
                                <td>2024/06/07</td>
                                <td>Aktif</td>
                                <td>0</td>
                                <td>1</td>
                                <td>2</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td><a href="#">Lihat Laporan Situasi</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Row ends -->
    @endsection