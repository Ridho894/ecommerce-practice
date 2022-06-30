<?php
$this->load->helper('url');
$this->load->view('layouts/template');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello, world!</title>
</head>

<body>
    <?php $this->load->view('components/navbar'); ?>
    <div class="mx-auto max-w-6xl py-4 space-y-6">
        <!-- CAROUSEL -->
        <div id="carouselLightVariant" class="carousel slide carousel-fade carousel-light relative" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                <button data-bs-target="#carouselLightVariant" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button data-bs-target="#carouselLightVariant" data-bs-slide-to="1" aria-label="Slide 1"></button>
                <button data-bs-target="#carouselLightVariant" data-bs-slide-to="2" aria-label="Slide 1"></button>
            </div>

            <!-- Inner -->
            <div class="carousel-inner h-[400px] relative w-full overflow-hidden">
                <!-- Single item -->
                <div class="carousel-item active relative float-left w-full">
                    <img src="https://img.freepik.com/free-vector/gradient-sale-background-with-discount_23-2148966077.jpg?w=996&t=st=1656510494~exp=1656511094~hmac=d66ef18c6d2fed22a9794963ffb542e882765532c8f6b421c507485297bc40c2" class="block w-full" alt="Motorbike Smoke" />
                    <div class="carousel-caption hidden md:block absolute top-72 text-center">
                        <h5 class="text-xl">First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item relative float-left w-full">
                    <img src="https://img.freepik.com/free-vector/super-sale-discount-banner-template-promotion_8829-2534.jpg?w=1060&t=st=1656510502~exp=1656511102~hmac=655e5e8c93dab30f85bced6d0b7cfb3aecad6f8ca765aef617bdb4c1e4410d2e" class="block w-full" alt="Mountaintop" />
                    <div class="carousel-caption hidden md:block absolute top-72 text-center">
                        <h5 class="text-xl">Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item relative float-left w-full">
                    <img src="https://img.freepik.com/free-vector/gradient-10-10-background_157027-577.jpg?w=996&t=st=1656510505~exp=1656511105~hmac=1bc62487a60d4207e17a5b55dfd2caa939b61af4f9ecc851c00d2c8f6dbd827a" class="block w-full" alt="Woman Reading a Book" />
                    <div class="carousel-caption hidden md:block absolute top-72 text-center">
                        <h5 class="text-xl">Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <!-- Inner -->

            <!-- Controls -->
            <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button" data-bs-target="#carouselLightVariant" data-bs-slide="prev">
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button" data-bs-target="#carouselLightVariant" data-bs-slide="next">
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- PRODUCTS -->
        <div>
            <h1 class="font-bold text-xl">New Products</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nisi vel consectetur
            </p>
            <div class="flex flex-wrap space-x-4">

                <?php
                foreach ($products as $p) :
                ?>
                    <div class="bg-white rounded-lg shadow-md w-[200px]">
                        <img src="<?= base_url('assets/uploads/' . $p['foto']); ?>" alt="<?= $p['foto']; ?>" width="75px">
                        <div class="p-4">

                            <h1><?= $p['namaProduk']; ?></h1>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

</html>