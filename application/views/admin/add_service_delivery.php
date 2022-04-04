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
                                        <option>POS</option>
                                        <option>POS</option>
                                        <option>POS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Kota Asal</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <option>POS</option>
                                        <option>POS</option>
                                        <option>POS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Kota Tujuan</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <option>POS</option>
                                        <option>POS</option>
                                        <option>POS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Ongkos</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <option>POS</option>
                                        <option>POS</option>
                                        <option>POS</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning">
                                ADD
                            </button>
                            <button type="button" class="btn btn-danger">
                                CANCEL
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('components/footer'); ?>
    </div>
</div>