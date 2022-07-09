<?php $this->load->view('layouts/template'); ?>
<!-- Modal Add Courier -->
<form method="POST" autocomplete="off" action="<?= base_url(); ?>index.php/pages/add_courier" class="modal fade" id="modal_addCourier" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Courier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input required autofocus type="text" autofocus name="namaKurir" placeholder="Courier Name" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">YES</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal">NO</button>
            </div>
        </div>
    </div>
</form>
<!-- Modal Edit Courier -->
<div class="modal fade" id="modal_editCourier" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div id="edit-courier"></div>
    </div>
</div>
<!-- Modal Add City -->
<form method="POST" autocomplete="off" action="<?= base_url(); ?>index.php/pages/add_city" class="modal fade" id="modal_addCity" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add City</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input required autofocus type="text" autofocus name="namaKota" placeholder="City Name" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">YES</button>
                <button type="button" data-dismiss="modal" class="btn btn-warning">NO</button>
            </div>
        </div>
    </div>
</form>
<!-- Modal Edit City -->
<div class="modal fade" id="modal_editCity" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div id="edit-city"></div>
    </div>
</div>
<div class="navbar-bg"></div>
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
                        <div class="breadcrumb-item active"><a href="#"><?= $title; ?></a></div>
                    </div>
                </div>
            </section>
            <div class="">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Ongkos Kirim</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Products</th>
                                        <th>Kategori</th>
                                        <th>Gambar</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Berat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php
                                    foreach ($products as $p) :
                                    ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $p['namaProduk']; ?></td>
                                            <td><?= $p['idKat']; ?></td>
                                            <td>
                                                <img src="<?= base_url('assets/uploads/' . $p['foto']); ?>" alt="<?= $p['foto']; ?>" width="75px">
                                            </td>
                                            <td><?= $p['harga']; ?></td>
                                            <td><?= $p['stok']; ?></td>
                                            <td><?= $p['berat']; ?></td>
                                            <td>
                                                <a href="<?= base_url('index.php/pages/edit_product/' . $p['idProduk']); ?>" id="editShippingCost" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="" class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <tr style="text-align: center;">
                                        <td colspan="8">
                                            <a href="<?= base_url(); ?>index.php/pages/add_product" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> ADD PRODUCT</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('components/footer'); ?>
    </div>
</div>