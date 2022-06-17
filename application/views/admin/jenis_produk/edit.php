<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view("admin/_partials/navbar.php") ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?= "Data ke " . ucfirst($this->uri->segment(4)) ?></h1>

                    <!-- Breadcrumb -->
                    <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

                    <!-- Smart Alert -->
                    <?php $this->load->view("admin/_partials/smart-alert.php") ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        </div>
                        <form action="" method="POST">
                            <div class="modal-body">
                                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                <div class="form-group mb-2 row">
                                    <label for="id" class="col-4 col-form-label">ID</label>
                                    <div class="col-8">
                                        <input id="id" value="<?= $jenis_produk->id ?>" name="id" type="number" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="form-group mb-2 row">
                                    <label for="nama" class="col-4 col-form-label">Jenis Produk</label>
                                    <div class="col-8">
                                        <input id="nama" value="<?= $jenis_produk->nama ?>" placeholder="Masukan Nama" name="nama" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="<?= site_url('admin/jenis_produk') ?>" type="button" class="btn btn-secondary">Close</a>
                                <input name="submit" type="submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view("admin/_partials/footer.php") ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php $this->load->view("admin/_partials/scroll_top.php") ?>

    <!-- Logout Modal-->
    <?php $this->load->view("admin/_partials/logout_modal.php") ?>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>