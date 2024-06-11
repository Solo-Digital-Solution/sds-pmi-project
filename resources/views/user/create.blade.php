@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-laptop_windows"></i>
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
<div class="content-section">
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
        <label for="id_pegawai">ID Pegawai:</label>
        <input type="text" class="form-control" id="id_pegawai" name="id_pegawai">
    </div>
    <div class="form-group">
        <label for="role">Role:</label>
        <select class="form-control" id="role" name="role">
            <option value="HRD">HRD</option>
            <option value="Admin">Admin</option>
            <option value="Pegawai PMI">Pegawai PMI</option>
        </select>
    </div>
    <div class="form-group">
        <label for="nomor_telepon">Nomor Telepon:</label>
        <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon">
    </div>
    <button id="createBtn" class="btn btn-primary">Tambah</button>
</div>

<script>
document.getElementById("createBtn").addEventListener("click", function() {
    // Logic to handle creation of account
    // This could be an AJAX request to the server to handle the account creation
    // or any other client-side logic you need.
    // Example:
    // alert("Create account button clicked!");
    // You can add your logic here to handle account creation
});
</script>
@endsection
