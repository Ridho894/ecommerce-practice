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
                        <div class="breadcrumb-item active"><a href="<?= base_url(); ?>index.php/pages/members"><?= $title; ?></a></div>
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
                                        <th>Username</th>
                                        <th>Nama Konsumen</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>No Telepon</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($member as $m) : ?>
                                        <tr>
                                            <td>
                                                <?= $i; ?>
                                            </td>
                                            <td>
                                                <?= $m['username']; ?>
                                            </td>
                                            <td>
                                                <?= $m['namaKonsumen']; ?>
                                            </td>
                                            <td>
                                                <?= $m['alamat']; ?>
                                            </td>
                                            <td>
                                                <?= $m['idKota']; ?>
                                            </td>
                                            <td>
                                                <?= $m['tlpn']; ?>
                                            </td>
                                            <td>
                                                <?php if ($m['statusAktif'] === "Y") : ?>
                                                    <span class="badge badge-primary">AKTIF</span>
                                                <?php else : ?>
                                                    <span class="badge badge-danger">
                                                        NONAKTIF
                                                    </span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url(); ?>index.php/pages/edit_member/<?= $m['idKonsumen']; ?>" class="btn btn-warning btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="<?= base_url(); ?>index.php/pages/delete_member/<?= $m['idKonsumen']; ?>" class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <tr style="text-align: center;">
                                        <td colspan="8">
                                            <a href="<?= base_url(); ?>index.php/pages/add_member" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> ADD MEMBER</a>
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