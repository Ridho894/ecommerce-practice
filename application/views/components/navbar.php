<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Ecommerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?= $title === "Home" ? 'active' : ''; ?>">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item <?= $title === "About" ? 'active' : ''; ?>">
                    <a class="nav-link" href="/pages/about">About</a>
                </li>
                <li class="nav-item <?= $title === "Review" ? 'active' : ''; ?>">
                    <a class="nav-link" href="/pages/review">Review</a>
                </li>
            </ul>
            <div>
                <!-- if login show my profile else show login register -->
                <?php if ($this->session->userdata('is_login')) : ?>
                    <a href="<?= base_url(); ?>index.php/pages/dashboard" class="btn btn-outline-primary">My Store</a>
                <?php else : ?>
                    <a href="<?= base_url(); ?>index.php/auth/login" class="btn btn-primary" type="button">LOGIN</a>
                    <a href="<?= base_url(); ?>index.php/auth/register" class="btn btn-danger ml-3" type="button">REGISTER</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>