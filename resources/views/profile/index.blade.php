@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-laptop_windows"></i>
            </div>
            <div class="page-title">
                <h5>Profile Anda</h5>
                <h6 class="sub-heading">Selamat datang di Sistem Penanggulangan Bencana PMI Solo</h6>
            </div>
        </div>
        <!-- <div class="col-sm-4">
            <div class="right-actions">
                <span class="last-login">Last Login: 5 minutes ago</span>
            </div>
        </div> -->
    </div>
</div>
@endsection

@section('content')
<div class="row gutters">
    @if (Auth::check() && Auth::user()->roles->isEmpty())
    <div class="col-sm-12">
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <i class="icon-info-large"></i> <strong>Halo, {{ Auth::user()->name }}!</strong>
            Akun Anda sedang dalam pengecekan oleh HRD. Mohon menunggu!
        </div>
    </div>
    @endif
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Detail Profil Anda</div>
            <!-- <div class="card-body text-center position-relative" style="display: inline-block;">
                <img src="{{ asset('img/taehyung.jpg') }}" width="15%" alt="Profile Picture">
            </div> -->
            <div class="card-body">
                <div class="form-group row">
                    <label for="fullName" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col">
                        <input type="text" value="{{ Auth::user()->name }}" class="form-control" id="fullName" placeholder="Nama Lengkap" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-3 col-form-label">Username</label>
                    <div class="col">
                        <input type="text" value="{{ Auth::user()->username }}" class="form-control" id="username" placeholder="Username" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="user_id" class="col-sm-3 col-form-label">ID Pegawai</label>
                    <div class="col">
                        <input type="text" value="{{ Auth::user()->user_id }}" class="form-control" id="user_id" placeholder="ID Pegawai" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col">
                        <input type="email" value="{{ Auth::user()->email }}" class="form-control" id="email" placeholder="Email" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-3 col-form-label">Nomor Telepon</label>
                    <div class="col">
                        <input type="text" value="{{ Auth::user()->no_telp }}" class="form-control" id="phone" placeholder="Nomor Telepon" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col">
                        <input type="text" value="{{ Auth::user()->alamat }}" class="form-control" id="address" placeholder="Alamat" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gender" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col">
                        <input type="text" value="{{ Auth::user()->gender }}" class="form-control" id="gender" placeholder="Jenis Kelamin" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="goldar" class="col-sm-3 col-form-label">Golongan Darah</label>
                    <div class="col">
                        <input type="text" value="{{ Auth::user()->goldar }}" class="form-control" id="goldar" placeholder="Golongan Darah" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection