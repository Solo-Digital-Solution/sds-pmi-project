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
                    <div class="form-group">
                        <div class="input-group">
                            <input type="date" class="form-control" id="startDate" placeholder="Masukkan Tanggal Awal">
                            <input type="date" class="form-control" id="endDate" placeholder="Tanggal Akhir">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Generate Laporan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-group custom-btn-group float-right" role="group">
                    <button type="button" class="btn btn-primary btn-sm">Export PDF</button>
                    <button type="button" class="btn btn-primary btn-sm">Export Excel</button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
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
                                <td>Juni</td>
                                <td>2024</td>
                                <td>Banjir</td>
                                <td>Laweyan</td>
                                <td>2024/06/06</td>
                                <td>2024/11/06</td>
                                <td>
                                    <span class="badge badge-pill badge-primary">Aktif</span>
                                </td>
                                <td>150</td>
                                <td>5</td>
                                <td>20</td>
                                <td>3</td>
                                <td>200000</td>
                                <td>9000</td>
                                <td><a href="#" style="color: blue;">Lihat Laporan Situasi</a></td>
                            </tr>
                            <tr>
                                <td>Februari</td>
                                <td>2023</td>
                                <td>Gempa Bumi</td>
                                <td>Banjarsari</td>
                                <td>2023/02/12</td>
                                <td>2023/02/15</td>
                                <td>
                                    <span class="badge badge-pill badge-success">Selesai</span>
                                </td>
                                <td>200</td>
                                <td>15</td>
                                <td>50</td>
                                <td>2</td>
                                <td>200000</td>
                                <td>9000</td>
                                <td><a href="#" style="color: blue;">Lihat Laporan Situasi</a></td>
                            </tr>
                            <tr>
                                <td>Juni</td>
                                <td>2024</td>
                                <td>Pohon Tumbang</td>
                                <td>Jebres</td>
                                <td>2024/06/06</td>
                                <td>2024/06/07</td>
                                <td>
                                    <span class="badge badge-pill badge-primary">Aktif</span>
                                </td>
                                <td>0</td>
                                <td>1</td>
                                <td>2</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td><a href="#" style="color: blue;">Lihat Laporan Situasi</a></td>
                            </tr>
                            <tr>
                                <td>Juni</td>
                                <td>2024</td>
                                <td>Kebakaran</td>
                                <td>Serengan</td>
                                <td>2024/11/06</td>
                                <td>2024/11/06</td>
                                <td>
                                    <span class="badge badge-pill badge-primary">Aktif</span>
                                </td>
                                <td>50</td>
                                <td>0</td>
                                <td>5</td>
                                <td>1</td>
                                <td>100000</td>
                                <td>5000</td>
                                <td><a href="#" style="color: blue;">Lihat Laporan Situasi</a></td>
                            </tr>
                            <tr>
                                <td>Mei</td>
                                <td>2023</td>
                                <td>Tanah Longsor</td>
                                <td>Pasar Kliwon</td>
                                <td>2023/05/22</td>
                                <td>2023/05/24</td>
                                <td>
                                    <span class="badge badge-pill badge-success">Selesai</span>
                                </td>
                                <td>30</td>
                                <td>2</td>
                                <td>10</td>
                                <td>1</td>
                                <td>50000</td>
                                <td>2000</td>
                                <td><a href="#" style="color: blue;">Lihat Laporan Situasi</a></td>
                            </tr>
                            <tr>
                                <td>Juni</td>
                                <td>2023</td>
                                <td>Angin Puting Beliung</td>
                                <td>Laweyan</td>
                                <td>2023/06/15</td>
                                <td>2023/06/16</td>
                                <td>
                                    <span class="badge badge-pill badge-success">Selesai</span>
                                </td>
                                <td>20</td>
                                <td>1</td>
                                <td>4</td>
                                <td>0</td>
                                <td>30000</td>
                                <td>1000</td>
                                <td><a href="#" style="color: blue;">Lihat Laporan Situasi</a></td>
                            </tr>
                            <tr>
                                <td>Juli</td>
                                <td>2023</td>
                                <td>Gempa Bumi</td>
                                <td>Banjarsari</td>
                                <td>2023/07/08</td>
                                <td>2023/07/10</td>
                                <td>
                                    <span class="badge badge-pill badge-success">Selesai</span>
                                </td>
                                <td>300</td>
                                <td>20</td>
                                <td>60</td>
                                <td>5</td>
                                <td>250000</td>
                                <td>10000</td>
                                <td><a href="#" style="color: blue;">Lihat Laporan Situasi</a></td>
                            </tr>
                            <tr>
                                <td>Agustus</td>
                                <td>2023</td>
                                <td>Kekeringan</td>
                                <td>Jebres</td>
                                <td>2023/08/12</td>
                                <td>2023/08/20</td>
                                <td>
                                    <span class="badge badge-pill badge-success">Selesai</span>
                                </td>
                                <td>100</td>
                                <td>0</td>
                                <td>30</td>
                                <td>0</td>
                                <td>150000</td>
                                <td>6000</td>
                                <td><a href="#" style="color: blue;">Lihat Laporan Situasi</a></td>
                            </tr>
                            <tr>
                                <td>September</td>
                                <td>2023</td>
                                <td>Gunung Meletus</td>
                                <td>Serengan</td>
                                <td>2023/09/05</td>
                                <td>2023/09/10</td>
                                <td>
                                    <span class="badge badge-pill badge-success">Selesai</span>
                                </td>
                                <td>400</td>
                                <td>25</td>
                                <td>70</td>
                                <td>8</td>
                                <td>300000</td>
                                <td>15000</td>
                                <td><a href="#" style="color: blue;">Lihat Laporan Situasi</a></td>
                            </tr>
                            <tr>
                                <td>Oktober</td>
                                <td>2023</td>
                                <td>Banjir</td>
                                <td>Pasar Kliwon</td>
                                <td>2023/10/20</td>
                                <td>2023/10/25</td>
                                <td>
                                    <span class="badge badge-pill badge-success">Selesai</span>
                                </td>
                                <td>250</td>
                                <td>10</td>
                                <td>40</td>
                                <td>3</td>
                                <td>200000</td>
                                <td>9000</td>
                                <td><a href="#" style="color: blue;">Lihat Laporan Situasi</a></td>
                            </tr>
                            <tr>
                                <td>November</td>
                                <td>2023</td>
                                <td>Tanah Longsor</td>
                                <td>Banjarsari</td>
                                <td>2023/11/11</td>
                                <td>2023/11/13</td>
                                <td>
                                    <span class="badge badge-pill badge-success">Selesai</span>
                                </td>
                                <td>50</td>
                                <td>3</td>
                                <td>15</td>
                                <td>1</td>
                                <td>75000</td>
                                <td>3000</td>
                                <td><a href="#" style="color: blue;">Lihat Laporan Situasi</a></td>
                            </tr>
                            <tr>
                                <td>Desember</td>
                                <td>2023</td>
                                <td>Angin Puting Beliung</td>
                                <td>Laweyan</td>
                                <td>2023/12/18</td>
                                <td>2023/12/19</td>
                                <td>
                                    <span class="badge badge-pill badge-success">Selesai</span>
                                </td>
                                <td>70</td>
                                <td>2</td>
                                <td>8</td>
                                <td>0</td>
                                <td>50000</td>
                                <td>2000</td>
                                <td><a href="#" style="color: blue;">Lihat Laporan Situasi</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row ends -->
@endsection