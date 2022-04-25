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
                        <div class="breadcrumb-item active"><a href="#">Add Service Delivery</a></div>
                    </div>
                </div>
            </section>
            <form method="POST" action="<?= base_url(); ?>index.php/pages/update_service_delivery/<?= $shippingCost[0]['id']; ?>" class="">
                <div class="">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Kurir</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="idKurir">
                                        <?php foreach ($courier as $c) : ?>
                                            <option selected="<?php $shippingCost[0]['namaKurir'] ?>" value="<?= $c['idKurir'] ?>"><?= $c['namaKurir'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Kota Asal</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="idKotaAsal">
                                        <?php foreach ($city as $c) : ?>
                                            <option selected="<?php $shippingCost[0]['asal'] ?>" value="<?= $c['idKota'] ?>"><?= $c['namaKota'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Kota Tujuan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="idKotaTujuan">
                                        <?php foreach ($city as $c) : ?>
                                            <option selected="<?php $shippingCost[0]['tujuan'] ?>" value="<?= $c['idKota'] ?>"><?= $c['namaKota'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Ongkos</label>
                                <div class="col-sm-9">
                                    <input type="number" name="biaya" placeholder="Ongkos" class="form-control" value="<?= $shippingCost[0]['biaya'] ?>" placeholder="Ongkos">
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
            </form>
        </div>
        <?php $this->load->view('components/footer'); ?>
    </div>
</div>