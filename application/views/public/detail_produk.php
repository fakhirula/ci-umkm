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
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <img class="card-img-top rounded-0 mb-5 mb-md-0" src="<?= base_url('assets/images/produk/' . $produk->foto) ?>" alt="Foto <?= $produk->nama; ?>" />
                </div>
                <div class="col-md-6">
                    <div class="small mb-1">SKU: <?= $produk->kode; ?></div>
                    <h1 class="display-5 fw-bolder"><?= $produk->nama; ?></h1>
                    <div class="fs-5 mb-4">
                        <span class="text-decoration-line-through text-muted">Rp<?= number_format(($produk->harga_jual - $produk->harga_beli) + $produk->harga_jual, 0, ',', '.'); ?></span>
                        <span class="fs-1 fw-bold">Rp<?= number_format($produk->harga_jual, 0, ',', '.'); ?></span>
                    </div>
                    <p class="lead"><?= $produk->deskripsi; ?></p>
                    <p class="fs-6 fw-light mb-1">Stok tersedia: <?= $produk->stok; ?></p>
                    <form action="<?= site_url('public/produk/checkout/' . $this->secure->encrypt_url($produk->id)) ?>" method="GET" class="d-flex">
                        <input class="form-control rounded-0 text-center me-3" id="jumlah" name="jumlah" type="number" value="1" min="1" max="<?= $produk->stok; ?>" />
                        <button class="btn btn-dark rounded-0 flex-shrink-0" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Beli Sekarang!
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Rekomendasi items section-->
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Rekomendasi produk</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php foreach ($getRandomLimit as $row) : ?>
                    <div class="col mb-5">
                        <div class="card h-100 rounded-0">
                            <!-- Sale badge-->
                            <div class="badge bg-red text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale 50%</div>
                            <!-- Product image-->
                            <img class="card-img-top rounded-0" src="<?= base_url('assets/images/produk/' . $row->foto) ?>" alt="Foto <?= $row->nama; ?>" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $row->nama; ?></h5>
                                    <!-- Product price-->
                                    <span class="text-decoration-line-through text-muted">Rp<?= number_format(($produk->harga_jual - $produk->harga_beli) + $produk->harga_jual, 0, ',', '.'); ?></span>
                                    Rp<?= number_format($row->harga_jual, 0, ',', '.'); ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-dark rounded-0 mt-auto" href="<?= base_url('public/produk/detail_produk/' . $this->secure->encrypt_url($row->id)) ?>">Detail Produk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <?php $this->load->view('public/_partials/footer.php') ?>
    <?php $this->load->view('templates/js.php') ?>
</body>

</html>