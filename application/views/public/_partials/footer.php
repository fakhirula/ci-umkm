<div class="bg-dark">
    <div class="container px-md-5">
        <footer class="py-5">
            <div class="row mb-5 mb-md-0">
                <div class="col-6 col-md-2 mt-3 mt-md-0">
                    <h5 class="text-light"><?= SITE_NAME ?></h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tentang <?= SITE_NAME ?></a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Hak Kekayaan Intelektual</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pusat Edukasi</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Karir</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mt-3 mt-md-0">
                    <h5 class="text-light">Bantuan & Kebijakan</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kebijakan Privasi</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kebijakan Pengiriman</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kebijakan Pengembalian</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Syarat dan Ketentuan</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mt-3 mt-md-0">
                    <h5 class="text-light">Lainnya</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><?= SITE_NAME ?> Care</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Suplier</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sertifikat Kebijakan</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pusat Layanan</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-4 mt-3 mt-md-0 offset-md-1">
                    <form>
                        <h5 class="text-light">Berlangganan newsletter kami</h5>
                        <p>Informasi bulanan dari apa yang baru dan menarik dari kami.</p>
                        <div class="d-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control rounded-0" placeholder="Email address">
                            <button class="btn btn-outline-light rounded-0" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-lg-flex justify-content-between text-center pt-4 border-top">
                <p>Copyright &copy; <?php echo SITE_NAME . " " . Date('Y') ?>. All rights reserved.</p>
                <p>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
            </div>
        </footer>
    </div>
</div>