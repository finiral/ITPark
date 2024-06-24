<!-- Ajouter l'élément de fond flou -->

<center class="pt-5 mt-5">
    <?php if (isset($recherche)) : ?>
        <div class="main-content min-vh-100 mt-5 p-3">
            <div class="titlePage">
                <h3 style="color: rgb(0, 0, 0);">Liste des parkings</h3>
                <h1 style="font-weight: bold;color:#E63D36 ;"> réduction 10% </h1>
                <p style="color: black;">en heure creuse</p>
            </div><!-- End Page Title -->


            <div class="information  pb-3 col-lg-7">

                <?php
                if (count($recherche) == 0) { ?>
                    <h1>Aucun parking ne correspond a vos recherches</h1>
                    <?php } else {
                    foreach ($recherche as $p) { ?>
                    <div class="row element-2 opt-2 my-2">
                        <a href="<?php 
                        $id=$p['id_parking'];
                        echo site_url("information/parking/$id");?>" style="color: black;" class="col-9">
                            <div class="element col-11 col-lg-10 mt-3">
                                <div class="">
                                    <div class="row justify-content-center">
                                        <div class="col-2">
                                            <div class="number-place">
                                                <p><?php echo $p['id_parking'] ?></p>
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="row text-wrap">
                                                <div class="icon-text-inline">
                                                    <i class="bi bi-geo-alt-fill"></i> <!-- Exemple d'icône Font Awesome -->
                                                    <span class="lieu"><?php echo $p['lieu_nom'] ?></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <p>Place: <?php echo $p['nombre_place'] ?></p>
                                                <p><?php echo $p['prix'] ?> Ar</p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="col-2">
                                            <div class="row"><a href="#"class="btn btn-dark">modifier</a></div>
                                            <div class="row my-1"><a href="<?php echo site_url("up_de/deleteParking/$id")?> " class="btn btn-danger">suprimer</a></div>
                                        </div>  
                                        </div>
                <?php }
                } ?>
            </div>

        <?php endif; ?>
</center>
<br>
<div id="blurBackground" class="blur-background hidden"></div>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script src="<?php echo base_url("assets/js/function.js") ?>"> </script>

<!-- Vendor JS Files -->
<script src="<?php echo base_url("assets/vendor/apexcharts/apexcharts.min.js") ?>"></script>
<script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
<script src="<?php echo base_url("assets/vendor/chart.js/chart.umd.js") ?>"></script>
<script src="<?php echo base_url("assets/vendor/echarts/echarts.min.js") ?>"></script>
<script src="<?php echo base_url("assets/vendor/quill/quill.min.js") ?>"></script>
<script src="<?php echo base_url("assets/vendor/simple-datatables/simple-datatables.js") ?>"></script>
<script src="<?php echo base_url("assets/vendor/tinymce/tinymce.min.js") ?>"></script>
<script src="<?php echo base_url("assets/vendor/php-email-form/validate.js") ?>"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url("assets/js/main.js") ?>"></script>