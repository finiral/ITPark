<!-- Ajouter l'élément de fond flou -->

<center class="pt-5 mt-5">
    <?php if (isset($utilisateurs)) : ?>
        <div class="main-content min-vh-100 mt-5 p-3">
            <div class="titlePage">
                <h3 style="color: rgb(0, 0, 0);">Liste des utilisateurs</h3>
                <!-- <h1 style="font-weight: bold;color:#E63D36 ;"> réduction 10% </h1>
                <p style="color: black;">en heure creuse</p> -->
            </div><!-- End Page Title -->


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