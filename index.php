<?php
include 'functions.php';
//if(empty(_session('login')))
//header("location:login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="icon" href="https://img.pikbest.com/png-images/20240629/cow-logo-vector-icon_10643174.png!sw800" />
	<title>SISTEM PAKAR DIAGNOSIS PENYAKIT KULIT BALITA MENGGUNAKAN METODE CERTAINTY FACTOR DAN FORWARD CHAINING</title>

	<!-- Tabler Core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css" rel="stylesheet" />

	<!-- Select2 CSS -->
	<link href="assets/css/select2.min.css" rel="stylesheet" />
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<script src="assets/js/select2.min.js"></script>
	<script>
		$(document).ready(function() {
			$("select:not(.default)").select2();
		});
	</script>
</head>

<body>
	<div class="page">
		<!-- Sidebar -->
		<aside class="navbar navbar-vertical navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a href="?" class="navbar-brand navbar-brand-autodark">
					<!-- Add your logo here -->
					<img src="https://img.pikbest.com/png-images/20240629/cow-logo-vector-icon_10643174.png!sw800" alt="Logo" class="navbar-brand-image">
					PAKAR PENYAKIT SAPI
				</a>

				<div class="collapse navbar-collapse" id="sidebar-menu">
					<ul class="navbar-nav pt-lg-3">
						<?php if (_session('level') == 'admin') : ?>
							<li class="nav-item">
								<a href="?m=user" class="nav-link">

									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<circle cx="9" cy="7" r="4" />
											<path d="M17 11v2a4 4 0 0 1 -4 4h-1" />
											<path d="M4 19a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4" />
										</svg>
									</span>
									<span>
										Daftar Pengguna
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="?m=diagnosa" class="nav-link">
									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-activity" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<polyline points="3 12 6 12 9 3 15 21 18 12 21 12" />
										</svg>
									</span>
									<span>

										Diagnosa
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="?m=gejala" class="nav-link">
									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<circle cx="12" cy="12" r="9" />
											<line x1="12" y1="8" x2="12" y2="12" />
											<line x1="12" y1="16" x2="12.01" y2="16" />
										</svg>
									</span>
									<span>

										Gejala
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="?m=relasi" class="nav-link">
									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-link" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<path d="M9 12l6 -6" />
											<rect x="4" y="4" width="6" height="6" rx="1" />
											<rect x="14" y="14" width="6" height="6" rx="1" />
										</svg>
									</span>
									<span>

										Relasi
									</span>
								</a>
							</li>
							<!-- <li class="nav-item">
								<a href="?m=rule" class="nav-link">
									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<path d="M4 19h16" />
											<path d="M4 15h16" />
											<path d="M4 11h16" />
											<path d="M4 7h16" />
											<path d="M8 3v18" />
											<path d="M16 3v18" />
										</svg>
									</span>
									<span>

										Rule
									</span>
								</a>
							</li> -->
							<li class="nav-item">
								<a href="aksi.php?m=konsultasi&act=new" class="nav-link">
									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<circle cx="12" cy="12" r="9" />
											<line x1="12" y1="16" x2="12.01" y2="16" />
											<polyline points="8 11 12 11 12 8 16 8" />
										</svg>
									</span>
									<span>

										Konsultasi
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="?m=password" class="nav-link">
									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<rect x="5" y="11" width="14" height="10" rx="2" />
											<circle cx="12" cy="16" r="1" />
											<path d="M8 11v-4a4 4 0 0 1 8 0v4" />
										</svg>
									</span>
									<span>

										<?= _session('login') ?>
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="aksi.php?act=logout" class="nav-link">
									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<path d="M10 16v1a1 1 0 0 0 1 1h6a1 1 0 0 0 1 -1v-12a1 1 0 0 0 -1 -1h-6a1 1 0 0 0 -1 1v1" />
											<path d="M10 12h-7" />
											<path d="M3 9l-3 3l3 3" />
										</svg>
									</span>
									<span>

										Logout
									</span>
								</a>
							</li>
						<?php elseif (_session('level') == 'user') : ?>
							<li class="nav-item"><a href="?m=diagnosa_user" class="nav-link">
									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-activity" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<polyline points="3 12 6 12 9 3 15 21 18 12 21 12" />
										</svg>
									</span>
									<span>

										Diagnosa
									</span>
								</a>
							</li>
							<li class="nav-item"><a href="?m=gejala_user" class="nav-link">
									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<circle cx="12" cy="12" r="9" />
											<line x1="12" y1="8" x2="12" y2="12" />
											<line x1="12" y1="16" x2="12.01" y2="16" />
										</svg>
									</span>
									<span>

										Gejala
									</span>
								</a></li>
							<li class="nav-item"><a href="aksi.php?m=konsultasi&act=new" class="nav-link">
									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<circle cx="12" cy="12" r="9" />
											<line x1="12" y1="16" x2="12.01" y2="16" />
											<polyline points="8 11 12 11 12 8 16 8" />
										</svg>
									</span>
									<span>

										Konsultasi
									</span>
								</a></li>
							<li class="nav-item"><a href="?m=password" class="nav-link">
									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-user">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" />
											<path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z" />
										</svg>
									</span>
									<span>
										<?= _session('login') ?>
									</span>
								</a></li>
							<li class="nav-item"><a href="aksi.php?act=logout" class="nav-link"><i class="fa-solid fa-user"></i>&nbsp;Logout</a></li>
						<?php else : ?>
							<li class="nav-item"><a href="?" class="nav-link">
									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-home">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<path d="M5 12l-2 0l9 -9l9 9l-2 0" />
											<path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
											<path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
										</svg>
									</span>
									<span>
										Beranda
									</span>
								</a>
							</li>
							<li class="nav-item"><a href="?m=bantuan" class="nav-link">
									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-help">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
											<path d="M12 17l0 .01" />
											<path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4" />
										</svg>
									</span>
									<span>
										Bantuan
									</span>
								</a>
							</li>
							<li class="nav-item"><a href="?m=login" class="nav-link">
									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-login">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<path d="M15 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
											<path d="M21 12h-13l3 -3" />
											<path d="M11 15l-3 -3" />
										</svg>
									</span>
									<span>
										Masuk
									</span></a>
							</li>
							<li class="nav-item"><a href="?m=signup" class="nav-link">
									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-square">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<path d="M9 10a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
											<path d="M6 21v-1a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v1" />
											<path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" />
										</svg>
									</span>
									<span>
										Daftar
									</span>
								</a>
							</li>
						<?php endif ?>
					</ul>
				</div>
			</div>
		</aside>

		<!-- Main content -->
		<div class="page-wrapper">
			<div class="container-xl">
				<!-- Konten -->
				<?php
				$mod = isset($_GET['m']) ? $_GET['m'] : '';

				if (!_session('login') && in_array($mod, array('diagnosa', 'gejala', 'relasi', 'rule', 'password'))) {
					$mod = 'home';
				}

				if (file_exists($mod . '.php')) {
					include $mod . '.php';
				} else {
					include 'home.php';
				}
				?>
			</div>
			<footer class="footer footer-transparent">
				<div class="container">
					<div class="text-center">
						©<?php echo date('Y'); ?> Copyright: <a href="https://github.com/nurikhsanuddin">nurikhsanuddin</a>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<!-- Footer -->

	<!-- Tabler Core JS -->
	<script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script>
</body>

</html>