<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}" />

    <!-- Other CSS includes plugins - Cleanedup unnecessary CSS -->
    <!-- Chartist css -->
    <link href="{{ asset('vendor/chartist/css/chartist.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/chartist/css/chartist-custom.css') }}" rel="stylesheet" />
</head>

@include('layouts.head')

<body>
    @include('layouts.page-loading')

    <div class="app-wrap">
        @include('layouts.header')
        <div class="app-container">
            @include('layouts.sidebar')
            <div class="app-main">
                <main>
                    <!-- BEGIN .main-heading -->
                    <header class="main-heading">
                        @yield('heading')
                    </header>
                    <!-- END: .main-heading -->
                    <!-- BEGIN .main-content -->
                    <div class="main-content">
                        @yield('content')
                    </div>
                    <!-- END: .main-content -->
                </main>
            </div>
        </div>
    </div>

    @include('layouts.footer')
    @include('layouts.scripts')
</body>

</html>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        header {
            background-color: #d32f2f;
            color: white;
            padding: 20px;
            display: flex;
            align-items: center;
        }

        header h1 {
            flex: 1;
        }

        nav ul {
            list-style-type: none;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        main {
            padding: 20px;
        }

        section {
            margin-bottom: 20px;
        }

        section h2 {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #d32f2f;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #b71c1c;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #d32f2f;
            color: white;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }

        .logo {
            width: 30px;
            margin-right: 10px;
        }
    </style>

    <header>
        <h1>Manajemen Akun</h1>
        <img src="palang_merah.png" alt="Palang Merah" class="logo">
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Tambah Akun</a></li>
                <li><a href="#">Daftar Akun</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Tambah Akun Form -->
        <section id="tambah-akun">
            <h2>Tambah Akun</h2>
            <form action="#">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="id">ID Pegawai:</label>
                <input type="text" id="id" name="id" readonly value="AUTO_GENERATE">
                <label for="role">Role:</label>
                <select id="role" name="role">
                    <option value="petugas">Petugas</option>
                    <option value="admin">Admin</option>
                    <option value="hrd">HRD</option>
                </select>
                <label for="phone">Nomor Telepon:</label>
                <input type="tel" id="phone" name="phone" required>
                <button type="submit">Tambah Akun</button>
            </form>
        </section>

        <!-- Daftar Akun -->
        <section id="daftar-akun">
            <h2>Daftar Akun</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>ID Pegawai</th>
                        <th>Role</th>
                        <th>Nomor Telepon</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data Akun akan ditambahkan di sini menggunakan JavaScript -->
                </tbody>
            </table>
        </section>
    </main>

    <footer class="main-footer fixed-btm">
        © Solo Digital Solution 2024
    </footer>
@endsection
