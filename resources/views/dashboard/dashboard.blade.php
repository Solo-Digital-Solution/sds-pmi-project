@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-laptop_windows"></i>
            </div>
            <div class="page-title">
                <h5>Dashboard</h5>
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
    <div class="col-md-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="stats-widget">
                    <div class="stats-widget-header">
                        <i class="icon-new_releases"></i>
                    </div>
                    <div class="stats-widget-body">
                        <!-- Row start -->
                        <ul class="row no-gutters">
                            <li class="col-sm-6 col">
                                <h4 class="title">Kejadian Aktif</h4>
                            </li>
                            <li class="col-sm-6 col">
                                <h4 class="total">2</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="stats-widget">
                    <div class="stats-widget-header">
                        <i class="icon-clipboard3"></i>
                    </div>
                    <div class="stats-widget-body">
                        <!-- Row start -->
                        <ul class="row no-gutters">
                            <li class="col-sm-6 col">
                                <h4 class="title">Assessment</h4>
                            </li>
                            <li class="col-sm-6 col">
                                <h4 class="total">2</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="stats-widget">
                    <!-- <a href="#" class="stats-label" data-toggle="tooltip" data-placement="top" title="New Followers">47</a> -->
                    <div class="stats-widget-header">
                        <i class="icon-stats-bars"></i>
                    </div>
                    <div class="stats-widget-body">
                        <!-- Row start -->
                        <ul class="row no-gutters">
                            <li class="col-sm-6 col">
                                <h4 class="title"><a href="{{ url('/kejadian') }}">Buat Kejadian</a></h4>
                            </li>
                            <li class="col-sm-6 col">
                                <h4 class="total">2</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row gutters">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Daftar Kejadian Aktif</div>
            <div class="card-body">
                <table id="basicExample" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Kejadian</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Lokasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lorem Ipsum</td>
                            <td>12.06.2024 17:08</td>
                            <td><button type="button" class="btn btn-warning btn-rounded">Sedang berlangsung</button></td>
                            <td>Jebres</td>
                            <td><a href="" class="text-primary" data-toggle="modal" data-target="#detailModal">Lihat detail</a></td>
                        </tr>
                        <tr>
                            <td>Lorem Ipsum</td>
                            <td>12.06.2024 17:08</td>
                            <td><button type="button" class="btn btn-warning btn-rounded">Sedang berlangsung</button></td>
                            <td>Jebres</td>
                            <td><a href="" class="text-primary" data-toggle="modal" data-target="#detailModal">Lihat detail</a></td>
                        </tr>
                        <tr>
                            <td>Lorem Ipsum</td>
                            <td>12.06.2024 17:08</td>
                            <td><button type="button" class="btn btn-success btn-rounded">Selesai</button></td>
                            <td>Jebres</td>
                            <td><a href="" class="text-primary" data-toggle="modal" data-target="#detailModal">Lihat detail</a></td>
                        </tr>
                        <tr>
                            <td>Lorem Ipsum</td>
                            <td>12.06.2024 17:08</td>
                            <td><button type="button" class="btn btn-success btn-rounded">Selesai</button></td>
                            <td>Jebres</td>
                            <td><a href="" class="text-primary" data-toggle="modal" data-target="#detailModal">Lihat detail</a></td>
                        </tr>
                        <tr>
                            <td>Lorem Ipsum</td>
                            <td>12.06.2024 17:08</td>
                            <td><button type="button" class="btn btn-success btn-rounded">Selesai</button></td>
                            <td>Jebres</td>
                            <td><a href="" class="text-primary" data-toggle="modal" data-target="#detailModal">Lihat detail</a></td>
                        </tr>
                        <tr>
                            <td>Lorem Ipsum</td>
                            <td>12.06.2024 17:08</td>
                            <td><button type="button" class="btn btn-success btn-rounded">Selesai</button></td>
                            <td>Jebres</td>
                            <td><a href="" class="text-primary" data-toggle="modal" data-target="#detailModal">Lihat detail</a></td>
                        </tr>
                        <tr>
                            <td>Lorem Ipsum</td>
                            <td>12.06.2024 17:08</td>
                            <td><button type="button" class="btn btn-success btn-rounded">Selesai</button></td>
                            <td>Jebres</td>
                            <td><a href="" class="text-primary" data-toggle="modal" data-target="#detailModal">Lihat detail</a></td>
                        </tr>
                        <tr>
                            <td>Lorem Ipsum</td>
                            <td>12.06.2024 17:08</td>
                            <td><button type="button" class="btn btn-success btn-rounded">Selesai</button></td>
                            <td>Jebres</td>
                            <td><a href="" class="text-primary" data-toggle="modal" data-target="#detailModal">Lihat detail</a></td>
                        </tr>
                        <tr>
                            <td>Lorem Ipsum</td>
                            <td>12.06.2024 17:08</td>
                            <td><button type="button" class="btn btn-success btn-rounded">Selesai</button></td>
                            <td>Jebres</td>
                            <td><a href="" class="text-primary" data-toggle="modal" data-target="#detailModal">Lihat detail</a></td>
                        </tr>
                        <tr>
                            <td>Lorem Ipsum</td>
                            <td>12.06.2024 17:08</td>
                            <td><button type="button" class="btn btn-success btn-rounded">Selesai</button></td>
                            <td>Jebres</td>
                            <td><a href="" class="text-primary" data-toggle="modal" data-target="#detailModal">Lihat detail</a></td>
                        </tr>
                        <tr>
                            <td>Lorem Ipsum</td>
                            <td>12.06.2024 17:08</td>
                            <td><button type="button" class="btn btn-success btn-rounded">Selesai</button></td>
                            <td>Jebres</td>
                            <td><a href="" class="text-primary" data-toggle="modal" data-target="#detailModal">Lihat detail</a></td>
                        </tr>
                        <tr>
                            <td>Lorem Ipsum</td>
                            <td>12.06.2024 17:08</td>
                            <td><button type="button" class="btn btn-success btn-rounded">Selesai</button></td>
                            <td>Jebres</td>
                            <td><a href="" class="text-primary" data-toggle="modal" data-target="#detailModal">Lihat detail</a></td>
                        </tr>
                        <tr>
                            <td>Lorem Ipsum</td>
                            <td>12.06.2024 17:08</td>
                            <td><button type="button" class="btn btn-success btn-rounded">Selesai</button></td>
                            <td>Jebres</td>
                            <td><a href="" class="text-primary" data-toggle="modal" data-target="#detailModal">Lihat detail</a></td>
                        </tr>
                        <tr>
                            <td>Lorem Ipsum</td>
                            <td>12.06.2024 17:08</td>
                            <td><button type="button" class="btn btn-success btn-rounded">Selesai</button></td>
                            <td>Jebres</td>
                            <td><a href="" class="text-primary" data-toggle="modal" data-target="#detailModal">Lihat detail</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->

<!-- Modal start -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Informasi Lengkap</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>lorem ipsum dolores myawmyawmyaw</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
@endsection