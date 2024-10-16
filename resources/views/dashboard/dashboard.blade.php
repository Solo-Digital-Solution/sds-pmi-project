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
                <h6 style="color:gray;">Sistem Informasi Pelaporan Penanggulangan Bencana PMI Surakarta
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
@can('null')
<div class="row gutters">
    <div class="col-sm-12">
        <div class="alert custom alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Halo, {{ Auth::user()->name }}!</strong>
            Mohon menunggu, akun Anda sedang dalam proses verifikasi
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="stats-widget">
                    <div class="stats-widget-header">
                        <i class="icon-stats-bars"></i>
                    </div>
                    <div class="stats-widget-body">
                        <!-- Row start -->
                        <ul class="row no-gutters">
                            <li class="col-sm-6 col">
                                <h4 class="title"><a href="{{ url('/profile') }}">Lihat profil</a></h4>
                            </li>
                            <li class="col-sm-6 col">
                                <h4 class="total">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5" />
                                    </svg>
                                </h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->
@endcan

@if(Auth::user()->can('adm') || Auth::user()->can('skr') || Auth::user()->can('hrd') || Auth::user()->can('exc'))
<!-- Row start -->
<div class="alert custom alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>Halo, {{ Auth::user()->name }}!</strong>
    Anda login sebagai {{ $rolesString }}
</div>
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
                                <h4 class="total">{{ $activeKejadianCount }}</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(Auth::user()->can('adm') || Auth::user()->can('skr'))
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
                                <h4 class="total">{{ $assessmentKejadianCount }}</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @can('adm')
    <div class="col-md-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="stats-widget">
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
                                <h4 class="total">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5" />
                                    </svg>
                                </h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endcan
</div>
<!-- Row start -->

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
                        @foreach($kejadians as $kejadian)
                        <tr>
                            <td>{{ $kejadian['nama_kejadian'] }}</td>
                            <td>{{ $kejadian['waktu_kejadian'] }}</td>
                            <td>
                                <button type="button" class="btn btn-rounded {{ $kejadian['status'] == 'menunggu validasi' ? 'btn-warning' : 'btn-success' }}">
                                    {{ $kejadian['status'] }}
                                </button>
                            </td>
                            <td>{{ $kejadian['kelurahan'] }}</td>
                            <td><a href="/kejadian/view/{{ $kejadian['id_kejadian'] }}" class="text-primary">Lihat detail</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->
@endif

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
                <p></p>
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