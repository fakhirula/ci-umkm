<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("templates/head.php") ?>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                    </div>
                                    <?php if ($this->session->flashdata('message_login_error')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?= $this->session->flashdata('message_login_error'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <form action="" method="POST" class="user">
                                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                        <div class="form-group">
                                            <input name="username" id="username" value="<?php echo set_value('username'); ?>" type="text" class="form-control form-control-user" placeholder="Enter Username..." autofocus>
                                        </div>
                                        <div class="form-group">
                                            <input name="password" id="password" value="<?php echo set_value('password'); ?>" type="password" class="form-control form-control-user" placeholder="Password" autofocus>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/forgot_password') ?>">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/registration') ?>">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view("templates/js.php") ?>

</body>

</html>