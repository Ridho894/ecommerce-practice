<?php $this->load->view('layouts/template'); ?>
<div id="app">
    <section class="section">
        <div class="container">
            <div class="row">
                <?php $this->load->view('components/navbar'); ?>
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="logo" width="100" class="shadow-light mx-auto">
                    </div>
                    <?php if ($this->session->flashdata('login_failed')) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Login is invalid
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Login</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?php echo base_url() ?>index.php/auth/login_user" class="needs-validation" novalidate="">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your email
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                        <div class="float-right">
                                            <a href="auth-forgot-password.html" class="text-small">
                                                Forgot Password?
                                            </a>
                                        </div>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Login
                                    </button>
                                </div>
                                <div class="mt-5 text-muted text-center">
                                    Don't have an account? <a href="<?= base_url(); ?>index.php/auth/register">Create One</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer" style="cursor: pointer;" onclick="window.open('https://rdplatform.tech/')">
                        Copyright &copy; RD - Platform 2022
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>