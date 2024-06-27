@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-laptop_windows"></i>
            </div>
            <div class="page-title">
                <h5>Edit Akun</h5>
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
            <div class="card-header">Edit Akun</div>
            <div class="card-body">
                <form action="{{ url('/user-management/' . $user->user_id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required disabled>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required disabled>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}" required disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">Telepon</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $user->no_telp }}" required disabled>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $user->alamat }}" required disabled>
                    </div>
                    <div class="form-group">
                        <label for="kelurahan">Kelurahan</label>
                        <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="{{ $user->kelurahan }}" required disabled>
                    </div>
                    <div class="form-group">
                        <label for="user_id">ID Pegawai</label>
                        <input type="user_id" class="form-control" id="user_id" name="user_id" value="{{ $user->user_id }}" required disabled>
                    </div>
                    <div class="form-group">
                        <label for="gender">Jenis Kelamin</label>
                        <input type="gender" class="form-control" id="gender" name="gender" value="{{ $user->gender }}" required disabled>
                    </div>
                    <div class="form-group">
                        <label for="goldar">Golongan Darah</label>
                        <input type="goldar" class="form-control" id="goldar" name="goldar" value="{{ $user->goldar }}" required disabled>
                    </div>
                    <div class="form-group">
                        <label for="role_name">Role</label>
                        <select class="form-control" id="role_name" name="role_name">
                            @foreach($roles as $role)
                            <option value="{{ $role->role_id }}" {{ $role->role_id == $user->role_id ? 'selected' : '' }}>{{ $role->role_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection