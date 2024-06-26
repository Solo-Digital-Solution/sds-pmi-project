@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-center_focus_strong"></i>
            </div>
            <div class="page-title">
                <h5>Tambah Akun</h5>
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
            <div class="card-body">
                <form action="{{ url('/simpanAkun') }}" method="post" enctype="multipart/form-data" class="mb-3">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">
                            Nama <span style="color: red;">*</span>
                        </label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">
                            Email <span style="color: red;">*</span>
                        </label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">
                            Password <span style="color: red;">*</span>
                        </label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <div class="form-group">
                        <label for="user_id">
                            ID Pegawai <span style="color: red;">*</span>
                        </label>
                        <input type="text" name="user_id" class="form-control" id="user_id" required>
                    </div>
                    <div class="form-group">
                        <label for="username">
                            Username <span style="color: red;">*</span>
                        </label>
                        <input type="text" name="username" class="form-control" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">
                            Jenis Kelamin <span style="color: red;">*</span>
                        </label>
                        <select class="form-control" id="gender" name="gender" required>
                            <option selected>-- Pilih jenis kelamin --</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="role_name">Role <span style="color: red;">*</span></label>
                        <select class="form-control" name="role_name" id="role_name" style="width: 100%; margin-bottom: 1.5vh;">
                            <option selected>-- Pilih jenis role --</option>
                            @foreach($roles as $r)
                            <option value="{{ $r->role_id }}">{{ $r->role_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">
                            Nomor Telepon <span style="color: red;">*</span>
                        </label>
                        <input type="text" name="no_telp" class="form-control" id="no_telp" required>
                    </div>
                    <div class="row gutters">
                        <div class="col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Foto Profil</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="profilePhoto" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center w-100 py-3">
                        <button type="submit" class="btn btn-primary btn-lg"><i class="icon-location-arrow"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
