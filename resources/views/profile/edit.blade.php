@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-laptop_windows"></i>
            </div>
            <div class="page-title">
                <h5>Form Edit Profil</h5>
                <ol class="breadcrumb" style="background-color: transparent; margin-left:0px; margin-bottom:0px">
                    <li class="breadcrumb-item" style="font-size:12pt"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item" style="font-size:12pt"><a href="{{ url('/profile') }}">Profil</a></li>
                    <li class="breadcrumb-item" style="font-size:12pt">Form Edit Profil</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row gutters">
    <div class="col-sm-12">
        <!-- Tombol Kembali ke Daftar Kejadian -->
        <div class="d-flex justify-content-start mb-3">
            <a href="{{ route('profile.index') }}" class="btn btn-primary">
                <i class="icon-arrow-left-thick"></i> Kembali
            </a>
        </div>
        <div class="card">
            <div class="card-header">Edit Profil Anda</div>
            <div class="d-inline-block position-relative rounded-circle overflow-hidden mt-3 mx-5" style="width: 150px; height: 150px;">
                @if (Auth::user()->profilePhoto)
                <img src="{{ asset('profilePhoto/' . Auth::user()->profilePhoto) }}" class="img-fluid" alt="Profile Picture">
                @else
                <img src="{{ asset('img/default.jpg') }}" class="img-fluid" alt="Default Profile Picture">
                @endif
            </div>
            <div class="card-body mx-5">
                <form action="{{ route('profile.update', $user->user_id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="profilePhoto">Upload Foto Profil </label>
                            <input type="file" class="form-control-file mx-auto" id="profilePhoto" name="profilePhoto" accept=".jpg,.jpeg,.png" style="display: inline-block;"> <small class="form-text text-muted">Format yang diperbolehkan: JPG, JPEG, PNG</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Nama Lengkap <span style="color: red;">*</span></label>
                            <input type="text" value="{{ old('name', $user->name) }}" class="form-control" id="name" name="name" placeholder="Nama Lengkap" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="username">Username <span style="color: red;">*</span></label>
                            <input type="text" value="{{ old('username', $user->username) }}" class="form-control" id="username" name="username" placeholder="Username" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="gender">Jenis Kelamin <span style="color: red;">*</span></label>
                            <select class="form-control" id="gender" name="gender" required>
                                <option value="Laki-Laki" {{ $user->gender == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                                <option value="Perempuan" {{ $user->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email <span style="color: red;">*</span></label>
                            <input type="email" value="{{ old('email', $user->email) }}" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="alamat">Alamat <span style="color: red;">*</span></label>
                            <input type="text" value="{{ old('alamat', $user->alamat) }}" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="phone">Nomor Telepon <span style="color: red;">*</span></label>
                            <input type="text" value="{{ old('no_telp', $user->no_telp) }}" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kelurahan-dd">Kelurahan <span style="color: red;">*</span></label>
                            <select class="form-control" id="kelurahan-dd" name="kelurahan" required>
                                <option value="">Choose...</option>
                                <!-- Options loaded by AJAX -->
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tempat_lahir">Tempat Lahir <span style="color: red;">*</span></label>
                            <input type="text" value="{{ old('tempat_lahir', $user->tempat_lahir) }}" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kecamatan-dd">Kecamatan <span style="color: red;">*</span></label>
                            <select class="form-control" id="kecamatan-dd" name="kecamatan" required>
                                <option value="">Choose...</option>
                                @foreach ($kecamatans as $kecamatan)
                                <option value="{{ $kecamatan->id_kecamatan }}" {{ $kecamatan->id_kecamatan == $user->kecamatan ? 'selected' : '' }}>
                                    {{ $kecamatan->nama_kecamatan }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tanggal_lahir">Tanggal Lahir <span style="color: red;">*</span></label>
                            <input type="date" value="{{ old('tanggal_lahir', $user->tanggal_lahir) }}" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="goldar">Golongan Darah <span style="color: red;">*</span></label>
                            <select class="form-control" id="goldar" name="goldar" required>
                                <option value="A" {{ $user->goldar == 'A' ? 'selected' : '' }}>A</option>
                                <option value="B" {{ $user->goldar == 'B' ? 'selected' : '' }}>B</option>
                                <option value="AB" {{ $user->goldar == 'AB' ? 'selected' : '' }}>AB</option>
                                <option value="O" {{ $user->goldar == 'O' ? 'selected' : '' }}>O</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center w-100 py-1">
                        <button type="submit" class="btn btn-primary btn-lg"><i class="icon-location-arrow"></i>Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#kecamatan-dd').on('change', function() {
            var idKecamatan = this.value;
            $("#kelurahan-dd").html('');
            $.ajax({
                url: "{{ url('api/fetch-kelurahans') }}",
                type: "POST",
                data: {
                    id_kecamatan: idKecamatan,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    $('#kelurahan-dd').html('<option value="">Choose...</option>');
                    $.each(result.kelurahans, function(key, value) {
                        var isSelected = value.nama_kelurahan == "{{ old('kelurahan', $user->kelurahan) }}" ? 'selected' : '';
                        $("#kelurahan-dd").append('<option value="' + value.nama_kelurahan + '" ' + isSelected + '>' + value.nama_kelurahan + '</option>');
                    });
                }
            });
        });

        // Trigger change event initially if kecamatan is already selected
        $('#kecamatan-dd').trigger('change');
    });
</script>
@endsection