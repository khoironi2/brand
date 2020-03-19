<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>stylevideo.css">


    <title>BRAND DIGITAL | CHECKOUT</title>


</head>

<body>
    <!-- START NAV -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="<?= base_url('assets/') ?>img/Icon ionic-logo-buffer.png">
                LOGO BRAND

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">


                <div class="navbar-nav navhover ml-auto">

                    <a style="color: white;" class=" nav-link active" href="<?= base_url() ?>#product">PRODUCTS <span class="sr-only">(current)</span></a>
                    <a style="color: white;" class="nav-item nav-link" href="#">CLIENT</a>
                    <a style="color: white;" class="nav-item nav-link" href="#">CONTACT</a>

                </div>
            </div>
        </div>
    </nav>
    <!-- END NAV -->

    <!-- START SLIDER -->
    <section class="slider">

        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1> <span>CHECKOUT </span> <?= $product->nama_p; ?></h1>
                </div>
            </div>



        </div>

    </section>

    <!-- END SLIDER -->
    <!-- START CHECKOUT DETAIL -->
    <section class="checkout">
        <div class="container">
            <div class="row justify-content-center">
                <!-- START DETAIL -->
                <?php foreach ($post as $pos) : ?>

                    <div class="col-lg shadow-lg detailproduct rounded ">
                        <img src="<?= $product->url_img; ?>" alt="<?= $product->nama_p; ?>">
                        <div class="col subdetail2">
                            <h2><?= $product->nama_p; ?></h2>
                            <span class="badge badge-pill badge-secondary"><?php echo $pos['nama_pp']; ?></span>
                        </div>

                        <div class="col subdetail2">
                            <hr>
                            <p><i class="fas fa-user-shield"></i> Harga Paket <?php echo $pos['nama_pp']; ?> : <?php echo $pos['harga_pp']; ?> <span class="badge badge-danger" id="abc"></span> </p>
                            <p><i class="fas fa-user-shield"></i> Revisi <?php echo $pos['max_revisi']; ?> Kali <span class="badge badge-danger" id="def"></span> </p>
                            <p><i class="fas fa-user-shield"></i> Total <?php echo $pos['harga_total']; ?> <span class="badge badge-danger" id="hij"></span> </p>


                            <a href=""></a>
                            <button data-toggle="modal" data-target="#exampleModal<?php echo $pos['idpp']; ?>" class="btn btn-warning">ORDER</button>
                        </div>




                    </div>





                <?php endforeach ?>


                <!-- END DETAIL -->




            </div>

        </div>

    </section>




    <!-- END CHECKOUT DETAIL -->

    <!-- START CHECKOUT PEMBAYARAN -->



    <!-- END CHECKOUT PEMBAYARAN -->


    <!-- START FOOTER -->


    <footer>
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <p>Copyright © 2020 | <a href=""> <span>Brand Name</span> </a></p>
                </div>
            </div>
        </div>
    </footer>


    <?php foreach ($post as $row) : ?>
        <!-- Modal -->
        <div style="z-index: 999999999" class="modal fade" id="exampleModal<?php echo $row['idpp']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?= $product->nama_p; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="<?= base_url('welcome/insert');  ?>">
                        <div class="modal-body">

                            <div class="form-group">
                                <img height="100px" src="<?= $product->url_img; ?>" alt="<?= $product->nama_p; ?>">
                            </div>



                            <div class="form-group">
                                <input type="text" hidden class="form-control" value="<?= $row['nama_pp']; ?>" name="nama_pp" placeholder="">
                                <a class="badge badge-warning"><?= $row['nama_pp']; ?></a> Price : <?= $row['harga_total']; ?>

                                <input type="text" name="harga_p" hidden value="<?= $product->harga_p; ?>" id="harga_p">
                                <input type="text" hidden name="idp" value="<?= $product->idp; ?>">
                                <input type="text" hidden name="nama_p" value="<?= $product->nama_p; ?>">
                                <input type="text" hidden name="idpp" value="<?php echo $row['idpp']; ?>">
                                <input type="text" hidden name="harga_total" value="<?php echo $row['harga_total']; ?>">
                            </div>





                            <div class="form-group">
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" id="telpon" name="telpon" placeholder="nomor WhatsApp">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="E - Mail">
                            </div>

                        </div>

                        <div class="modal-footer">

                            <button type="submit" class="btn btn-warning">ORDER</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <?php endforeach ?>

    <!-- END FOOTER -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/1ef9b66c29.js"></script>



    <script src="http://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>js/mycode.js"></script>

</body>

</html>