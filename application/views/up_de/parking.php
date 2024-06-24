<!-- Ajouter l'élément de fond flou -->

<!-- <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"  aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion accordion-flush" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <a class="accordion-button without-after collapsed" type="button" href="<?php echo site_url("dashboard/index") ?>">
                        <span class="me-2"><i class="fa fa-dashboard"></i></span>
                        Dashboard
                    </a>
                </h2>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="me-2"><i class="fa fa-user"></i></span>
                        Utilisateur
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                    data-bs-parent="#">
                    <div class="accordion-body">
                        <ol class="list-group list-group-flush">
                            <a href="<?php echo site_url("utilisateur/index") ?>"
                                class="list-group-item list-group-item-action">Liste</a>
                            <a href="#" class="list-group-item list-group-item-action">Inserer</a>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span class="me-2"><i class="fa fa-car"></i></span>
                        Parking
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#">
                    <div class="accordion-body">
                        <ol class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action">Liste</a>
                            <a href="#" class="list-group-item list-group-item-action">Inserer</a>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span class="me-2"><i class="fa fa-map-location"></i></span>
                        Lieu
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#">
                    <div class="accordion-body">
                        <ol class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action">Liste</a>
                            <a href="#" class="list-group-item list-group-item-action">Inserer</a>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- <script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script> -->

<center class="pt-5 mt-5">
    <div class="main-content min-vh-100 mt-5 p-3">
        <div class="titlePage col-7 col-lg-3 row position-absolute pub pt-2 pe-2">
            <div class="col-10 col-lg-11 ps-3 pt-1">
                <h5 style="font-weight: bold;color:#E63D36 ;"> réduction 10% </h5>
                <p style="color: black;">en heure creuse</p>
            </div>
            <div class="col-2 col-md-1 col-lg-1 p-0">
                <button class="quit-but w-100" onclick="delPub()">x</button>
            </div>
        </div><!-- End Page Title -->
        
        
        <?php if (isset($recherche)) : ?>
        <div class="information  pb-3 col-lg-7">
            <div class="row mt-4 text-start">
                <div class="border border-input bg-input  border-2 rounded-3 col-4 col-lg-2">
                    <a class="" href="<?php echo site_url("dashboard/index") ?>">
                    <span class="fs-4 me-3 color-red"><i class="fa fa-arrow-left"></i></span>
                    <span class="fs-3 color-red">Menu</span>
                    </a>
                </div>
            </div>
            <h3 class="text-center" style="color: rgb(0, 0, 0);">Liste des parkings</h3>
            <div class="mx-auto col-lg-7 ps-3">

                <button class="  toolbox-active btn btn-outline-danger " type="button" data-bs-toggle="collapse"
                    data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample3"
                    style="">
                    <span><i class="fa-solid fa-sliders"></i></span>
                    Tous les filtres
                </button>

                
            </div>
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
                            <div class="row justify-content-start">
                                <div class="col-2">
                                    <div class="number-place">
                                        <p><?php echo $p['id_parking'] ?></p>
                                    </div>
                                </div>
                                <div class="col-10 col-lg-10 text-center text-lg-start text-md-center">
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
                    <div class="row"><a class="btn btn-warning"
                            href="<?php echo site_url("utilisateur/redirectForm/$id") ?>">
                            <span class="d-none d-lg-block">modifier</span>
                            <span class="d-block d-lg-none"><i class="fa fa-pen"></i></span>
                        </a></div>
                    <div class="row my-1"><a class="btn btn-danger"
                            href="<?php echo site_url("utilisateur/delete/$id") ?>">
                            <span class="d-none d-lg-block">suprimer</span>
                            <span class="d-block d-lg-none"><i class="fa fa-trash"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <?php }
                } ?>
        </div>

        <?php endif; ?>
</center>
<br>
<div id="blurBackground" class="blur-background hidden"></div>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
<script src="<?php echo base_url("assets/js/function.js") ?>"> </script>

<!-- Vendor JS Files -->
<script src="<?php echo base_url("assets/vendor/apexcharts/apexcharts.min.js") ?>"></script>
<script src="<?php echo base_url("assets/vendor/chart.js/chart.umd.js") ?>"></script>
<script src="<?php echo base_url("assets/vendor/echarts/echarts.min.js") ?>"></script>
<script src="<?php echo base_url("assets/vendor/quill/quill.min.js") ?>"></script>
<script src="<?php echo base_url("assets/vendor/simple-datatables/simple-datatables.js") ?>"></script>
<script src="<?php echo base_url("assets/vendor/tinymce/tinymce.min.js") ?>"></script>
<script src="<?php echo base_url("assets/vendor/php-email-form/validate.js") ?>"></script>
<!-- Template Main JS File -->
<script src="<?php echo base_url("assets/js/main.js") ?>"></script>