<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Best Admin Panels" />
    <meta name="keywords" content="Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
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
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />

    <!-- Other CSS includes plugins - Cleanedup unnecessary CSS -->
    <link href="{{ asset('vendor/chartist/css/chartist.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/chartist/css/chartist-custom.css') }}" rel="stylesheet" />

    <!-- Data Tables -->
    <link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bs4.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bs4-custom.css') }}" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
</head>

<body class="login-bg">
    <div class="container">
        <div class="login-screen row align-items-center">
            <div class="col-sm-12">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="login-container">
                        <div class="row no-gutters">
                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                                <div class="login-box">
                                    <a href="#" class="login-logo">
                                        <img src="{{ asset('img/logo-pmi-min.png') }}" alt="Logo PMI" />
                                    </a>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="email">
                                                <i class="icon-account_circle"></i>
                                            </span>
                                        </div>
                                        <input type="email" id="email" class="form-control" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email" aria-label="email" aria-describedby="email">
                                    </div>
                                    <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="password">
                                                <i class="icon-verified_user"></i>
                                            </span>
                                        </div>
                                        <input type="password" id="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Password" aria-label="Password" aria-describedby="Password">
                                    </div>
                                    <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />

                                    <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>

                                    <div class="actions clearfix">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                                        @endif
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>

                                    <div class="or"></div>
                                    <div class="mt-4">
                                        <a href="{{ route('register') }}" class="additional-link">Belum Punya Akun? Silakan <span>Buat Akun</span></a>
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
    <footer class="main-footer no-bdr fixed-btm">
        <div class="container">
            © Solo Digital Solution 2024
        </div>
    </footer>
</body>

</html>
