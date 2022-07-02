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
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                        <input id="id" name="id" type="hidden" value="<?= $this->secure->encrypt_url($produk->id) ?>" required readonly />
                                        <input id="kode" name="kode" type="hidden" value="<?= $this->secure->encrypt_url($produk->kode) ?>" required readonly />
                                        <div class="mb-3">
                                            <label class="small mb-1" for="nama">Nama Produk</label>
                                            <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" id="nama" name="nama" type="text" value="<?= $produk->nama ?>" required />
                                            <div class="invalid-feedback">
                                                <?php echo form_error('nama') ?>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="small mb-1" for="stok">Stok</label>
                                            <input class="form-control <?php echo form_error('stok') ? 'is-invalid' : '' ?>" id="stok" name="stok" type="text" value="<?= $produk->stok ?>" required />
                                            <div class="invalid-feedback">
                                                <?php echo form_error('stok') ?>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="small mb-1" for="harga_beli">Harga Beli</label>
                                            <input class="form-control <?php echo form_error('harga_beli') ? 'is-invalid' : '' ?>" id="harga_beli" name="harga_beli" type="text" value="<?= $produk->harga_beli ?>" required />
                                            <div class="invalid-feedback">
                                                <?php echo form_error('harga_beli') ?>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="small mb-1" for="harga_jual">Harga Jual</label>
                                            <input class="form-control <?php echo form_error('harga_jual') ? 'is-invalid' : '' ?>" id="harga_jual" name="harga_jual" type="text" value="<?= $produk->harga_jual ?>" required />
                                            <div class="invalid-feedback">
                                                <?php echo form_error('harga_jual') ?>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="small mb-1" for="foto">Foto</label>
                                            <input type="hidden" value="<?= $produk->foto ?>" name="gambar">
                                            <input class="form-control <?php echo form_error('foto') ? 'is-invalid' : '' ?>" id="foto" name="foto" value="<?= $produk->foto ?>" type="file" accept="image/png, image/jpeg, image/jpg" />
                                            <div class="invalid-feedback">
                                                <?php echo form_error('foto') ?>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="small mb-1">Jenis Produk</label>
                                            <select id="jenis_id" name="jenis_id" class="form-select <?php echo form_error('jenis_id') ? 'is-invalid' : '' ?>" aria-label="Default select example">
                                                <option selected disabled>Pilih Jenis Produk:</option>
                                                <?php foreach ($jenis_produk as $row) : ?>
                                                    <option <?php if ($produk->jenis_id == $row->id) {
                                                                echo 'selected ';
                                                            } ?>value="<?= $row->id; ?>"><?= $row->nama; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('jenis_id') ?>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="small mb-1" for="deskripsi">Deskripsi</label>

                                            <textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid' : '' ?>" id="deskripsi" name="deskripsi" placeholder="Deskripsi" required><?= $produk->deskripsi ?></textarea>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('deskripsi') ?>
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
            <?php $this->load->view("admin/produk/modal-add.php") ?>

            <!-- Footer -->
            <?php $this->load->view("admin/_partials/footer.php") ?>

        </div>
    </div>
    <?php $this->load->view("templates/js.php") ?>
</body>

</html>