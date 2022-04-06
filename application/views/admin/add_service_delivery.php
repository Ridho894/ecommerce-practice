<?php $this->load->view('layouts/template'); ?>
<div id="app">
    <div class="main-wrapper">

        <?php $this->load->view('components/navbar_admin'); ?>

        <?php $this->load->view('components/sidebar'); ?>

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Add Service Delivery</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                        <div class="breadcrumb-item active"><a href="#">Add Service Delivery</a></div>
                    </div>
                </div>
            </section>
            <div class="">
                <div class="">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Kurir</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <?php foreach ($courier as $c) : ?>
                                            <option value="<?= $c['id'] ?>"><?= $c['namaKurir'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Kota Asal</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <?php foreach ($city as $c) : ?>
                                            <option value="<?= $c['id'] ?>"><?= $c['namaKota'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Kota Tujuan</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <?php foreach ($city as $c) : ?>
                                            <option value="<?= $c['id'] ?>"><?= $c['namaKota'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Ongkos</label>
                                <div class="col-sm-9">
                                    <input type="number" placeholder="Ongkos" class="form-control" id="inputPassword3" placeholder="Ongkos">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning">
                                ADD
                            </button>
                            <a href="<?= base_url(); ?>index.php/pages/delivery" class="btn btn-danger">
                                CANCEL
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('components/footer'); ?>
    </div>
</div>