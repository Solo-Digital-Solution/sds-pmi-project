@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-laptop_windows"></i>
            </div>
            <div class="page-title">
                <h5>Laporan Situasi</h5>
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
            <div class="card-header">Laporan Situasi</div>
            <div class="card-body">
                <div class="d-flex justify-content-start w-100">
                    @if(!$laporanExist)
                        <a href="{{ route('laporan.createAssessment', ['id_kejadian' => $id_kejadian]) }}">
                            <button type="button" class="btn btn-primary btn-lg mr-auto"><i class="icon-plus2"></i> Tambah Assessment</button>
                        </a>
                    @endif
                    @if($isValidated)
                        <a href="{{ route('laporan.create', ['id_kejadian' => $id_kejadian]) }}">
                            <button type="button" class="btn btn-primary btn-lg ml-3"><i class="icon-plus2"></i> Tambah Lapsit</button>
                        </a>
                    @endif
                </div>
            </div>
            <div class="card-body">
                <table id="basicExample" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Lapsit</th>
                            <th>Tanggal Pembuatan Lapsit</th>
                            <th>Berkas Lapsit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($laporans as $laporan)
                        <tr>
                            <td>{{ $laporan['nama_laporan'] }}</td>
                            <td>{{ $laporan['update'] }}</td>
                            <td>
                                <a href="{{ url('/generate-lapsit/' . $laporan['id_laporan'])}}" style="color: green;">Download</a>
                            </td>
                            <td>
                                <a href="{{ route('laporan.view', ['id_laporan' => $laporan['id_laporan']]) }}" style="color: blue;">Lihat Detail</a></br>
                                <a href="{{url('/flash-report/' . $laporan['id_laporan'])}}" style="color: red;">Flash Report</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Row ends -->

</div>
@endsection