@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-laptop_windows"></i>
            </div>
            <div class="page-title">
                <h5>Assessor</h5>
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
            <div class="card-header">Assessor</div>
            <div class="card-body">
            </div>
            <div class="card-body">
                
                <table id="basicExample" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nama Assessor</th>
                            <!-- <th>Kecamatan</th> -->
                            <th>Kelurahan</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($assessor as $as )
                        <tr>
                            <td>{{ $as->name }}</td>
                            <!-- <td>{{ $as->kecamatan }}</td> -->
                            <td>{{ $as->kelurahan }}</td>
                            <td>{{ $as->alamat }}</td>
                            <td>{{ $as->no_telp }}</td>
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
