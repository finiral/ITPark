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
                <div class="row ">
                    <form action="<?php echo site_url("paiement/index");?>" method="POST">
                        <p class="card-text" style="color: black;">
                        <div class="col-8" style="margin-left:20px ;">
                            <div class="row mt-4">
                                <div class="icon-text-inline">
                                    <i class="bi bi-geo-alt-fill"></i>
                                    <span>Lieu : <?php echo $lieu; ?></span>
                                </div>
                            </div>
                            <input type="hidden" value="<?php echo $id;?>" name="idparking">

                            <div class="row mt-4">
                                <div class="icon-text-inline">
                                    <i class="bi bi-list"></i>
                                    <span>Classe : <?php echo $classe; ?></span>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="icon-text-inline">
                                    <i class="bi bi-cash"></i>
                                    <span>Prix : <?php echo $prix; ?>Ar/h</span>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <p>heure de point : <?php echo $debutpointe; ?>h-<?php echo $finpointe; ?>h</p>
                            </div>

                            <h3 class="place" style="color: #E63D36;">Nombre de place dispo :<?php echo $nblibre; ?></h3>
                            <button type="submit" class="personal-button">Réservé</button>

                        </div>
                        </p>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <div id="footer" class="" data-include="footer.html"></div>

    <script src="function.js"></script>
    <!--  -->



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
