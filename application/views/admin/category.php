<?php $this->load->view('layouts/template'); ?>
<div id="app">
    <div class="main-wrapper">

        <?php $this->load->view('components/navbar_admin'); ?>

        <?php $this->load->view('components/sidebar'); ?>

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Category</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                        <div class="breadcrumb-item active"><a href="#">Category</a></div>
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
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($category as $c) : ?>
                                        <tr>
                                            <td><?= $c['nama']; ?></td>
                                            <td>
                                                <!-- if id author = 0 show admin -->
                                                <?php if ($c['id_author'] == 0) : ?>
                                                    <span class="badge badge-success">Admin</span>
                                                <?php else : ?>
                                                    <span class="badge badge-primary">
                                                        <?= $c['id_author']; ?>
                                                    </span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('admin/edit_category/') . $c['id']; ?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="<?= base_url('admin/edit_category/') . $c['id']; ?>" class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <tr style="text-align: center;">
                                        <td colspan="4">
                                            <a href="#" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> ADD CATEGORY</a>
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