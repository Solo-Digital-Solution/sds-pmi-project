@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-center_focus_strong"></i>
            </div>
            <div class="page-title">
                <h5>Form Tambah Akun</h5>
                <h6 class="sub-heading">Lengkapi formulir berikut untuk menambahkan akun baru.</h6>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="right-actions">
                <span class="last-login">Last Login: 5 minutes ago</span>
            </div>
        </div>
    </div>
</div>
<meta name="csrf-token" content="content">
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<!-- Row start -->

<div class="row gutters">

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Akun</div>
            <div class="card-body">
                <form action="{{ route('addAkun') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Nama Lengkap<span style="color: red;">*</span> </label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email <span style="color: red;">*</span></label>
                        <div class="col-sm-3">
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">Password <span style="color: red;">*</span> </label>
                        <div class="col-sm-3">
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="user_id" class="col-sm-3 col-form-label">ID Pegawai <span style="color: red;">*</span> </label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="user_id" name="user_id" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="username" class="col-sm-3 col-form-label">Username <span style="color: red;">*</span> </label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="gender" class="col-sm-3 col-form-label">Jenis Kelamin <span style="color: red;">*</span></label>
                        <div class="input-group col-sm-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="gender">Options</label>
                            </div>
                            <select class="form-control" id="gender" name="gender">
                                <option selected>-- Pilih jenis kelamin --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="role_name" class="col-sm-3 col-form-label">Jabatan <span style="color: red;">*</span></label>
                        <div class="input-group col-sm-3">
                            <select class="form-control" name="role_name" id="role_name">
                                <option selected>-- Pilih jabatan --</option>
                                @foreach($roles as $role)
                                <option value="{{ $role->role_id }}">{{ $role->role_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="no_telp" class="col-sm-3 col-form-label">Nomor Telepon <span style="color: red;">*</span> </label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="no_telp" name="no_telp" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="profilePhoto" class="col-sm-3 col-form-label">Unggah Foto Profil <span style="color: red;"></span></label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control-file" id="profilePhoto" name="profilePhoto" accept=".jpg,.jpeg,.png" multiple>
                        </div>
                        <small class="form-text text-muted">Format yang diperbolehkan: JPG, JPEG, PNG</small>
                    </div>

                    <div class="d-flex justify-content-center w-100 py-3">
                        <a href="">
                            <button type="submit" class="btn btn-primary btn-lg"><i class="icon-location-arrow"></i>Buat Akun</button>
                        </a>
                    </div>
                </form>
            </div> <!-- card-body close -->
        </div> <!-- card-close -->
    </div> <!-- col 12  close -->
</div> <!-- row gutters close -->
<!-- Row end -->
@endsection