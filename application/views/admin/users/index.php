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
                    <h1 class="h3 mb-2 text-gray-800"><?= "Table " . ucfirst($this->uri->segment(2)) ?></h1>

                    <!-- Breadcrumb -->
                    <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                        foreach ($list_users as $user) {
                                        ?>
                                            <tr>
                                                <td><?= $id ?></td>
                                                <td><?= $user->username ?></td>
                                                <td><?= $user->email ?></td>
                                                <td><?= $user->status ?></td>
                                                <td><?= $user->role ?></td>
                                                <td><?= $user->created_at ?></td>
                                                <td><?= $user->last_login ?></td>
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-circle btn-sm">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-circle btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                            $id++;
                                        }
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

    <!-- Scroll to Top Button-->
    <?php $this->load->view("admin/_partials/scroll_top.php") ?>

    <!-- Logout Modal-->
    <?php $this->load->view("admin/_partials/logout_modal.php") ?>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>