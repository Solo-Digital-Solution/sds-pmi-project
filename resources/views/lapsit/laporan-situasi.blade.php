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

            @can('skr')
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
                                <a href="{{ url('/generate-lapsit/' . $laporan['id_laporan'])}}" target="_blank" style="color: green;">
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
                                @if ($loop->last)
                                <form id="deleteForm-{{ $laporan['id_laporan'] }}" action="{{ route('laporan.destroy', ['id_laporan' => $laporan['id_laporan']]) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id_kejadian" value="{{ $laporan['id_kejadian'] }}">
                                    <button type="button" class="btn btn-primary btn-rounded mb-2" data-toggle="modal" data-target="#confirmModal" data-id="{{ $laporan['id_laporan'] }}">Delete <i class="icon-trash2"></i></button>
                                </form>
                                @endif

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

<!-- Confirmation Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Konfirmasi Penghapusan Laporan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Anda yakin ingin menghapus laporan ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmDelete">Delete</button>
                </div>
            </div>
        </div>
    </div>

<!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel" style="color: green;">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="color: green;">
                    {{ session('success') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Error Modal -->
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel" style="color: red;">Error</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="color: red;">
                    {{ session('error') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection