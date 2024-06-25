<body>
    <div id="header" data-include="header.html"></div>
    <div class="mt-8 p-3">
        <div class="row">

            <div class="col-12 col-md-4 col-lg-4">
                <div class="row">
                    <img src="<?php echo base_url("assets/img/parking.jpg"); ?>" alt="" srcset="" style="border-radius:30px ; ">
                </div>
            </div>
              <div class="col-12 col-md-8 col-lg-8">
    <div class="row">
        <!-- <form action="<?php echo site_url("paiement/indexe");?>" method="POST"> -->
        <form action="<?php echo site_url("place/change");?>" method="POST">
            <div class="col-12 col-md-10 offset-md-1">
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="icon-text-inline">
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>Lieu : <?php echo $lieu; ?></span>
                        </div>
                    </div>
                </div>
                <input type="hidden" value="<?php echo $id;?>" name="idparking">
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="icon-text-inline">
                            <i class="bi bi-list"></i>
                            <span>Classe : <?php echo $classe; ?></span>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="icon-text-inline">
                            <i class="bi bi-cash"></i>
                            <span>Prix : <?php echo $prix; ?>Ar/h</span>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <p>Heure de pointe : <?php echo $debutpointe; ?>h-<?php echo $finpointe; ?>h</p>
                    </div>
                </div>
                <?php if($nblibre > 0) { ?>
                    <div class="row mt-4">
                        <div class="col-12">
                            <h3 class="place" style="color: #E63D36;">Nombre de places disponibles : <?php echo $nblibre; ?></h3>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <button type="submit" class="personal-button">Réserver</button>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="row mt-4">
                        <div class="col-12">
                            <h4 class="place" style="color: #E63D36;text-align: center;">Aucune place disponible pour le moment</h4>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </form>
    </div>
    <div class="row mt-4">
        <div class="col-12 text-center">
            <form action="<?php echo site_url("accueil/recherche");?>" method="POST">
                <button type="submit" class="btn btn-secondary">Retour</button>
            </form>
        </div>
    </div>
</div>
            </div>
        </div>
</div>

    <div id="footer" class="" data-include="footer.html"></div>

    <script src="function.js"></script>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

