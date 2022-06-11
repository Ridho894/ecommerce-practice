<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img src="<?php echo base_url('assets/img/logo.png'); ?>" width="35" alt="image">
            <a href="<?= base_url(); ?>index.php/pages/dashboard">Ecommerce</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= base_url(); ?>index.php/pages/dashboard">RD</a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item <?= $title === "Dashboard" ? "active" : ""; ?>">
                <a href="<?= base_url(); ?>index.php/pages/dashboard" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item <?= $title === "Category" ? "active" : ""; ?>">
                <a href="<?= base_url(); ?>index.php/pages/category" class="nav-link"><i class="fas fa-th-large"></i> <span>Category</span></a>
            </li>
            <li class="nav-item <?= $title === "Delivery Service" ? "active" : ""; ?>">
                <a href="<?= base_url(); ?>index.php/pages/delivery" class="nav-link"><i class="fas fa-paper-plane"></i> <span>Service Delivery</span></a>
            </li>
            <li class="nav-item <?= $title === "Members" ? "active" : ""; ?>">
                <a href="<?= base_url(); ?>index.php/pages/members" class="nav-link"><i class="fas fa-users"></i> <span>Members</span></a>
            </li>
            <li class="nav-item <?= $title === "Products" ? "active" : ""; ?>">
                <a href="<?= base_url(); ?>index.php/pages/products" class="nav-link"><i class="fas fa-shopping-cart"></i> <span>Products</span></a>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>