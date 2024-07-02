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
        <!-- Tombol Kembali ke Daftar Kejadian -->
        <div class="d-flex justify-content-start mb-3">
            <a href="{{ route('kejadian.index') }}" class="btn btn-primary">
                <i class="icon-arrow-left-thick"></i> Kembali
            </a>
        </div>
        <div class="card">
            <div class="card-header">Laporan Situasi</div>
            @can('adm')
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
            @endcan
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
                                <a href="{{ url('/generate-lapsit/' . $laporan['id_kejadian'])}}" target="_blank" style="color: green;">
                                    <button type="button" class="btn btn-success btn-rounded mb-2">Download <i class="icon-download3"></i></button>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('laporan.view', ['id_laporan' => $laporan['id_laporan']]) }}" style="color: blue;">
                                    <button type="button" class="btn btn-info btn-rounded mb-2">Lihat Detail <i class="icon-eye3"></i></button>
                                </a>
                                <a href="{{url('/flash-report/' . $laporan['id_laporan'])}}" style="color: red;">
                                    <button type="button" class="btn btn-warning btn-rounded mb-2">Flash Report <i class="icon-stats-bars"></i></button>
                                </a>
                                <form action="{{ route('laporan.destroy', ['id_laporan' => $laporan['id_laporan']]) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id_kejadian" value="{{ $laporan['id_kejadian'] }}">
                                    <button type="submit" class="btn btn-primary btn-rounded mb-2" onclick="return confirm('Anda yakin ingin menghapus laporan ini?')">Delete <i class="icon-trash2"></i></button>
                                </form>
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
