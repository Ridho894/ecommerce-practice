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
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>hello world</h1>
            </div>
        </div>
    </div>
</body>

</html>