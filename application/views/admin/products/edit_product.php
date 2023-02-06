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
            <?php
            foreach ($product as $p) :
            ?>
                <form method="POST" autocomplete="off" action="<?= base_url(); ?>index.php/pages/process_add_product" class="row" enctype="multipart/form-data">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input value="<?= $p['namaProduk']; ?>" type="text" name="nama" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" name="harga" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stock</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" name="stok" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Weight</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" name="berat" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric" name="kategori">
                                            <?php foreach ($category as $c) : ?>
                                                <option value="<?= $c['id']; ?>"><?= $c['nama']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea id="summernote" name="deskripsi" class="summernote-simple"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Picture</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview" class="">
                                            <label>Choose File</label>
                                            <input type="file" name="foto" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" value="upload" class="btn btn-primary">Create Product</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            <?php endforeach; ?>
        </div>
        <?php $this->load->view('components/footer'); ?>
    </div>
</div>