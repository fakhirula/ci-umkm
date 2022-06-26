<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("templates/head.php") ?>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <!-- Basic registration form-->
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center">
                                    <h3 class="fw-light my-3">Create an Account!</h3>
                                </div>
                                <div class="card-body">
                                    <!-- Registration form-->
                                    <form class="user" method="POST" action="<?= base_url('auth/registration') ?>">
                                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                        <!-- Form Row-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="username">Username</label>
                                            <input class="form-control <?= form_error('username') ? 'is-invalid' : '' ?>" id="username" name="username" type="text" placeholder="Enter username" required autofocus />
                                            <div class="invalid-feedback">
                                                <?= form_error('username') ?>
                                            </div>
                                        </div>
                                        <!-- Form Group (email address)            -->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="email">Email</label>
                                            <input class="form-control <?= form_error('email') ? 'is-invalid' : '' ?>" id="email" name="email" type="email" placeholder="Enter email address" required autofocus />
                                            <div class="invalid-feedback">
                                                <?= form_error('email') ?>
                                            </div>
                                        </div>
                                        <!-- Form Row    -->
                                        <div class="row gx-3">
                                            <div class="col-md-6">
                                                <!-- Form Group (password)-->
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="password">Password</label>
                                                    <input class="form-control <?= form_error('password') ? 'is-invalid' : '' ?>" id="password" name="password" type="password" placeholder="Enter password" required autofocus />
                                                    <div class="invalid-feedback">
                                                        <?= form_error('password') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Form Group (confirm password)-->
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="confirmPassword">Confirm Password</label>
                                                    <input class="form-control <?= form_error('confirmPassword') ? 'is-invalid' : '' ?>" id="confirmPassword" name="confirmPassword" type="password" placeholder="Enter Confirm password" required autofocus />
                                                    <div class="invalid-feedback">
                                                        <?= form_error('confirmPassword') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Register Account</button>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="<?= base_url('auth/login') ?>">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <!-- Footer -->
            <?php $this->load->view("admin/_partials/footer.php") ?>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view("templates/js.php") ?>
</body>

</html>