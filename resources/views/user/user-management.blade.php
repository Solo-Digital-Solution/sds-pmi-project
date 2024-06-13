@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-laptop_windows"></i>
            </div>
            <div class="page-title">
                <h5>Manajemen Akun</h5>
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

<!-- UBAH UBAH DI BAGIAN SINI AJAA-->
@section('content')
<div class="row gutters">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Manajemen Akun</div>
            <div class="card-body">
                <div class="d-flex justify-content-start w-100">
                    <a href="{{ url('/user-management/create')  }}"><button type="button" class="btn btn-primary btn-lg mr-auto"><i class="icon-plus2"></i> Tambah Akun</button></a> 
                </div>
            </div>
            <div class="card-body">
                <table id="basicExample" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>ID Pegawai</th>
                            <th>Role</th>
                            <th>Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $us)
                        <tr>
                            <td>{{ $us->name }}</td>
                            <td>{{ $us->email }}</td>
                            <td>{{ $us->user_id }}</td>
                            <td>{{ $us->role_name}}</td>
                            <td>{{ $us->no_telp }}</td>
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


@endsection
