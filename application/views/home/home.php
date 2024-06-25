<!-- Ajouter l'élément de fond flou -->

<div class="pt-5 mt-5">
    <?php if (isset($recherche)) : ?>
    <div class="main-content min-vh-100 mt-5 p-3">
        <div class="titlePage col-7 col-lg-3 row position-absolute pub pt-2 pe-2">
            <div class="col-10 col-lg-11 ps-3 pt-1">
                <h5 style="font-weight: bold;color:#E63D36 ;"> réduction 10% </h5>
                <p style="color: black;">en heure creuse</p>
            </div>
            <div class="col-2 col-lg-1 p-0">
                <button class="quit-but w-100" onclick="delPub()">x</button>
            </div>
        </div><!-- End Page Title -->


        <div class="information  pb-3 col-lg-12">

            <div class="mx-auto col-lg-7 ps-3">
                <h2 class="" style="color: rgb(0, 0, 0);">Liste des parkings</h2>

                <button class="  toolbox-active btn btn-outline-danger " type="button" data-bs-toggle="collapse"
                    data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample3"
                    style="">
                    <span><i class="fa-solid fa-sliders"></i></span>
                    Tous les filtres
                </button>
            </div>
            <?php
                if (count($recherche) == 0) { ?>
                <div class="element col-11 col-lg-7 mt-3 mx-auto text-center py-5">
            <h1>Aucun parking ne correspond a vos recherches</h1>
                </div>
            <?php } else {
                    foreach ($recherche as $p) { ?>
                    
            <a href="<?php 
                        $id=$p['id_parking'];
                        echo site_url("information/parking/$id");?>" style="color: black;">
                <div class="element col-11 col-lg-7 mt-3 mx-auto">
                    <div class="element-2">
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <div class="number-place text-center">
                                    <p><?php echo $p['id_parking'] ?></p>
                                </div>
                            </div>
                            <div class="col-5 ">
                                <div class="row text-wrap">
                                    <div class="icon-text-inline">
                                        <i class="bi bi-geo-alt-fill"></i>
                                        <span class="lieu"><?php echo $p['lieu_nom'] ?></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <p>Place: <?php echo $p['nombre_place'] ?></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <h1><?php echo $p['prix'] ?> Ar</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <?php }
                } ?>
        </div>

        <?php endif; ?>
    </div>
    <br>
    <div id="blurBackground" class="blur-background hidden"></div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="<?php echo base_url("assets/js/function.js") ?>"> </script>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url("assets/vendor/apexcharts/apexcharts.min.js") ?>"></script>
    <!-- <script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script> -->
    <script src="<?php echo base_url("assets/vendor/chart.js/chart.umd.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendor/echarts/echarts.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendor/quill/quill.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendor/simple-datatables/simple-datatables.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendor/tinymce/tinymce.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendor/php-email-form/validate.js") ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url("assets/js/main.js") ?>"></script>