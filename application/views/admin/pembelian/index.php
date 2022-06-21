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

                    <!-- Breadcrumb -->
                    <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

                    <!-- Smart Alert -->
                    <?php $this->load->view("admin/_partials/smart-alert.php") ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <h1 class="m-0 h5 text-gray-800"><?= "Table " . ucfirst($this->uri->segment(2)) ?></h1>
                                </div>
                                <div class="col-sm-6">
                                    <button type="button" class="float-sm-right btn btn-success btn-icon-split" data-toggle="modal" data-target="#addModal">
                                        <span class="icon text-white-50">
                                            <i class="fa-solid fa-plus"></i>
                                        </span>
                                        <span class="text">Tambah Data</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Tanggal</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                            <th>Produk ID</th>
                                            <th>Suplier ID</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NO</th>
                                            <th>Tanggal</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                            <th>Produk ID</th>
                                            <th>Suplier ID</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $id = 1;
                                        foreach ($pembelian as $row) :
                                        ?>
                                            <tr>
                                                <td><?= $id ?></td>
                                                <td><?= $row->tanggal ?></td>
                                                <td><?= $row->jumlah ?></td>
                                                <td><?= $row->harga ?></td>
                                                <td><?= $row->produk_id ?></td>
                                                <td><?= $row->suplier_id ?></td>
                                                <td>
                                                    <a href="<?= site_url('admin/pembelian/edit/' . $this->secure->encrypt_url($row->id)) ?>" class="btn btn-warning btn-circle btn-sm">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>
                                                    <a onclick="deleteConfirm('<?= site_url('admin/pembelian/delete/' . $this->secure->encrypt_url($row->id)) ?>')" class="btn btn-danger btn-circle btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                            $id++;
                                        endforeach;
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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

    <!-- Modal -->
    <?php $this->load->view("admin/pembelian/modal-add.php") ?>
    <?php $this->load->view("admin/pembelian/modal-delete.php") ?>

    <!-- Scroll to Top Button-->
    <?php $this->load->view("admin/_partials/scroll_top.php") ?>

    <!-- Logout Modal-->
    <?php $this->load->view("admin/_partials/logout_modal.php") ?>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>