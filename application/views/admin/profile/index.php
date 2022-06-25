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
                <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                    <div class="container-xl px-4">
                        <div class="page-header-content">
                            <div class="row align-items-center justify-content-between pt-3">
                                <div class="col-auto mb-3">
                                    <h1 class="page-header-title">
                                        <div class="page-header-icon"><i data-feather="user"></i></div>
                                        <?= str_replace("_", " ", ucfirst($this->uri->segment(2))) ?>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Main page content-->
                <div class="container-xl px-4 mt-4">
                    <!-- Account page navigation-->
                    <nav class="nav nav-borders">
                        <a class="nav-link active ms-0" href="account-profile.html">Profile</a>
                    </nav>
                    <hr class="mt-0 mb-4" />
                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Profile picture card-->
                            <div class="card mb-4 mb-xl-0">
                                <div class="card-header">Profile Picture</div>
                                <div class="card-body text-center">
                                    <!-- Profile picture image-->
                                    <img class="img-account-profile rounded-circle mb-2" src="<?= base_url('assets/img/illustrations/profiles/profile-1.png') ?>" alt="" />
                                    <!-- Profile picture help block-->
                                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                    <!-- Profile picture upload button-->
                                    <button class="btn btn-primary" type="button">Upload new image</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <!-- Account details card-->
                            <div class="card mb-4">
                                <div class="card-header">Account Details</div>
                                <div class="card-body">
                                    <form>
                                        <!-- Form Group (username)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                                            <input class="form-control" id="inputUsername" type="text" value="<?= htmlentities($current_user->role) ?>" readonly />
                                        </div>
                                        <!-- Form Group (email address)-->

                                        <!-- Form Row-->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (email address)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                                <input class="form-control" id="inputEmailAddress" type="email" value="<?= htmlentities($current_user->email) ?>" readonly />
                                            </div>
                                            <!-- Form Group (role)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputRole">Role</label>
                                                <input class="form-control" id="inputRole" type="text" value="<?= htmlentities($current_user->role) ?>" readonly />
                                            </div>
                                        </div>
                                        <!-- Form Row-->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (CreatedAt)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputCreatedAt">Created At</label>
                                                <input class="form-control" id="inputCreatedAt" type="text" value="<?= htmlentities($current_user->created_at) ?>" readonly />
                                            </div>
                                            <!-- Form Group (LastLogin)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputLastLogin">Last Login</label>
                                                <input class="form-control" id="inputLastLogin" type="text" name="LastLogin" value="<?= htmlentities($current_user->last_login) ?>" readonly />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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