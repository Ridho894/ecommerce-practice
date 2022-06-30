<?php
$this->load->view('layouts/tailwind_template');

?>
<header class="top-0 w-screen bg-[#6777ef] py-3 transition-all duration-200 ease-in">
    <div class="mx-auto flex items-center max-w-6xl justify-between">
        <div class="space-x-10 text-white">
            <a href="">Home</a>
            <a href="" class="<?= $title === "About" ? 'bg-red-900' : ''; ?>">About</a>
            <a href="">Review</a>
        </div>
        <div class="flex items-center space-x-2">
            <a href="<?= base_url(); ?>index.php/pages/checkout" class="bg-white rounded-lg h-10 flex items-center justify-center w-20 text-center pr-1">
                <i class="fas fa-shopping-bag text-[#6777ef]"></i>
            </a>
            <form class="w-full max-w-xs" action="">
                <div class="flex relative items-center border border-gray-300 rounded-lg shadow-lg">
                    <input class="w-full bg-gray-100 rounded-lg outline-none pl-8 py-2" type="text" placeholder="Search">
                    <button class="flex
                    absolute
                    left-2
                        items-center
                        justify-center
                        h-full
                        rounded-lg
                        text-gray-700">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </form>
            <?php if ($this->session->userdata('is_login')) : ?>
                <a href="<?= base_url(); ?>index.php/pages/dashboard" class="border-white border-2 w-40 text-center text-white px-4 p-2 rounded-lg">My Store</a>
                <a href="<?= base_url(); ?>index.php/auth/logout" class="border-white border-2 w-40 text-center text-white px-4 p-2 rounded-lg">Logout</a>
            <?php else : ?>
                <a href="<?= base_url(); ?>index.php/auth/login_member" class="btn btn-primary" type="button">LOGIN</a>
                <a href="<?= base_url(); ?>index.php/auth/register" class="btn btn-danger ml-3" type="button">REGISTER</a>
            <?php endif; ?>
        </div>
    </div>
</header>