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
                                        <?= str_replace("_", " ", ucfirst($this->uri->segment(2))) . " List" ?>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="container-fluid px-4">
                    <div class="page-header-content">
                        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
                    </div>
                    <?php if ($this->session->flashdata('alert-error')) : ?>
                        <div class="alert alert-danger mt-2" role="alert">
                            <?= $this->session->flashdata('alert-error') ?>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- Main page content-->
                <div class="container-fluid px-4 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Tanggal</th>
                                        <th>Jumlah</th>
                                        <th>User ID</th>
                                        <th>Produk ID</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>NO</th>
                                        <th>Tanggal</th>
                                        <th>Jumlah</th>
                                        <th>User ID</th>
                                        <th>Produk ID</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $id = 1;
                                    foreach ($pesanan as $row) :
                                    ?>
                                        <tr>
                                            <td><?= $id ?></td>
                                            <td><?= $row->tanggal ?></td>
                                            <td><?= $row->jumlah ?></td>
                                            <td><?= $row->users_id ?></td>
                                            <td><?= $row->produk_id ?></td>
                                            <td>
                                                <a href="<?= site_url('admin/pesanan/edit/' . $this->secure->encrypt_url($row->id)) ?>" class="btn btn-datatable btn-icon btn-warning me-2"><i data-feather="edit"></i></a>
                                                <a onclick="confirm('Kamu yakin ingin menghapus ini?')" href="<?= site_url('admin/pesanan/delete/' . $this->secure->encrypt_url($row->id)) ?>" class="btn btn-datatable btn-icon btn-danger"><i data-feather="trash-2"></i></a>
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
            </main>

            <!-- Modal -->
            <?php $this->load->view("admin/pesanan/modal-add.php") ?>

            <!-- Footer -->
            <?php $this->load->view("admin/_partials/footer.php") ?>

        </div>
    </div>
    <?php $this->load->view("templates/js.php") ?>
</body>

</html>