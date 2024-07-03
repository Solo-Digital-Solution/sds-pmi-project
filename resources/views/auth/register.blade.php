<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Best Admin Panels" />
    <meta name="keywords" content="Signup, Login, Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="{{ asset('img/logo-pmi-full.png') }}" />
    <title>Sistem Penanggulangan Bencana PMI Solo</title>

    <!-- Common CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/icomoon.css') }}" />

    <!-- Main and Login css -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
</head>

<body class="login-bg">
    <div class="container">
        <div class="login-screen row align-items-center">
            <div class="col-sm-12">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="login-container">
                        <div class="row no-gutters">
                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                                <div class="login-box">
                                    <a href="#" class="login-logo">
                                        <img src="{{ asset('img/logo-pmi-min.png') }}" alt="Logo PMI" />
                                    </a>

                                    <!-- Name -->
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="name">
                                                <i class="icon-account_circle"></i>
                                            </span>
                                        </div>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Nama Lengkap" aria-label="name" aria-describedby="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Email Address -->
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="email">
                                                <i class="icon-email"></i>
                                            </span>
                                        </div>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="email" value="{{ old('email') }}" required autocomplete="username">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Tempat Lahir -->
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="tempat_lahir">
                                                <i class="icon-location"></i>
                                            </span>
                                        </div>
                                        <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" aria-label="tempat_lahir" aria-describedby="tempat_lahir" value="{{ old('tempat_lahir') }}" required>
                                        @error('tempat_lahir')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Tanggal Lahir -->
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="tanggal_lahir">
                                                <i class="icon-calendar"></i>
                                            </span>
                                        </div>
                                        <input type="date" id="tanggal_lahir" style="color: #aab3c3;" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" aria-label="tanggal_lahir" aria-describedby="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
                                        @error('tanggal_lahir')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Kecamatan -->
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="kecamatan">
                                                <i class="icon-home"></i>
                                            </span>
                                        </div>
                                        <select class="form-control" id="kecamatan-dd" name="kecamatan">
                                            <option value="">Kecamatan</option>
                                            <option value="1">Banjarsari</option>
                                            <option value="2">Jebres</option>
                                            <option value="3">Laweyan</option>
                                            <option value="4">Pasar Kliwon</option>
                                            <option value="5">Serengan</option>
                                        </select>                                        @error('kecamatan')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Kecamatan -->
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="kelurahan">
                                                <i class="icon-home"></i>
                                            </span>
                                        </div>
                                        <select class="form-control" id="kelurahan-dd" name="kelurahan" required></select>                                        @error('kecamatan')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Alamat -->
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="alamat">
                                                <i class="icon-home"></i>
                                            </span>
                                        </div>
                                        <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat Tempat Tinggal" aria-label="alamat" aria-describedby="alamat" value="{{ old('alamat') }}" required>
                                        @error('alamat')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Golongan Darah -->
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="goldar">
                                                <i class="icon-plus"></i>
                                            </span>
                                        </div>
                                        <select class="form-control" style="color:#aab3c3" id="goldar" name="goldar" required>
                                            <option selected>-- Pilih Golongan Darah --</option>
                                            <option value="Belum Tahu">Belum Tahu</option>
                                            <option value="O">O</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="AB">AB</option>
                                        </select>
                                        @error('goldar')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Phone Number -->
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="no_telp">
                                                <i class="icon-phone"></i>
                                            </span>
                                        </div>
                                        <input type="text" id="no_telp" name="no_telp" class="form-control" placeholder="Nomor Telepon" aria-label="phone" aria-describedby="phone" value="{{ old('no_telp') }}" required>
                                        @error('no_telp')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Username -->
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="username">
                                                <i class="icon-user"></i>
                                            </span>
                                        </div>
                                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" aria-label="username" aria-describedby="username" value="{{ old('username') }}" required>
                                        @error('username')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Gender -->
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="gender">
                                                <i class="icon-people"></i>
                                            </span>
                                        </div>
                                        <select class="form-control" style="color:#aab3c3" id="gender" name="gender" required>
                                            <option selected>-- Pilih Jenis Kelamin --</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- KTP -->
                                    <div class="input-group mb-2">
                                            <label for="ktp">KTP</label>
                                            <input type="file" class="form-control-file" id="ktp" name="ktp" accept=".jpg,.jpeg,.png" multiple required>
                                            <small class="form-text text-muted">Format yang diperbolehkan: JPG, JPEG, PNG</small>
                                        @error('ktp')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Password -->
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="password">
                                                <i class="icon-key"></i>
                                            </span>
                                        </div>
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" aria-label="password" aria-describedby="password" required autocomplete="new-password">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="password_confirmation">
                                                <i class="icon-key"></i>
                                            </span>
                                        </div>
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password" aria-label="password_confirmation" aria-describedby="password_confirmation" required autocomplete="new-password">
                                        @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="actions clearfix">
                                        <button type="submit" class="btn btn-primary">Register</button>
                                    </div>
                                    <div class="or"></div>
                                    <div class="mt-4">
                                        <a href="{{ route('login') }}" class="additional-link">Sudah Punya Akun? Silakan <span>Login</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                                <div class="login-slider"></div>
                            </div>
                        </div>
                    </div>
                </form>
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
                    url: "{{url('api/fetch-kelurahans-g')}}",
                    type: "POST",
                    data: {
                        id_kecamatan: idKecamatan,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#kelurahan-dd').html('<option value="">Kelurahan</option>');
                        $.each(result.kelurahans, function (key, value) {
                            $("#kelurahan-dd").append('<option value="' + value
                                .nama_kelurahan + '">' + value.nama_kelurahan + '</option>');
                        });
                    }
                });
            });
        });

    </script>

    <footer class="main-footer no-bdr fixed-btm">
        <div class="container">
            © Solo Digital Solution 2024
        </div>
    </footer>
</body>

</html>
