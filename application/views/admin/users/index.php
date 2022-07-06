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
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Role</th>
                                        <th>Created at</th>
                                        <th>Last Login</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Role</th>
                                        <th>Created at</th>
                                        <th>Last Login</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $id = 1;
                                    foreach ($users as $row) :
                                    ?>
                                        <tr>
                                            <td><?= $id ?></td>
                                            <td><?= $row->username ?></td>
                                            <td><?= $row->email ?></td>
                                            <td><?= $row->status ?></td>
                                            <td><?= $row->role ?></td>
                                            <td><?= $row->created_at ?></td>
                                            <td><?= $row->last_login ?></td>
                                            <td>
                                                <?php if ($row->id != $current_user->id && $row->role != 'administrator') : ?>
                                                    <?php if ($row->status == 0) : ?>
                                                        <a href="<?= site_url('admin/users/setActive/' . $this->secure->encrypt_url($row->id)) ?>" class="btn btn-success btn-sm">
                                                            Aktifkan
                                                        </a>
                                                    <?php else : ?>
                                                        <a href="<?= site_url('admin/users/setNonactive/' . $this->secure->encrypt_url($row->id)) ?>" class="btn btn-warning btn-sm">
                                                            Nonaktifkan
                                                        </a>
                                                    <?php endif; ?>
                                                    <a onclick="deleteConfirm('<?= site_url('admin/users/delete/' . $this->secure->encrypt_url($row->id)) ?>')" href="#!" id="btn-delete" class="btn btn-datatable btn-icon btn-danger"><i data-feather="trash-2"></i></a>
                                                <?php endif; ?>
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

            <!-- Footer -->
            <?php $this->load->view("admin/_partials/footer.php") ?>

        </div>
    </div>
    <?php $this->load->view("templates/js.php") ?>
</body>

</html>