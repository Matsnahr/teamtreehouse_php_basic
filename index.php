<?php
$name = "Matsna Fams";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="html/asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="html/asset/css/all.css">
    <style>
        
    </style>
    <title>TeamTreeHouse <?php echo $name;?></title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar col-lg-4 border bg-light">
                <div class="d-flex flex-column">
                    <img class="d-flex align-self-center" src="html/asset/gambar/logo.png" alt="nyong" width="90px">
                </div>
                <div class="d-flex flex-column m-5">
                    <div class="d-flex align-self-center">
                        <p class="h2 text-align"><?php echo $name; ?></p>
                    </div>
                </div>
            </div>
            <div class="content col-lg-8 border vh-100">

            <div class="d-flex flex-column border">
                <p class="h2 pt-4 pl-5">my first practice</p>

                <section class="pl-5">
                    <p class="h2">Unit</p>
                    <p class="lead"><?php echo CelciusToFahrenheit(80); ?></p>
                </section>

                <section class="pl-5">
                    <p class="h2">String</p>
                    <p class="lead"><?php askName("Matsna Fams"); ?></p>
                </section>
            </div>
            <div class="d-flex flex-column border position-absolute fixed-bottom">
                <p class="h2 pt-4 pl-5">body element</p>
            </div>
            </div>
        </div>
    </div>
            <script src="asset/js/jquery-3.5.1.slim.min.js"></script>
            <script src="asset/js/popper.min.js"></script>
            <script src="asset/js/bootstrap.min.js"></script>
</body>
</html>