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
    <div class="container">
        <main>
            <div class="py-5 row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-dark">Produk Kamu</span>
                        <span class="badge bg-dark rounded-pill">1</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0"><?= $produk->nama; ?></h6>
                                <small class="text-muted"><?= $produk->deskripsi; ?></small>
                            </div>
                            <h6 class="my-0"><?= $this->secure->decrypt_url($jumlah) . 'x' ?> Rp<?= number_format($produk->harga_jual * $this->secure->decrypt_url($jumlah), 0, ',', '.'); ?></h6>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" <?= set_value('redeem'); ?> id="redeem" name="redeem" class="form-control" placeholder="Promo code">
                            <button type="submit" onclick="
                            Swal.fire(
                            'Success',
                            'Kode berhasil digunakan',
                            'success'
                            )" class="btn btn-dark">Redeem</button>
                        </div>
                    </form>
                </div>
                <?php if ($this->session->flashdata('alert-error')) : ?>
                    <div class="alert alert-danger mt-2" role="alert">
                        <?= $this->session->flashdata('alert-error') ?>
                    </div>
                <?php endif; ?>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Alamat Pengiriman</h4>
                    <form action="<?php base_url('public/produk/checkout') ?>" method="POST">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                        <input type="hidden" name="produk_id" id="produk_id" value="<?= $this->secure->encrypt_url($produk->id) ?>">
                        <input type="hidden" name="users_id" id="users_id" value="<?= $this->secure->encrypt_url($current_user->id) ?>">
                        <input type="hidden" name="jumlah" id="jumlah" value="<?= $this->secure->encrypt_url($jumlah) ?>" type="number" readonly>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="fullname" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="fullname" placeholder="Your Name" required autofocus>
                                <div class="invalid-feedback">
                                    Valid nama lengkap is required.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" value="<?= $current_user->username; ?>" id="username" placeholder="Username" required readonly>
                                    <div class="invalid-feedback">
                                        Your username is required.
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                                <input type="email" class="form-control" value="<?= $current_user->email; ?>" id="email" placeholder="you@example.com" required readonly>
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">Alamat Lengkap</label>
                                <input type="text" class="form-control" id="address" placeholder="Jalan Kebagusan Raya rt.01/02 no.03 Sukmajaya Depok" required autofocus>
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <h4 class="mb-3">Metode Pembayaran</h4>

                        <div class="my-3">
                            <div class="form-check">
                                <input id="transfer" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label" for="transfer">Transfer Bank</label>
                            </div>
                            <div class="form-check">
                                <input id="virtualaccount" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label" for="virtualaccount">Virtual Account</label>
                            </div>
                            <div class="form-check">
                                <input id="mitra" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="mitra">Mitra SELIR.ID</label>
                            </div>
                            <div class="form-check">
                                <input id="minimarket" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="minimarket">Minimarket</label>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-dark btn-lg rounded-0" type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <!-- Footer-->
    <?php $this->load->view('public/_partials/footer.php') ?>
    <?php $this->load->view('templates/js.php') ?>
</body>

</html>