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

	<!-- Mian and Login css -->
	<link rel="stylesheet" href="{{ asset('css/main.css') }}" />

</head>

<body class="login-bg">

	<div class="container">
		<div class="login-screen row align-items-center">
			<div class="col-sm-12">
				<form action="index.html">
					<div class="login-container">
						<div class="row no-gutters">
							<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
								<div class="login-box">
									<a href="#" class="login-logo">
										<img src="{{ asset('img/logo-pmi-min.png') }}" alt="Logo PMI" />
									</a>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="name">
												<i class="icon-account_circle"></i>
											</span>
										</div>
										<input type="text" class="form-control" placeholder="Nama Lengkap" aria-label="name" aria-describedby="name">
									</div>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="email">
												<i class="icon-email"></i>
											</span>
										</div>
										<input type="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="email">
									</div>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="no_telp">
												<i class="icon-phone"></i>
											</span>
										</div>
										<input type="text" class="form-control" placeholder="Nomor Telepon" aria-label="phone" aria-describedby="phone">
									</div>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text" id="pwd">
												<i class="icon-key"></i>
											</span>
										</div>
										<input type="password" class="form-control" placeholder="Password" aria-label="pwd" aria-describedby="pwd">
									</div>
									<div class="actions clearfix">
										<button type="submit" class="btn btn-primary">Register</button>
									</div>
									<div class="or"></div>
									<div class="mt-4">
										<a href="{{ route('auth.login') }}" class="additional-link">Sudah Punya Akun? Silakan <span>Login</span></a>
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