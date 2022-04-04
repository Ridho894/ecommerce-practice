<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img src="<?php echo base_url('assets/img/logo.png'); ?>" width="35" alt="image">
            <a href="index.html">Ecommerce</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">RD</a>
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
            <!-- <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-paper-plane"></i> <span>Service Delivery</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="bootstrap-alert.html">Jnt</a>
                    </li>
                    <li>
                        <a class="nav-link" href="bootstrap-badge.html">Jne</a>
                    </li>
                    <li>
                        <a class="nav-link" href="bootstrap-breadcrumb.html">SiCepat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>index.php/pages/add_service_delivery">ADD SERVICE DELIVERY</a>
                    </li>
                </ul>
            </li> -->
            <li class="nav-item <?= $title === "Member" ? "active" : ""; ?>">
                <a href="<?= base_url(); ?>index.php/pages/member" class="nav-link"><i class="fas fa-users"></i> <span>Members</span></a>
            </li>
            <li class="nav-item <?= $title === "Store" ? "active" : ""; ?>">
                <a href="<?= base_url(); ?>index.php/pages/store" class="nav-link"><i class="fas fa-store"></i> <span>Store</span></a>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>