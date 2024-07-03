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
                        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nik">
                            NIK <span style="color: red;">*</span>
                        </label>
                        <input type="text" name="nik" class="form-control" id="nik" value="{{ old('nik') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">
                            Email <span style="color: red;">*</span>
                        </label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" required>
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
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
                        <input type="text" name="user_id" class="form-control" id="user_id" value="{{ old('user_id') }}" required>
                        @error('user_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">
                            Username <span style="color: red;">*</span>
                        </label>
                        <input type="text" name="username" class="form-control" id="username" value="{{ old('username') }}" required>
                        @error('username')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">
                            Tempat Lahir <span style="color: red;">*</span>
                        </label>
                        <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="{{ old('tempat_lahir') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">
                            Tanggal Lahir <span style="color: red;">*</span>
                        </label>
                        <div class="col-sm-3">
                        <input type="date" id="tanggal_lahir" style="color: #aab3c3;" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" aria-label="tanggal_lahir" aria-describedby="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
                                        @error('tanggal_lahir')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                        </div>                    
                    </div>

                
                    
                    {{-- <div class="form-group">
                        <label for="kecamatan">
                            Kecamatan <span style="color: red;">*</span>
                        </label>
                        <select class="form-control" id="kecamatan" name="kecamatan" required>
                            <option selected>Pilih Kecamatan...</option>
                            <option value="Banjarsari">Banjarsari</option>
                            <option value="Jebres">Jebres</option>
                            <option value="Laweyan">Laweyan</option>
                            <option value="Pasar Kliwon">Pasar Kliwon</option>
                            <option value="Serengan">Serengan</option>
                        </select>
                    </div> --}}
                    <div class="form-group">
                        <label for="alamat">
                            Alamat tinggal<span style="color: red;">*</span>
                        </label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="{{ old('alamat') }}" required>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan-dd" class="col-sm-3 col-form-label">Kecamatan <span style="color: red;">*</span> </label>
                        <div class="input-group col-sm-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="kecamatan-dd">Options</label>
                            </div>
                            <select class="form-control" id="kecamatan-dd" name="kecamatan">
                                <option value="">Choose...</option>
                                <option value="1">Banjarsari</option>
                                <option value="2">Jebres</option>
                                <option value="3">Laweyan</option>
                                <option value="4">Pasar Kliwon</option>
                                <option value="5">Serengan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelurahan-dd" class="col-sm-3 col-form-label">Kelurahan <span style="color: red;">*</span> </label>
                        <div class="input-group col-sm-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="kelurahan-dd">Options</label>
                            </div>
                            <select class="form-control" id="kelurahan-dd" name="kelurahan" required></select>
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <label for="goldar">
                            Golongan Darah <span style="color: red;">*</span>
                        </label>
                        <select class="form-control" id="goldar" name="goldar" required>
                            <option selected>-- Pilih golongan darah --</option>
                            <option value="Belum Tahu" {{ old('goldar') == 'Belum Tahu' ? 'selected' : '' }}>Belum Tahu</option>
                            <option value="O" {{ old('goldar') == 'O' ? 'selected' : '' }}>O</option>
                            <option value="A" {{ old('goldar') == 'A' ? 'selected' : '' }}>A</option>
                            <option value="B" {{ old('goldar') == 'B' ? 'selected' : '' }}>B</option>
                            <option value="AB" {{ old('goldar') == 'AB' ? 'selected' : '' }}>AB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gender">
                            Jenis Kelamin <span style="color: red;">*</span>
                        </label>
                        <select class="form-control" id="gender" name="gender" required>
                            <option selected>-- Pilih jenis kelamin --</option>
                            <option value="Laki-laki" {{ old('gender') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="role_name">Role <span style="color: red;">*</span></label>
                        <select class="form-control" name="role_name[]" id="role_name" multiple style="width: 100%; margin-bottom: 1.5vh;" required>
                            @foreach($roles as $r)
                            <option value="{{ $r->role_id }}" {{ in_array($r->role_id, old('role_name', [])) ? 'selected' : '' }}>{{ $r->role_name }}</option>
                            @endforeach
                        </select>
                    </div>                    
                    <div class="form-group">
                        <label for="no_telp">
                            Nomor Telepon <span style="color: red;">*</span>
                        </label>
                        <input type="text" name="no_telp" class="form-control" id="no_telp" id="no_telp" value="{{ old('no_telp') }}" required>
                    </div>
                    <div class="row gutters">
                        <div class="col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="profilePhoto">Foto Profil</label>
                                <input type="file" class="form-control-file" id="profilePhoto" name="profilePhoto" accept=".jpg,.jpeg,.png" multiple>
                                <small class="form-text text-muted">Format yang diperbolehkan: JPG, JPEG, PNG</small>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="ktp">Foto KTP</label>
                                <input type="file" class="form-control-file" id="ktp" name="ktp" accept=".jpg,.jpeg,.png" multiple>
                                <small class="form-text text-muted">Format yang diperbolehkan: JPG, JPEG, PNG</small>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#kecamatan-dd').on('change', function () {
            var idKecamatan = this.value;
            $("#kelurahan-dd").html('');
            $.ajax({
                url: "{{url('api/fetch-kelurahans')}}",
                type: "POST",
                data: {
                    id_kecamatan: idKecamatan,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#kelurahan-dd').html('<option value="">Choose...</option>');
                    $.each(result.kelurahans, function (key, value) {
                        $("#kelurahan-dd").append('<option value="' + value
                            .nama_kelurahan + '">' + value.nama_kelurahan + '</option>');
                    });
                }
            });
        });
    });

</script>
@endsection
