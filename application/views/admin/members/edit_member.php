<?php $this->load->view('layouts/template'); ?>
<div id="app">
    <div class="main-wrapper">

        <?php $this->load->view('components/navbar_admin'); ?>

        <?php $this->load->view('components/sidebar'); ?>

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1><?= $title; ?></h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                        <div class="breadcrumb-item active"><a href="<?= base_url(); ?>index.php/pages/add_member"><?= $title; ?></a></div>
                    </div>
                </div>
            </section>
            <form method="POST" action="<?= base_url(); ?>index.php/pages/process_edit_member" class="">
                <div class="">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" name="username" placeholder="Username" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Nama Konsumen</label>
                                <div class="col-sm-9">
                                    <input type="text" name="namaKonsumen" placeholder="Nama Konsumen" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Kota</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="kota">
                                        <?php foreach ($city as $c) : ?>
                                            <option value="<?= $c['idKota'] ?>"><?= $c['namaKota'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <input type="text" name="alamat" placeholder="Alamat" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" name="email" placeholder="Email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" placeholder="Password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">No Telepon</label>
                                <div class="col-sm-9">
                                    <input type="number" name="tlpn" placeholder="Nomor Telepon" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select name="statusAktif" class="form-control">
                                        <option value="Y">AKTIF</option>
                                        <option value="N">NONAKTIF</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning">
                                UPDATE
                            </button>
                            <a href="<?= base_url(); ?>index.php/pages/members" class="btn btn-danger">
                                CANCEL
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?php $this->load->view('components/footer'); ?>
    </div>
</div>