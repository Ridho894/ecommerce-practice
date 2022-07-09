<?php
$this->load->helper('url');
$this->load->view('layouts/template');
?>

<?php
foreach ($product as $p) {
    $idProduk = $p['idProduk'];
    $namaProduk = $p['namaProduk'];
    $harga = $p['harga'];
    $stok = $p['stok'];
    $berat = $p['berat'];
    $deskripsiProduk = $p['deskripsiProduk'];
    $foto = $p['foto'];
    $idKategori = $p['idKat'];
    $idToko = $p['idToko'];
}
?>

<body class="overflow-x-hidden">
    <div class="hidden md:block">
        <?php $this->load->view('components/navbar'); ?>
    </div>
    <div class="block md:hidden">
        <?php $this->load->view('components/navbar_mobile'); ?>
    </div>
    <div class="md:flex items-start justify-center py-12 2xl:px-20 md:px-6 px-4">
        <div class="xl:w-2/6 lg:w-2/5 w-80 md:block hidden">
            <img class="w-full" alt="<?= base_url('assets/uploads/' . $foto); ?>" src="<?= base_url('assets/uploads/' . $foto); ?>" />
            <!-- <img class=" mt-6 w-full" alt="image of a girl posing" src="https://i.ibb.co/qxkRXSq/component-image-two.png" /> -->
        </div>
        <div class="md:hidden">
            <img class="w-full" alt="<?= base_url('assets/uploads/' . $foto); ?>" src="<?= base_url('assets/uploads/' . $foto); ?>" />
            <div class="flex items-center justify-between mt-3 space-x-4 md:space-x-0">
                <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="https://i.ibb.co/cYDrVGh/Rectangle-245.png" />
                <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="https://i.ibb.co/f17NXrW/Rectangle-244.png" />
                <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="https://i.ibb.co/cYDrVGh/Rectangle-245.png" />
                <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="https://i.ibb.co/f17NXrW/Rectangle-244.png" />
            </div>
        </div>
        <div class="xl:w-2/5 md:w-1/2 lg:ml-8 md:ml-6 md:mt-0 mt-6">
            <div class="border-b border-gray-200 pb-6">
                <p class="text-sm leading-none text-gray-600 dark:text-gray-300 ">Balenciaga Fall Collection</p>
                <h1 class="lg:text-2xl text-xl font-semibold lg:leading-6 leading-7 text-gray-800 dark:text-white mt-2"><?= $namaProduk; ?></h1>
            </div>
            <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Colours</p>
                <div class="flex items-center justify-center">
                    <p class="text-sm leading-none text-gray-600 dark:text-gray-300">Smoke Blue with red accents</p>
                    <div class="w-6 h-6 bg-gradient-to-b from-gray-900 to-indigo-500 ml-3 mr-4 cursor-pointer"></div>
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg2.svg" alt="next">
                    <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg2dark.svg" alt="next">
                </div>
            </div>
            <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Size</p>
                <div class="flex items-center justify-center">
                    <p class="text-sm leading-none text-gray-600 dark:text-gray-300 mr-3">38.2</p>

                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg2.svg" alt="next">
                    <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg2dark.svg" alt="next">
                </div>
            </div>
            <button class="dark:bg-white dark:text-gray-900 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-sm flex justify-center leading-none text-white bg-gray-800 w-full py-3 hover:bg-gray-700 focus:outline-none">
                <i class="fas fa-shopping-bag text-white mr-2"></i>
                Add to Cart
            </button>
            <div>
                <p class="xl:pr-48 text-base lg:leading-tight leading-normal text-gray-600 dark:text-gray-300 mt-7"><?= $deskripsiProduk; ?></p>
                <p class="text-base leading-4 mt-7 text-gray-600 dark:text-gray-300">Product Code: <?= $idProduk; ?></p>
                <p class="text-base leading-4 mt-4 text-gray-600 dark:text-gray-300">Weight: <?= $berat; ?> inches</p>
                <p class="md:w-96 text-base leading-normal text-gray-600 dark:text-gray-300 mt-4">Composition: 100% calf leather, inside: 100% lamb leather</p>
            </div>
            <div>
                <div class="border-t border-b py-4 mt-7 border-gray-200">
                    <div data-menu class="flex justify-between items-center cursor-pointer">
                        <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Shipping and returns</p>
                        <button class="cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 rounded" role="button" aria-label="show or hide">
                            <img class="transform dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg4.svg" alt="dropdown">
                            <img class="transform hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg4dark.svg" alt="dropdown">
                        </button>
                    </div>
                    <div class="hidden pt-4 text-base leading-normal pr-12 mt-4 text-gray-600 dark:text-gray-300" id="sect">You will be responsible for paying for your own shipping costs for returning your item. Shipping costs are nonrefundable</div>
                </div>
            </div>
            <div>
                <div class="border-b py-4 border-gray-200">
                    <div data-menu class="flex justify-between items-center cursor-pointer">
                        <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Contact us</p>
                        <button class="cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 rounded" role="button" aria-label="show or hide">
                            <img class="transform dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg4.svg" alt="dropdown">
                            <img class="transform hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg4dark.svg" alt="dropdown">
                        </button>
                    </div>
                    <div class="hidden pt-4 text-base leading-normal pr-12 mt-4 text-gray-600 dark:text-gray-300" id="sect">If you have any questions on how to return your item to us, contact us.</div>
                </div>
            </div>
        </div>
    </div>
</body>