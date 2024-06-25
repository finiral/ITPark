<link type="stylesheet" href="<?php echo base_url("NiceAdmin/assets/css/style.css") ?>">

<script src="<?php echo base_url("assets/js/ajax.js"); ?>"></script>

<script src="<?php echo base_url("assets/js/dashboard.js"); ?>">


</script>


</head>
<style>

</style>

<body>

    <div id="header" data-include="header2.html"></div>

    <div class="main-content min-vh-100 ">

        <div class="container">

            <h2 class="mt-4">Détails du parking <?php echo $parking["lieu_nom"]?></h2>
            <div class="row mt-4 text-start">
                <div class="border border-input bg-input  border-2 rounded-3 col-4 col-lg-2">
                    <a class="" href="<?php echo site_url("dashboard/index") ?>">
                        <span class="fs-4 me-3 color-red"><i class="fa fa-arrow-left"></i></span>
                        <span class="fs-3 color-red">Retour</span>
                    </a>
                </div>
            </div>
            <div class="row mt-4">
                <!-- Default Card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4 fw-bold">Prix</h5>
                            <div class="d-flex align-items-center">
                                <span>
                                    <i class="ri-car-line icone blue-icone"></i>
                                </span>
                                <h5><span class="fw-bold"><?php echo $parking["prix"] ?></span> Ariary</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Default Card -->
                <!-- Default Card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4 fw-bold">Nombre de places</h5>
                            <div class="d-flex align-items-center">
                                <span>
                                    <i class="ri-car-line icone blue-icone"></i>
                                </span>
                                <h5><span class="fw-bold"><?php echo $parking["nombre_place"] ?></span> places</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Default Card -->
                <!-- Default Card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4 fw-bold">Classe du parking</h5>
                            <div class="d-flex align-items-center">
                                <span>
                                    <i class="ri-car-line icone blue-icone"></i>
                                </span>
                                <h5><span class="fw-bold"><?php echo $parking["classe_nom"] ?></span></h5>

                            </div>
                        </div>
                    </div>
                </div><!-- End Default Card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4 fw-bold">Total recette</h5>
                            <div class="d-flex align-items-center">
                                <span>
                                    <i class="ri-car-line icone blue-icone"></i>
                                </span>
                                <h5><span class="fw-bold"><?php echo $recetteParking ?></span> Ariary</h5>

                            </div>
                        </div>
                    </div>
                </div><!-- End Default Card -->
            </div>
            <!-- Graphe Recette -->
            <div class="row mt-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Recettes</h3>
                        <form id="formBenefice" method="post">
                            <div class="row mt-4">
                                <div class="col-12 col-lg-4 mb-2">
                                    <div class="input-group">
                                        <span class="input-group-text">Annee</span>
                                        <input name="annee" type="number" aria-label="Last name" class="form-control col-3">
                                        <button class="btn btn-danger" type="submit" id="button-addon1">valider</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <script>
                            benefDashPark("<?php echo site_url("dashboard/beneficeAnnee/$id") ?>");
                        </script>
                        <!-- Area Chart -->
                        <div id="benefChart"></div>
                        <!-- End Area Chart -->
                    </div>
                </div>
            </div>
            <!-- Graphe Prevision -->
            <div class="row mt-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Prévisions</h3>
                        <form id="formPrevision" method="post">
                            <div class="row mt-4">
                                <div class="col-12 col-lg-4 mb-2">
                                    <div class="input-group">
                                        <span class="input-group-text">Annee</span>
                                        <input name="annee" type="number" aria-label="Last name" class="form-control col-3" required>
                                        <br>
                                        <span class="input-group-text">Mois</span>
                                        <input name="mois" type="number" aria-label="Last name" class="form-control col-3" required>
                                        <button class="btn btn-danger" type="submit" id="button-addon1">valider</button>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 mb-2">
                                    <div class="input-group">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <script>
                            prevDash("<?php echo site_url("dashboard/previsionParking/$id") ?>");
                        </script>
                        <!-- Area Chart -->
                        <div id="prevChart"></div>
                        <!-- End Area Chart -->
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="footer" class="" data-include="footer.html"></div>

    <script src="function.js"></script>
    <!--  -->



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
    <script src="<?php echo base_url("assets/js/main.js"); ?>"></script>

</body>

<script src="<?php echo base_url("assets/js/dashboard_ajax.js"); ?>"></script>
<script type="text/javascript">
    window.addEventListener("load", function() {
        var form = document.getElementById("formBenefice")
        form.addEventListener("submit", function(event) {
            event.preventDefault(); // évite de faire le submit par défaut
            getRecetteAnneePark(new FormData(form), "<?php echo site_url("dashboard/beneficeAnnee/$id") ?>");
        })
        var formPrevision = document.getElementById("formPrevision")
        formPrevision.addEventListener("submit", function(event) {
            event.preventDefault(); // évite de faire le submit par défaut
            getPrevision(new FormData(formPrevision), "<?php echo site_url("dashboard/previsionParking/$id") ?>");
        })
    });
</script>

</html>