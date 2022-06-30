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
    <section class="container py-5">
        <div class="">
            <div class="container-xl px-4 mt-4">
                <!-- Account page navigation-->
                <nav class="nav nav-borders">
                    <a class="nav-link active ms-0" href="account-profile.html">Profile</a>
                </nav>
                <hr class="mt-0 mb-4" />
                <div class="row">
                    <div class="col-xl-4">
                        <!-- Profile picture card-->
                        <div class="card rounded-0 mb-4 mb-xl-0">
                            <div class="card-header text-dark">Profile Picture</div>
                            <div class="card-body text-center">
                                <!-- Profile picture image-->
                                <img class="img-account-profile rounded-circle mb-2" src="<?= base_url('assets/images/profiles/profile-1.png'); ?>" alt="" />
                                <!-- Profile update button-->
                                <a href="#change-pw" class="btn btn-dark rounded-0 mt-2" type="button">Amankan Akunmu</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <!-- Account details card-->
                        <div class="card rounded-0 mb-4">
                            <div class="card-header text-dark">Account Details</div>
                            <div class="card-body">
                                <form>
                                    <!-- Form Group (username)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                                        <input class="form-control" id="inputUsername" type="text" value="<?= htmlentities($current_user->username) ?>" readonly />
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
                    <div class="col-xl-8">
                        <?php if ($this->session->flashdata('alert-error')) : ?>
                            <div class="alert alert-danger mt-2" role="alert">
                                <?= $this->session->flashdata('alert-error') ?>
                            </div>
                        <?php endif; ?>
                        <!-- Change Password card-->
                        <div class="card rounded-0 mb-4" id="change-pw">
                            <div class="card-header text-dark">Change Password</div>
                            <div class="card-body">
                                <form class="user" method="POST" action="<?= base_url('public/profile/change_password') ?>">
                                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                    <!-- Form Group (old password)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="oldpassword">Old Password</label>
                                        <input class="form-control <?= form_error('oldpassword') ? 'is-invalid' : '' ?>" id="oldpassword" name="oldpassword" type="password" placeholder="Enter Old Password" required />
                                        <div class="invalid-feedback">
                                            <?= form_error('oldpassword') ?>
                                        </div>
                                    </div>
                                    <!-- Form Row    -->
                                    <div class="row gx-3 ">
                                        <div class="col-md-6">
                                            <!-- Form Group (password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="newpassword">New Password</label>
                                                <input class="form-control <?= form_error('newpassword') ? 'is-invalid' : '' ?>" id="newpassword" name="newpassword" type="password" placeholder="Enter New Password" required />
                                                <div class="invalid-feedback">
                                                    <?= form_error('newpassword') ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Form Group (confirm password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="confirmPassword">Confirm New Password</label>
                                                <input class="form-control <?= form_error('confirmPassword') ? 'is-invalid' : '' ?>" id="confirmPassword" name="confirmPassword" type="password" placeholder="Enter Confirm New Password" required />
                                                <div class="invalid-feedback">
                                                    <?= form_error('confirmPassword') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-dark rounded-0 btn-block">Ubah Password</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <?php $this->load->view('public/_partials/footer.php') ?>
    <?php $this->load->view('templates/js.php') ?>
</body>

</html>