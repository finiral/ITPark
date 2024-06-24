<!-- Ajouter l'élément de fond flou -->

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
</div>

<center class="pt-5 mt-5">
    <div class="main-content min-vh-100 mt-5 p-3">
        <div class="">
            <h3 style="color: rgb(0, 0, 0);">Liste des utilisateurs</h3>
            <!-- <h1 style="font-weight: bold;color:#E63D36 ;"> réduction 10% </h1>
            <p style="color: black;">en heure creuse</p> -->
        </div><!-- End Page Title -->


<<<<<<< HEAD
        <div class="information  pb-3 col-lg-7">
            <div class="row mt-4 text-start">
                <div class="border border-input bg-input  border-2 rounded-3 col-4 col-lg-2">
                    <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                        aria-controls="offcanvasExample">
                        <span class="fs-4 color-red"><i class="bi bi-list toggle-sidebar-btn"></i></span>
                        <span class="fs-3 color-red">Menu</span>
                    </a>
                </div>
            </div>
            <?php if (isset($utilisateurs)) : ?>
            <form method="get" action="<?php echo site_url("utilisateur/recherche") ?>">
                <div class="row">
                    <div class="col-12 p-3 ps-0 ">
                        <div class="row float-right">
                            <div class="col-3 col-lg-1 form-group"><input type="number" class="form-control" name="id"
                                    placeholder="N&deg"></div>
                            <div class="col-6 form-group"><input type="text" class="form-control" name="identifiant"
                                    placeholder="Identifiant"></div>
                            <div class="col-2"><input type="submit" class="btn btn-danger" value="trouver"></div>
                        </div>
                    </div>
                </div>
            </form>
            <?php
                if (count($utilisateurs) == 0) { ?>
            <h1>Aucun utilisateur</h1>
            <?php } else {
                    for ($i=0; $i<count($utilisateurs); $i++) { 
                        $user=$utilisateurs[$i]; ?>
            <div class="row element-2 opt-2 my-2 pb-2">
                <a href="<?php 
                        $id=$user['id_utilisateur'];
                        echo site_url("information/utilisateur/$id");?>" style="color: black;" class="col-9">
                    <div class="element col-11 col-lg-10 mt-3">
                        <div class="">
                            <div class="row ">
                                <div class="col-2">
                                    <div class="number-place">
                                        <p><?php echo $i+1 ?></p>
                                    </div>
                                </div>
                                <div class="col-10 col-lg-6">
                                    <div class="row text-wrap">
                                        <div class="icon-text-inline">
                                            <i class="bi bi-geo-alt-fill"></i> <!-- Exemple d'icône Font Awesome -->
                                            <span class="lieu"><?php echo $user['identifiant'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row text-wrap">
                                        <div class="icon-text-inline">
                                            <span class="lieu"><?php echo $id ?></span>
                                        </div>
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
=======
            <div class="information  pb-3 col-lg-7">
                <form method="get" action="<?php echo site_url("utilisateur/recherche") ?>">
                    <div class="row">
                        <div class="col-8 p-3 ">
                            <div class="row float-right">
                                <div class="col-2 form-group"><input type="number" class="form-control" name="id"></div>
                                <div class="col-8 form-group"><input type="text" class="form-control" name="identifiant"></div>
                                <div class="col-2"><input type="submit" class="btn btn-danger" value="trouver"></div>
                            </div>
                        </div>
                    </div>
                </form>
                <?php
                if (count($utilisateurs) == 0) { ?>
                    <h1>Aucun utilisateur</h1>
                    <?php } else {
                    for ($i = 0; $i < count($utilisateurs); $i++) {
                        $user = $utilisateurs[$i]; ?>
                        <div class="row element-2 opt-2 my-2">
                            <a href="<?php
                                        $id = $user['id_utilisateur'];
                                        echo site_url("information/utilisateur/$id"); ?>" style="color: black;" class="col-9">
                                <div class="element col-11 col-lg-10 mt-3">
                                    <div class="">
                                        <div class="row justify-content-center">
                                            <div class="col-2">
                                                <div class="number-place">
                                                    <p><?php echo $utilisateurs[$i]["id_utilisateur"] ?></p>
                                                </div>
                                            </div>
                                            <div class="col-6 ">
                                                <div class="row text-wrap">
                                                    <div class="icon-text-inline">
                                                        
                                                        <span class="lieu"><?php echo $user['identifiant'] ?></span>
                                                    </div>
                                                </div>
                                                <div class="row text-wrap">
                                                    <div class="icon-text-inline">
                                                        <span class="lieu"><?php echo "Status : ".$utilisateurs[$i]["status"] ?></span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="col-2">
                                <div class="row"><a class="btn btn-dark" href="<?php echo site_url("utilisateur/redirectForm/$id") ?>">modifier</a></div>
                                <div class="row my-1"><a class="btn btn-danger" href="<?php echo site_url("utilisateur/delete/$id") ?>">suprimer</a></div>
                            </div>
                        </div>
                <?php }
                } ?>
>>>>>>> 8aceb87be3724d17054f112a4ffc02046dd90f7c
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

<!-- Vendor JS Files -->
<script src="<?php echo base_url("assets/vendor/apexcharts/apexcharts.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendor/chart.js/chart.umd.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendor/echarts/echarts.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendor/quill/quill.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendor/simple-datatables/simple-datatables.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendor/tinymce/tinymce.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendor/php-email-form/validate.js"); ?>"></script>


<!-- Template Main JS File -->
<script src="<?php echo base_url("assets/js/main.js") ?>"></script>