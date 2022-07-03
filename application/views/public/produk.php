<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('templates/head.php') ?>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar-dark bg-dark">
        <?php $this->load->view('public/_partials/navbar.php') ?>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder text-white">Produk Unggulan</h1>
                <p class="lead fw-normal text-white-50 mb-0">Temukan yang terbaik dari produk paling populer</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <?php if (!$produk) echo '<h1 class="display-6 fw-bolder text-center text-red">Produk Tidak Ditemukan!</h1>'; ?>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 ">
                <?php foreach ($produk as $row) : ?>
                    <?php if ($row->stok > 0) : ?>
                        <div class="col mb-5">
                            <div class="card h-100 rounded-0">
                                <!-- Product image-->
                                <img class="card-img-top rounded-0" src="<?= base_url('assets/images/produk/' . $row->foto) ?>" alt="Foto <?= $row->nama; ?>" />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?= $row->nama; ?></h5>
                                        <!-- Product price-->
                                        <span class="text-decoration-line-through text-muted">Rp<?= number_format(($row->harga_jual - $row->harga_beli) + $row->harga_jual, 0, ',', '.'); ?></span>
                                        Rp<?= number_format($row->harga_jual, 0, ',', '.'); ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <a class="btn btn-dark rounded-0 mt-auto" href="<?= base_url('public/produk/detail_produk/' . $this->secure->encrypt_url($row->id)) ?>">Detail Produk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <?php $this->load->view('public/_partials/footer.php') ?>
    <?php $this->load->view('templates/js.php') ?>
</body>

</html>