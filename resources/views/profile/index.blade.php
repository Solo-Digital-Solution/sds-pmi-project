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
                <ol class="breadcrumb" style="background-color: transparent; margin-left:0px; margin-bottom:0px">
                    <li class="breadcrumb-item" style="font-size:12pt"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item" style="font-size:12pt">Profil</li>
                </ol>
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
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Detail Profil Anda</div>
            <div class="card-body text-center position-relative">
                <div class="d-inline-block position-relative" style="width: 150px;">
                    @if (Auth::user()->profilePhoto)
                    <img src="{{ asset('profilePhoto/' . Auth::user()->profilePhoto) }}" class="img-fluid" alt="Profile Picture">
                    @else
                    <img src="{{ asset('img/default.jpg') }}" class="img-fluid" alt="Default Profile Picture">
                    @endif
                </div>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="fullName" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col">
                        <input type="text" value="{{ Auth::user()->name }}" class="form-control" id="fullName" name="name" placeholder="Nama Lengkap" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-3 col-form-label">Username</label>
                    <div class="col">
                        <input type="text" value="{{ Auth::user()->username }}" class="form-control" id="username" name="username" placeholder="Username" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="user_id" class="col-sm-3 col-form-label">ID Pegawai</label>
                    <div class="col">
                        <input type="text" value="{{ Auth::user()->user_id }}" class="form-control" id="user_id" name="user_id" placeholder="ID Pegawai" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col">
                        <input type="email" value="{{ Auth::user()->email }}" class="form-control" id="email" name="email" placeholder="Email" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-3 col-form-label">Nomor Telepon</label>
                    <div class="col">
                        <input type="text" value="{{ Auth::user()->no_telp }}" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                    <div class="col">
                        <input type="text" value="{{ Auth::user()->tempat_lahir }}" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                    <div class="col">
                        <input type="date" value="{{ Auth::user()->tanggal_lahir }}" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col">
                        <input type="text" value="{{ Auth::user()->alamat }}" class="form-control" id="alamat" name="alamat" placeholder="Alamat" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gender" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col">
                        <input type="text" value="{{ Auth::user()->gender }}" class="form-control" id="gender" name="gender" placeholder="Jenis Kelamin" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="goldar" class="col-sm-3 col-form-label">Golongan Darah</label>
                    <div class="col">
                        <input type="text" value="{{ Auth::user()->goldar }}" class="form-control" id="goldar" name="goldar" placeholder="Golongan Darah" disabled>
                    </div>
                </div>
                <div class="d-flex justify-content-center w-100 py-3">
                    <a href="{{ url('/profile/edit') }}" class="btn btn-primary btn-lg"><i class="icon-pencil"></i> Edit Profil</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel" style="color: green;">Success</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="color: green;">
                {{ session('success') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Error Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel" style="color: red;">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="color: red;">
                {{ session('error') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Script to trigger modals -->
<script>
    $(document).ready(function() {
        @if(session('success'))
        $('#successModal').modal('show');
        @endif

        @if(session('error'))
        $('#errorModal').modal('show');
        @endif
    });
</script>
