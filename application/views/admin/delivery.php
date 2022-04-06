<?php $this->load->view('layouts/template'); ?>
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
                <input type="text" autofocus name="namaKota" id="namaKota" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">YES</button>
                <button type="button" class="btn btn-warning">NO</button>
            </div>
        </div>
    </div>
</form>
<!-- Modal Edit City -->
<form method="POST" action="<?= base_url(); ?>index.php/pages/edit_city/1" class="modal fade" id="modal_editCity" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit City</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id" id="idKota">
                <input type="text" name="namaKota" id="namaKota" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">YES</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal">NO</button>
            </div>
        </div>
    </div>
</form>
<div class="navbar-bg"></div>
<div id="app">
    <div class="main-wrapper">

        <?php $this->load->view('components/navbar_admin'); ?>

        <?php $this->load->view('components/sidebar'); ?>

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Service Delivery</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                        <div class="breadcrumb-item active"><a href="#">Category</a></div>
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
                                        <th>Nama Kurir</th>
                                        <th>Kota Asal</th>
                                        <th>Kota Tujuan</th>
                                        <th>Kota Ongkos</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Sport
                                        </td>
                                        <td>
                                            Sport
                                        </td>
                                        <td>
                                            Sport
                                        </td>
                                        <td>
                                            Sport
                                        </td>
                                        <td>
                                            Sport
                                        </td>
                                        <td>
                                            <a class="btn btn-warning btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <td colspan="6">
                                            <a href="<?= base_url(); ?>index.php/pages/add_service_delivery" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> ADD SERVICE DELIVERY</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Kota</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Kota</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($city as $c) : ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $c['namaKota']; ?></td>
                                                <td>
                                                    <button id="editCity" type="button" data-id="<?= $c['id']; ?>" data-target="#modal_editCity" data-name="<?= $c['namaKota']; ?>" data-toggle="modal" class="btn btn-primary"><i class="far fa-edit"></i></button>
                                                    <a href="<?= base_url(); ?>index.php/pages/delete_city/<?= $c['id']; ?>" class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                                </td>
                                                <?php $i++; ?>
                                            </tr>
                                        <?php endforeach; ?>
                                        <tr style="text-align: center;">
                                            <td colspan="6">
                                                <button type="button" data-target="#modal_addCity" data-toggle="modal" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> ADD CITY</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Kurir</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Kurir</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($courier as $c) : ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $c['namaKurir']; ?></td>
                                                <td>
                                                    <a class="btn btn-warning btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                    <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                                </td>
                                                <?php $i++; ?>
                                            </tr>
                                        <?php endforeach; ?>
                                        <tr style="text-align: center;">
                                            <td colspan="6">
                                                <button type="button" data-target="#modal_addCity" data-toggle="modal" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> ADD COURIER</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('components/footer'); ?>
    </div>
</div>
<script>
    $(document).on("click", "#editCity", function() {
        // get the data-name
        var name = $(this).data('name');
        var id = $(this).data('id');
        console.log(id)
        $(".modal-body #namaKota").val(name);
        $("#idKota").val(id);
    });
</script>