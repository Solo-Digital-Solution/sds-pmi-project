@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-laptop_windows"></i>
            </div>
            <div class="page-title">
                <h5>Kejadian</h5>
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
            <div class="card-header">Kejadian</div>
            <div class="card-body">
                <div class="d-flex justify-content-start w-100">
                    <a href="{{ url('/tambah-kejadian')  }}"><button type="button" class="btn btn-primary btn-lg mr-auto"><i class="icon-plus2"></i> Tambah Kejadian</button></a>
                </div>
            </div>
            <div class="card-body">
                <table id="basicExample" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Kejadian</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Lokasi</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kejadians as $kejadian )
                        <tr>
                            <td>{{ $kejadian['nama_kejadian'] }}</td>
                            <td>{{ $kejadian['waktu_kejadian'] }}</td>
                            <td>{{ $kejadian['status'] }}</td>
                            <td>{{ $kejadian['lokasi'] }}</td>
                            <td>
                                <a href="{{ route('kejadian.edit', $kejadian['id_kejadian']) }}" style="color: green;">Edit</a>
                                <a href="{{ $kejadian['id_kejadian'] }}" style="color: blue;">Lihat Detail</a>
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
