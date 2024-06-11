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
<div class="content-section">
    <button class="btn btn-primary add-account-button">Add Account</button>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>ID Pegawai</th>
                <th>Role</th>
                <th>Nomor Telepon</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data dari database akan dimasukkan di sini -->
            <tr>
                <td>John Doe</td>
                <td>john.doe@example.com</td>
                <td>12345</td>
                <td>Admin</td>
                <td>08123456789</td>
            </tr>
            <tr>
                <td>Jane Smith</td>
                <td>jane.smith@example.com</td>
                <td>67890</td>
                <td>Petugas PMI</td>
                <td>08198765432</td>
            </tr>
            <tr>
                <td>Robert Brown</td>
                <td>robert.brown@example.com</td>
                <td>11223</td>
                <td>HRD</td>
                <td>08122334455</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection