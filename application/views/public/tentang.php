<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('templates/head.php') ?>
</head>

<body id="page-top">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar-dark bg-dark">
            <?php $this->load->view('public/_partials/navbar.php') ?>
        </nav>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xxl-6">
                        <div class="text-center my-5">
                            <h1 class="display-6 fw-bolder mb-3">Berawal dari niat melestarikan budaya dan membantu sesama.</h1>
                            <p class="lead fw-normal text-muted mb-4">SELIR.ID merupakan showroom batik terbesar dan terluas di Indonesia. Kata SELIR diambil dari arti "Istri kesekian Raja". Hal ini juga berarti SELIR.ID merupakan reseller yang mengambil barang olahan dari pengrajin batik tradisional.</p>
                            <a class="btn btn-dark rounded-0 btn-lg" href="#scroll-target">Awal Cerita Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- About section one-->
        <section class="py-5 bg-light" id="scroll-target">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="<?= base_url('assets/images/ilustrations/about-1.jpg') ?>" alt="Sumber Daya Alam Batik Indonesia" /></div>
                    <div class="col-lg-6">
                        <h2 class="display-6 fw-bolder">Pendirian Kami</h2>
                        <p class="lead fw-normal mb-0">Indonesia adalah negara yang beraneka sumber daya alamnya, keanekaragaman itulah yang menjadi Indonesia. Batik adalah contohnya, hasil karya anak bangsa Indonesia yang merupakan paduan antara seni dan teknologi dari leluhur bangsa Indonesia.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About section two-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="<?= base_url('assets/images/ilustrations/about-2.jpg') ?>" alt="Berkembang Bersama SELIR.ID" /></div>
                    <div class="col-lg-6">
                        <h2 class="display-6 fw-bolder">Berkembang &amp; seterusnya</h2>
                        <p class="lead fw-normal text-muted mb-0">Kami berkomitmen untuk memanfaatkan SDA dan SDM Nusantara dengan sebaik-baiknya. Melestarikan budaya dan mengurangi pengangguran adalah tujuan utama kami, agar budaya warisan Batik Indonesia terkenal hingga anak cucu kita.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team members section-->
        <section class="py-5 bg-light">
            <div class="container px-5 my-5">
                <div class="text-center">
                    <h2 class="display-6 fw-bolder">Tim Kami</h2>
                    <p class="lead fw-normal text-muted mb-5">Mendedikasikan kualitas untuk kesuksesan pelangan</p>
                </div>
                <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="<?= base_url('assets/images/profiles/rul.png') ?>" alt="Profile Fakhirul Akmal" />
                            <h5 class="fw-bolder">Fakhirul Akmal</h5>
                            <div class="fst-italic text-muted">Full Stack Web Developer</div>
                        </div>
                    </div>
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="<?= base_url('assets/images/profiles/fauzan.png') ?>" alt="Profile Fauzan Rizqi Ardiansyah" />
                            <h5 class="fw-bolder">Fauzan Rizqi Ardiansyah</h5>
                            <div class="fst-italic text-muted">Front-End Web Designer</div>
                        </div>
                    </div>
                    <div class="col mb-5 mb-5 mb-sm-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="<?= base_url('assets/images/profiles/irfan.png') ?>" alt="Profile Irfan Rian Fahmi" />
                            <h5 class="fw-bolder">Irfan Rian Fahmi</h5>
                            <div class="fst-italic text-muted">Front-End Web Designer</div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="<?= base_url('assets/images/profiles/sandy.png') ?>" alt="Profile Sandy Palendra" />
                            <h5 class="fw-bolder">Sandy Palendra</h5>
                            <div class="fst-italic text-muted">UI Designer</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <?php $this->load->view('public/_partials/footer.php') ?>
    <!-- Bootstrap core JS-->
    <?php $this->load->view('templates/js.php') ?>
</body>

</html>