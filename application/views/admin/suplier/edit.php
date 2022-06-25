<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("templates/head.php") ?>
</head>

<body class="nav-fixed">

    <!-- Navbar -->
    <?php $this->load->view("admin/_partials/navbar.php") ?>

    <div id="layoutSidenav">

        <!-- Sidebar -->
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
        <div id="layoutSidenav_content">
            <main>
                <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-3">
                    <div class="container-fluid px-4">
                        <div class="page-header-content">
                            <div class="row align-items-center justify-content-between pt-3">
                                <div class="col-auto mb-3">
                                    <h1 class="page-header-title">
                                        <div class="page-header-icon"><i data-feather="truck"></i></div>
                                        <?= "Edit " . str_replace("_", " ", ucfirst($this->uri->segment(2))) ?>
                                    </h1>
                                </div>
                                <div class="col-12 col-xl-auto mb-3">
                                    <a class="btn btn-sm btn-light text-primary" href="<?= base_url('admin/' . $this->uri->segment(2)) ?>">
                                        <i class="me-1" data-feather="arrow-left"></i>
                                        <?= "Back to " . str_replace("_", " ", ucfirst($this->uri->segment(2))) . " List" ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Main page content-->
                <div class="container-xl px-4 mt-4">
                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Profile picture card-->
                            <div class="card mb-4 mb-xl-0">
                                <div class="card-header">Perhatikan!</div>
                                <div class="card-body">
                                    <ol class="list-group list-group-numbered">
                                        <li class="list-group-item border-0">Wajib mengisi semua field.</li>
                                        <li class="list-group-item border-0">Mohon isi field dengan data yang sebenar-benarnya.</li>
                                        <li class="list-group-item border-0">Perhatikan instruksi jika terjadi kesalahan.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="card mb-4">
                                <div class="card-header"><?= str_replace("_", " ", ucfirst($this->uri->segment(2))) . " Details" ?></div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                        <input id="id" name="id" type="hidden" value="<?= $suplier->id ?>" required readonly />
                                        <div class="mb-3">
                                            <label class="small mb-1" for="nama">Nama Perusahaan</label>
                                            <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" id="nama" name="nama" type="text" value="<?= $suplier->nama ?>" required />
                                            <div class="invalid-feedback">
                                                <?php echo form_error('nama') ?>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="small mb-1" for="kota">Kota</label>
                                            <input class="form-control <?php echo form_error('kota') ? 'is-invalid' : '' ?>" id="kota" name="kota" type="text" value="<?= $suplier->kota ?>" required />
                                            <div class="invalid-feedback">
                                                <?php echo form_error('kota') ?>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="small mb-1" for="kontak">Kontak</label>
                                            <input class="form-control <?php echo form_error('kontak') ? 'is-invalid' : '' ?>" id="kontak" name="kontak" type="text" value="<?= $suplier->kontak ?>" required />
                                            <div class="invalid-feedback">
                                                <?php echo form_error('kontak') ?>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="small mb-1" for="alamat">Alamat</label>
                                            <input class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" id="alamat" name="alamat" type="text" value="<?= $suplier->alamat ?>" required />
                                            <div class="invalid-feedback">
                                                <?php echo form_error('alamat') ?>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="small mb-1" for="telpon">Telpon</label>
                                            <input class="form-control <?php echo form_error('telpon') ? 'is-invalid' : '' ?>" id="telpon" name="telpon" type="text" value="<?= $suplier->telpon ?>" required />
                                            <div class="invalid-feedback">
                                                <?php echo form_error('telpon') ?>
                                            </div>
                                        </div>
                                        <!-- Submit button-->
                                        <input name="submit" type="submit" class="btn btn-primary">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Modal -->
            <?php $this->load->view("admin/suplier/modal-add.php") ?>

            <!-- Footer -->
            <?php $this->load->view("admin/_partials/footer.php") ?>

        </div>
    </div>
    <?php $this->load->view("templates/js.php") ?>
</body>

</html>