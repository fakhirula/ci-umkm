<div class="container ">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
        <a href="<?= base_url() ?>" class="d-flex align-items-center fs-1 fw-bolder col-md-3 mb-2 mb-md-0 text-light text-decoration-none">
            <?= SITE_NAME ?>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="<?= base_url('produk') ?>" class="nav-link px-2 link-light">Produk</a></li>
            <li><a href="<?= base_url('kategori') ?>" class="nav-link px-2 link-light">Kategori</a></li>
            <li><a href="<?= base_url('tentang') ?>" class="nav-link px-2 link-light">Tentang</a></li>
            <li><a href="<?= base_url('suplier') ?>" class="nav-link px-2 link-light">Suplier</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-light rounded-0 me-2">Login</button>
            <button type="button" class="btn btn-light rounded-0">Sign-up</button>
        </div>
    </header>
</div>