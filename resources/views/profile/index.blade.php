@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-laptop_windows"></i>
            </div>
            <div class="page-title">
                <h5>Profil Anda</h5>
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
<div class="row gutters justify-content-center">
    <div class="col-md-12">
        <div class="card shadow-sm rounded-lg border-0">
            <div class="card-header">
                <h5 class="mb-0">Detail Profil Anda</h5>
            </div>
            <div class="card-body mx-5 mt-2 d-flex justify-content-between align-items-center">
                <div class="d-inline-block position-relative rounded-circle overflow-hidden" style="width: 150px; height: 150px;">
                    @if (Auth::user()->profilePhoto)
                    <img src="{{ asset('profilePhoto/' . Auth::user()->profilePhoto) }}" class="img-fluid" alt="Profile Picture">
                    @else
                    <img src="{{ asset('img/default.jpg') }}" class="img-fluid" alt="Profile Picture">
                    @endif
                </div>

                <div class="ml-4 text-left">
                    <h5 class="mb-1">{{ Auth::user()->name }}</h5>

                    <div>
                        @foreach ($roles as $role)
                        @if ($role == 'Executive')
                        <span class="badge badge-danger text-light">Executive</span>
                        @elseif ($role == 'Pegawai PMI')
                        <span class="badge badge-warning text-light">Admin</span>
                        @elseif ($role == 'HRD')
                        <span class="badge badge-info text-light">HRD</span>
                        @elseif ($role == 'Sukarelawan')
                        <span class="badge badge-success text-light">Sukarelawan</span>
                        @endif
                        @endforeach
                    </div>
                </div>

                <!-- Tombol Edit di Kanan -->
                <div class="ml-auto">
                    <a href="{{ url('/profile/edit') }}" class="btn btn-primary btn-lg"><i class="icon-pencil"></i> Edit Profil</a>
                    <!-- <a href="{{ url('/ganti-password') }}" class="btn btn-primary btn-lg"><i class="icon-lock"></i> Ganti Password</a> -->
                </div>
            </div>

            <div class="card-body mx-5">
                <!-- Form Input Dua Kolom dengan Label di Atas -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="fullName" class="form-label">ID Pegawai</label>
                            <input type="text" value="{{ Auth::user()->user_id }}" class="form-control" id="user_id" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="no_telp" class="form-label">Email</label>
                            <input type="text" value="{{ Auth::user()->email }}" class="form-control" id="email" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="no_telp" class="form-label">Username</label>
                            <input type="text" value="{{ Auth::user()->username }}" class="form-control" id="username" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="no_telp" class="form-label">Nomor Telepon</label>
                            <input type="text" value="{{ Auth::user()->no_telp }}" class="form-control" id="no_telp" disabled>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="tempat_lahir" class="form-label">Tempat & Tanggal Lahir</label>
                            <input type="text" value="{{ Auth::user()->tempat_lahir }}, {{ \Carbon\Carbon::parse(Auth::user()->tanggal_lahir)->locale('id')->translatedFormat('d F Y') }}" class="form-control" id="tempat_lahir" disabled placeholder="Contoh: Jakarta, 15 Oktober 2024">
                        </div>

                        <div class="form-group mb-3">
                            <label for="gender" class="form-label">Jenis Kelamin</label>
                            <input type="text" value="{{ Auth::user()->gender }}" class="form-control" id="gender" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" value="{{ Auth::user()->alamat }}, {{ Auth::user()->kelurahan }}, {{ $kecamatan->nama_kecamatan }}" class="form-control" id="alamat" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="goldar" class="form-label">Golongan Darah</label>
                            <input type="text" value="{{ Auth::user()->goldar }}" class="form-control" id="goldar" disabled>
                        </div>
                    </div>
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