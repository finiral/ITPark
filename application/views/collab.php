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
            <h2 class="mt-4">Partenaire</h2>

            <div class="row mt-4">
                <!-- Default Card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4 fw-bold">Recette total cette année</h5>
                            <div class="d-flex align-items-center">
                                <span>
                                    <i class="ri-money-dollar-box-line icone green-icone"></i>
                                    </i>
                                </span>
                                <h5><span class="fw-bold"><?php echo $recetteTotal ?></span> Ariary</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Default Card -->
            </div>

            <!-- LISTE PARKING -->
            <div class="row mt-4">
                <h1>Liste de vos parkings</h1>
                <div class="table-responsive">
                    <form action="<?php echo site_url("collaborateur/recherche") ?>" method="GET">
                    <label for="">Filtre par nom</label>
                    <br>
                        <input type="text" name="nom" required>
                        <input type="submit">
                    </form>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nom Parking</th>
                                <th>Description</th>
                                <th>Classe</th>
                                <th>Prix</th>
                                <th>Recette</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < count($parkings); $i++) { ?>
                                <tr>
                                    <td><?php echo $parkings[$i]["lieu_nom"] ?></td>
                                    <td><?php echo $parkings[$i]["description"] ?></td>
                                    <td><?php echo $parkings[$i]["classe_nom"] ?></td>
                                    <td><?php echo $parkings[$i]["prix"] ?></td>
                                    <td><?php echo $parkings[$i]["recette"] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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
    window.addEventListener("load", function() {});
</script>

</html>