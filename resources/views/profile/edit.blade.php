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
        <div class="col-sm-4">
            <div class="right-actions">
                <span class="last-login">Last Login: 5 minutes ago</span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row gutters">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Detail Profil Anda</div>
            <div class="card-body text-center position-relative">
                <img src="{{ asset('img/taehyung.jpg') }}" width="30%" alt="Profile Picture">
                <a href="#" class="position-absolute" style="top: 50%; left: 50%; transform: translate(170%, 470%);">
                    <i class="icon-edit" style="background-color:red; padding:10px; color: white; width: 100px;"></i>
                </a>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="fullName" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col">
                        <input type="text" value="Taehyung" class="form-control" id="fullName" placeholder="Nama Lengkap">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-3 col-form-label">Username</label>
                    <div class="col">
                        <input type="text" value="taehyung123" class="form-control" id="username" placeholder="Username">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="user_id" class="col-sm-3 col-form-label">ID Pegawai</label>
                    <div class="col">
                        <input type="text" value="12345678" class="form-control" id="user_id" placeholder="ID Pegawai">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col">
                        <input type="email" value="taehyung@example.com" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-3 col-form-label">Nomor Telepon</label>
                    <div class="col">
                        <input type="text" value="081234567890" class="form-control" id="phone" placeholder="Nomor Telepon">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col">
                        <input type="text" value="Jalanin Aja Dulu No. 123, Solo" class="form-control" id="address" placeholder="Alamat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gender" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col">
                        <input type="text" value="Laki-laki" class="form-control" id="gender" placeholder="Jenis Kelamin">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="goldar" class="col-sm-3 col-form-label">Golongan Darah</label>
                    <div class="col">
                        <input type="text" value="A" class="form-control" id="goldar" placeholder="Golongan Darah">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="role" class="col-sm-3 col-form-label">Jabatan</label>
                    <div class="col">
                        <input type="text" value="Sukarelawan" class="form-control" id="role" placeholder="Jabatan">
                    </div>
                </div>
                <div class="d-flex justify-content-center w-100 py-1">
                    <a href="">
                        <button type="submit" class="btn btn-primary btn-lg">Ubah Profil</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection