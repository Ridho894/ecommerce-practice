<?php $this->load->view('layouts/template'); ?>
<div id="app">
    <div class="main-wrapper">

        <?php $this->load->view('components/navbar_admin'); ?>

        <?php $this->load->view('components/sidebar'); ?>

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Members</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                        <div class="breadcrumb-item active"><a href="#"><?= $title; ?></a></div>
                    </div>
                </div>
            </section>
            <div class="">
                <div class="card">
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
                                            <a href="<?= base_url(); ?>index.php/pages/add_service_delivery" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> ADD CATEGORY</a>
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