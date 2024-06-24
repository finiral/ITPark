<script src="<?php echo base_url("assets/js/ajax.js"); ?>"></script>

<script src="<?php echo base_url("assets/js/dashboard.js"); ?>">


</script>


</head>
<style>

</style>

<body>

    <div id="header" data-include="header2.html"></div>
    <form id="formBenefice" method="post">

        <div class="main-content min-vh-100 ">

            <!-- ////////////////////////////////offcanvas ////////////////////////////////// -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="accordion accordion-flush" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="me-2" ><i class="fa fa-user"></i></span>
                                    Utilisateur
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                                data-bs-parent="#">
                                <div class="accordion-body">
                                <ol class="list-group list-group-flush">
                                        <a href="<?php echo site_url("utilisateur/index") ?>" class="list-group-item list-group-item-action">Liste</a>
                                        <a href="<?php echo site_url("insert_utilisateur/index") ?>" class="list-group-item list-group-item-action">Inserer</a>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="me-2" ><i class="fa fa-car"></i></span>
                                    Parking
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#">
                                <div class="accordion-body">
                                    <ol class="list-group list-group-flush">
                                        <a href="<?php echo site_url('up_de/index') ?>" class="list-group-item list-group-item-action">Liste</a>
                                        <a href="#" class="list-group-item list-group-item-action">Inserer</a>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="me-2" ><i class="fa fa-map-location"></i></span>
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
            
            <!-- ////////////////////////////////offcanvas ////////////////////////////////// -->
            <div class="row justify-content-center mx-0">
                <div class="row mt-4">
                    <div class="border border-input bg-input  border-2 rounded-3 col-4 col-lg-1">
                        <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                            aria-controls="offcanvasExample">
                            <span class="fs-4 color-red"><i class="bi bi-list toggle-sidebar-btn"></i></span>
                            <span class="fs-3 color-red">Menu</span>
                        </a>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-lg-2 mb-2">
                        <div class="input-group">
                            <span class="input-group-text">Annee</span>
                            <input name="annee" type="number" aria-label="Last name" class="form-control col-3">
                            <button class="btn btn-danger" type="submit" id="button-addon1">valider</button>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 mb-2">
                        <div class="input-group">
                            <span class="input-group-text col-3 text-wrap">Choix des parkings</span>
                            <select name="" id="" class="col-6 col-lg-3">
                                <?php for($i=0; $i<count($parkings);$i++){?>
                                <option value=""><?php echo $parkings[$i]["lieu_nom"]?></option>
                                <?php }?>
                            </select>
                            <button class="btn btn-danger col-3 col-lg-1" type="submit" id="button-addon1">valider</button>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Recettes</h5>
                            <script>
                            benefDash("<?php echo site_url("dashboard/beneficeAnnee") ?>");
                            </script>
                            <!-- Area Chart -->
                            <div id="benefChart"></div>
                            <!-- End Area Chart -->
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </form>
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
<script>
window.addEventListener("load", function() {
    var form = document.getElementById("formBenefice")
    form.addEventListener("submit", function(event) {
        event.preventDefault(); // évite de faire le submit par défaut
        getRecetteAnnee(new FormData(form), "<?php echo site_url("dashboard/beneficeAnnee") ?>");
    })
});
</script>

</html>