<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('templates/head.php') ?>
</head>

<body>
	<main class="flex-shrink-0">
		<!-- Navigation-->
		<nav class="navbar-dark bg-dark">
			<?php $this->load->view('public/_partials/navbar.php') ?>
		</nav>
		<!-- Header-->
		<header class="bg-dark py-5">
			<div class="container px-5">
				<div class="row gx-5 align-items-center justify-content-center">
					<div class="col-lg-8 col-xl-7 col-xxl-6">
						<div class="my-5 text-center text-xl-start">
							<h1 class="display-5 fw-bolder text-white mb-2">LESTARI INDONESIA KU #AYOPAKAIBATIK</h1>
							<p class="lead fw-normal text-white-50 mb-4">Mari ikut bersama SELIR.ID dalam rangka melestarikan budaya nusantara ke kancah Internasional. Dapatkan diskon hingga 50% untuk pelanggan baru! Ayo daftar sekarang!</p>
							<div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
								<?php if (!$current_user) : ?>
									<a class="btn btn-light rounded-0 btn-lg px-4 me-sm-3" href="<?= base_url('auth/registration') ?>">Daftar Sekarang</a>
								<?php endif; ?>
								<a class="btn btn-outline-light rounded-0 btn-lg px-4" href="#features">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded my-5" src="<?= base_url('assets/images/ilustrations/home.jpg') ?>" alt="Introduction SELIR.ID" /></div>
				</div>
			</div>
		</header>
		<!-- Features section-->
		<section class="container px-lg-5 py-5" id="features">
			<!-- Page Features-->
			<div class="row my-5 gx-5 justify-content-center">
				<div class="col-lg-8 col-xl-6">
					<div class="text-center">
						<h2 class="display-6 fw-bolder">Keunggulan SELIR</h2>
						<p class="lead fw-normal text-muted mb-5">Dalam rangka membantu pemerintah sekaligus mengurangi pengangguran di Indonesia. Kami sepenuhnya memanfaatkan Sumber Daya Alam dan Manusia Nusantara.</p>
					</div>
				</div>
			</div>
			<div class="row gx-lg-5">
				<div class="col-lg-4 col-xxl-4 mb-5">
					<div class="card bg-light border-0 h-100">
						<div class="card-body text-center p-4 p-lg-4 pt-0">
							<i class="py-3 text-primary fa-solid fa-truck-fast fa-2x"></i>
							<h2 class="fs-4 fw-bold">One Day Service</h2>
							<p class="mb-0">Tidak perlu menunggu lama, sekali klik-langsung kirim!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xxl-4 mb-5">
					<div class="card bg-light border-0 h-100">
						<div class="card-body text-center p-4 p-lg-4 pt-0">
							<i class="py-3 text-primary fa-solid fa-arrow-trend-down fa-2x"></i>
							<h2 class="fs-4 fw-bold">Harga Terjangkau</h2>
							<p class="mb-0">Tinggalkan toko sebelah yang sangat mahal! SELIR.ID original dengan harga terjangkau!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xxl-4 mb-5">
					<div class="card bg-light border-0 h-100">
						<div class="card-body text-center p-4 p-lg-4 pt-0">
							<i class="py-3 text-primary fa-solid fa-shield-halved fa-2x"></i>
							<h2 class="fs-4 fw-bold">Jaminan Aman</h2>
							<p class="mb-0">Dijamin Aman! Semua data kami lindungi dengan enkripsi bertahap tingkat tinggi.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xxl-4 mb-5">
					<div class="card bg-light border-0 h-100">
						<div class="card-body text-center p-4 p-lg-4 pt-0">
							<i class="py-3 text-primary fa-regular fa-handshake fa-2x"></i>
							<h2 class="fs-4 fw-bold">Sistem Prioritas</h2>
							<p class="mb-0">Kepuasan pelanggan adalah prioritas kami! Customer Service 24 jam hanya untuk mu!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xxl-4 mb-5">
					<div class="card bg-light border-0 h-100">
						<div class="card-body text-center p-4 p-lg-4 pt-0">
							<i class="py-3 text-primary fa-solid fa-code fa-2x"></i>
							<h2 class="fs-4 fw-bold">Bersih dan Cepat</h2>
							<p class="mb-0">Menggunakan teknologi terbaru dan mutakhir. Bersih dan lebih cepat!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xxl-4 mb-5">
					<div class="card bg-light border-0 h-100">
						<div class="card-body text-center p-4 p-lg-4 pt-0">
							<i class="py-3 text-primary fa-solid fa-certificate fa-2x"></i>
							<h2 class="fs-4 fw-bold">Terpercaya</h2>
							<p class="mb-0">SELIR.ID sudah dipercaya oleh jutaan masyarakat Indonesia dan luar negeri.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Testimonial section-->
		<div class="py-5 bg-light">
			<div class="container px-5 my-5">
				<div class="row gx-5 justify-content-center">
					<div class="col-lg-10 col-xl-7">
						<div class="text-center">
							<div class="fs-2 mb-4 fst-italic">"SELIR itu aplikasi jual beli sistem reseller, jadi kami ngambil produk dari toko lain. Kami itu resmi dan kami percaya SELIR lebih unggul dari online shop lain dalam keamanan data."</div>
							<div class="d-flex align-items-center justify-content-center">
								<img class="avatar rounded-circle me-3" src="<?= base_url('assets/images/profiles/profile-1.png') ?>" alt="..." />
								<div class="fw-bold">
									Fakhirul Akmal
									<span class="fw-bold text-primary mx-1">/</span>
									CEO, <?= SITE_NAME ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Blog preview section-->
		<section class="py-5">
			<div class="container px-5 my-5">
				<div class="row gx-5 justify-content-center">
					<div class="col-lg-8 col-xl-6">
						<div class="text-center">
							<h2 class="display-6 fw-bolder">Dari Pengrajin Batik Tradisional</h2>
							<p class="lead fw-normal text-muted mb-5">Dalam rangka membantu pemerintah sekaligus mengurangi pengangguran di Indonesia. Kami sepenuhnya memanfaatkan Sumber Daya Alam dan Manusia Nusantara.</p>
						</div>
					</div>
				</div>
				<?php if (!$produk) echo '<h1 class="display-6 fw-bolder text-center text-red">Produk Tidak Ditemukan!</h1>'; ?>
				<div class="row gx-5">
					<!-- Section-->
					<?php foreach ($produk as $row) : ?>
						<?php if ($row->stok > 0) : ?>
							<div class="col-lg-4 mb-5">
								<div class="card h-100 shadow border-0 rounded-0">
									<img class="card-img-top rounded-0" src="<?= base_url('assets/images/produk/' . $row->foto) ?>" alt="..." />
									<div class="card-body p-4">
										<div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
										<a class="text-decoration-none link-dark stretched-link" href="<?= site_url('public/produk/detail_produk/' . $this->secure->encrypt_url($row->id)) ?>">
											<h5 class="card-title mb-3"><?= $row->nama; ?></h5>
										</a>
										<p class="card-text mb-0"><?= $row->deskripsi; ?></p>
									</div>
									<div class="card-footer p-4 pt-0 bg-transparent border-top-0">
										<div class="d-flex align-items-end justify-content-between">
											<div class="d-flex align-items-center">
												<img class="avatar rounded-circle me-3" src="<?= base_url('assets/images/profiles/profile-1.png') ?>" alt="..." />
												<div class="small">
													<div class="fw-bold">Administrator</div>
													<div class="text-muted">April 2, 2022 &middot; 10 min read</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
				<!-- Call to action-->
				<aside class="bg-dark rounded-0 p-4 p-sm-5 mt-5">
					<div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
						<div class="mb-4 mb-xl-0">
							<div class="fs-1 fw-bold text-white">Produk baru, langsung dikirim untuk mu.</div>
							<div class="text-white-50">Daftar sekarang untuk info terbaru dari kami!</div>
						</div>
						<div class="ms-xl-4">
							<div class="input-group mb-2">
								<input class="form-control rounded-0" type="text" placeholder="Email address..." aria-label="Email address..." aria-describedby="button-newsletter" />
								<a href="<?= base_url('auth/registration') ?>" class="btn btn-outline-light rounded-0" id="button-newsletter">Daftar</a>
							</div>
							<div class="small text-white-50">Kami peduli dengan privasi, dan tidak akan pernah membagikan data Anda.</div>
						</div>
					</div>
				</aside>
			</div>
		</section>
	</main>
	<!-- Footer-->
	<?php $this->load->view('public/_partials/footer.php') ?>
	<?php $this->load->view('templates/js.php') ?>
</body>

</html>