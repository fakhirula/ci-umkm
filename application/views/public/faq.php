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
        <!-- Page Content-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-6 fw-bolder">Pertanyaan yang sering diajukan</h1>
                    <p class="lead fw-normal text-muted mb-0">Apa yang bisa kami bantu?</p>
                </div>
                <div class="row gx-5">
                    <div class="col-xl-8">
                        <!-- FAQ Accordion 1-->
                        <h2 class="fw-bolder mb-3">Pemesanan &amp; Pembayaran</h2>
                        <div class="accordion rounded-0 mb-5" id="accordionExample">
                            <div class="accordion-item rounded-0">
                                <h3 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Cara membeli</button></h3>
                                <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ol class="list-group list-group-numbered">
                                            <li class="list-group-item border-0">Pastikan kamu sudah mempunyai akun atau kamu bisa membuatnya <a href="<?= base_url('auth/registration') ?>">disini</a></li>
                                            <li class="list-group-item border-0">Pilih produk yang kamu inginkan</li>
                                            <li class="list-group-item border-0">Masukan jumlah barang yang ingin dibeli lalu klik <strong>Beli sekarang</strong></li>
                                            <li class="list-group-item border-0">Terakhir isi formulir pengiriman dan submit</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item rounded-0">
                                <h3 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Metode Pembayaran</button></h3>
                                <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        SELIR.ID sudah terintegrasi dengan berbagai metode pembayaran yang mudah dan aman untuk pengguna.
                                        <ol class="list-group list-group-numbered">
                                            <li class="list-group-item border-0">Transfer Bank</li>
                                            <li class="list-group-item border-0">Virtual Account</li>
                                            <li class="list-group-item border-0">Mitra SELIR.ID</li>
                                            <li class="list-group-item border-0">Minimarket</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item rounded-0">
                                <h3 class="accordion-header" id="headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Cara Menggunakan Kode Promo</button></h3>
                                <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Gunakan kode redeem <strong>#AYOPAKAIBATIK</strong>, promo berlaku hingga <?php date_default_timezone_set("Asia/Jakarta"); echo date('d M Y'); ?>.
                                        <ol class="list-group list-group-numbered">
                                            <li class="list-group-item border-0">Lakukan order produk</li>
                                            <li class="list-group-item border-0">Saat berada di halaman Checkout, isi kode Redeem Promo</li>
                                            <li class="list-group-item border-0">Klik Redeem</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Accordion 2-->
                        <h2 class="fw-bolder mb-3">Website Issues</h2>
                        <div class="accordion mb-5 mb-xl-0" id="accordionExample2">
                            <div class="accordion-item rounded-0">
                                <h3 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Accordion Item #1</button></h3>
                                <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong>
                                        It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>
                                        , though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item rounded-0">
                                <h3 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Accordion Item #2</button></h3>
                                <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong>
                                        It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>
                                        , though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item rounded-0">
                                <h3 class="accordion-header" id="headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Accordion Item #3</button></h3>
                                <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong>
                                        It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>
                                        , though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card rounded-0 bg-light mt-xl-5">
                            <div class="card-body p-4 py-lg-5">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="text-center">
                                        <div class="h6 fs-4 fw-bolder">Punya pertanyaan lain?</div>
                                        <p class="text-muted fs-6 mb-4">
                                            Hubungi kami
                                            <br />
                                            <a href="#!">support@selir.id</a>
                                        </p>
                                        <div class="h6 fs-5 fw-bolder">Follow us</div>
                                        <a class="fs-5 px-2 link-dark" href="#!"><i class="fa-brands fa-facebook"></i></a>
                                        <a class="fs-5 px-2 link-dark" href="#!"><i class="fa-brands fa-twitter"></i></a>
                                        <a class="fs-5 px-2 link-dark" href="#!"><i class="fa-brands fa-instagram"></i></a>
                                        <a class="fs-5 px-2 link-dark" href="#!"><i class="fa-brands fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <?php $this->load->view('public/_partials/footer.php') ?>
    <?php $this->load->view('templates/js.php') ?>
</body>

</html>