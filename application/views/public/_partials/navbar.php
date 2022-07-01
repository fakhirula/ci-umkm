<div class="container ">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
        <a href="<?= base_url() ?>" class="d-flex align-items-center fs-1 fw-bolder col-md-3 mb-2 mb-md-0 text-light text-decoration-none">
            <?= SITE_NAME ?>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="<?= base_url('produk') ?>" class="nav-link px-2 link-light">Produk</a></li>
            <li><a href="<?= base_url('kategori') ?>" class="nav-link px-2 link-light">Kategori</a></li>
            <li><a href="<?= base_url('tentang') ?>" class="nav-link px-2 link-light">Tentang</a></li>
            <li><a href="<?= base_url('faq') ?>" class="nav-link px-2 link-light">FAQs</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <?php if (!$current_user) : ?>
                <a href="<?= base_url('auth/login') ?>" class="btn btn-light rounded-0 me-2">Login</a>
                <a href="<?= base_url('auth/registration') ?>" class="btn btn-outline-light rounded-0">Sign-up</a>
            <?php endif; ?>
            <?php if ($current_user) : ?>
                <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4" style="list-style-type: none;">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="<?= base_url('assets/images/profiles/profile-1.png') ?>" /></a>
                    <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                        <h6 class="dropdown-header d-flex align-items-center">
                            <div class="dropdown-user-details">
                                <div class="dropdown-user-details-name"><?= htmlentities($current_user->username) ?></div>
                                <div class="dropdown-user-details-email"><?= htmlentities($current_user->email) ?></div>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('public/profile') ?>">
                            <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                            Account
                        </a>
                        <button class="dropdown-item" onclick="logoutConfirm()" type="button" data-bs-toggle="modal" data-bs-target="#logoutModal">
                            <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                            Logout
                        </button>
                    </div>
                </li>
            <?php endif; ?>
        </div>
    </header>
</div>
<?php $this->load->view("admin/_partials/logout_modal.php") ?>