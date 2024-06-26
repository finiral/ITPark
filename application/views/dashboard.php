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

        <!-- ////////////////////////////////offcanvas ////////////////////////////////// -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="accordion accordion-flush" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="me-2"><i class="fa fa-user"></i></span>
                                Utilisateur
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#">
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="me-2"><i class="fa fa-car"></i></span>
                                Parking
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#">
                            <div class="accordion-body">
                                <ol class="list-group list-group-flush">
                                    <a href="<?php echo site_url('up_de/index') ?>" class="list-group-item list-group-item-action">Liste</a>
                                    <a href="<?php echo site_url('parking/indexe') ?>" class="list-group-item list-group-item-action">Inserer</a>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="me-2"><i class="fa fa-map-location"></i></span>
                                Lieu
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#">
                            <div class="accordion-body">
                                <ol class="list-group list-group-flush">
                                    <a href="#" class="list-group-item list-group-item-action">Liste</a>
                                    <a href="<?php echo site_url("lieu/indexe") ?>" class="list-group-item list-group-item-action">Inserer</a>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ////////////////////////////////offcanvas ////////////////////////////////// -->

        <div class="container">
            <h2 class="mt-4">Dashboard</h2>
            <div class="row mt-4">
                <div class="border border-input bg-input  border-2 rounded-3 col-4 col-lg-2">
                    <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        <span class="fs-4 color-red"><i class="bi bi-list toggle-sidebar-btn"></i></span>
                        <span class="fs-3 color-red">Menu</span>
                    </a>
                </div>
            </div>

            <div class="row mt-4">
                <!-- Default Card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4 fw-bold">Places occupés en ce moment</h5>
                            <div class="d-flex align-items-center">
                                <span>
                                    <i class="ri-car-line icone blue-icone"></i>
                                </span>
                                <h5><span class="fw-bold"><?php echo $nbUsed ?></span> voitures</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Default Card -->
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
                <!-- Default Card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4 fw-bold">Parking le plus populaire</h5>
                            <div class="d-flex align-items-center">
                                <span>
                                    <i class="ri-fire-line icone red-icone"></i>
                                </span>
                                <div class="ps-3">
                                    <h5><span class="fw-bold"><?php echo $mostPopular ?></span></h5>
                                    <p><span class="text-muted small"><?php echo $mostPopularCount ?> entrées</span></p>
                                </div>

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
                            benefDash("<?php echo site_url("dashboard/beneficeAnnee") ?>");
                        </script>
                        <!-- Area Chart -->
                        <div id="benefChart"></div>
                        <!-- End Area Chart -->
                    </div>
                </div>
            </div>
            <!-- CHOIX PARKING -->
            <div class="row mt-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Détail parking</h3>
                        <form action="<?php echo site_url("dashboard/parking_board")?>" method="get">
                            <div class="row mt-4">
                                <div class="col-12 col-lg-6 mb-2">
                                    <div class="input-group">
                                        <span class="input-group-text col-6 text-wrap">Choix de parking</span>
                                        <select name="idPark" id="" class="col-6 col-lg-3">
                                            <?php for ($i = 0; $i < count($parkings); $i++) { ?>
                                                <option value="<?php echo $parkings[$i]["id_parking"]?>"><?php echo $parkings[$i]["lieu_nom"] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <br>
                                    <button class="btn btn-danger" type="submit" id="button-addon1">voir les détails</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Parking populaires -->
            <div class="row mt-4">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" id="formPopular">
                            <h3 class="card-title">Parkings les plus populaires</h3>
                            <div class="col-12 col-lg-4 mb-2">
                                <div class="input-group">
                                    <span class="input-group-text">Annee</span>
                                    <input name="anneepopular" type="number" aria-label="Last name" class="form-control col-3" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mb-2">
                                <div class="input-group">
                                    <span class="input-group-text">Mois</span>
                                    <input name="moispopular" type="number" aria-label="Last name" class="form-control col-3">
                                </div>
                            </div>
                            <button class="btn btn-danger" type="submit" x>Filtrer</button>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nom Parking</th>
                                        <th>Classe</th>
                                        <th>Description</th>
                                        <th>Nombre d'entrées</th>
                                    </tr>
                                </thead>
                                <tbody id="bodyPopular">
                                    <?php for ($i = 0; $i < count($lsPopular); $i++) { ?>
                                        <tr>
                                            <td><?php echo $lsPopular[$i]["lieu_nom"] ?></td>
                                            <td><?php echo $lsPopular[$i]["classe_nom"] ?></td>
                                            <td><?php echo $lsPopular[$i]["description"] ?></td>
                                            <td><?php echo $lsPopular[$i]["nombre_entrees"] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Lieu recette -->
            <div class="row mt-4">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" id="">
                            <h3 class="card-title">Lieux qui rapportent le plus</h3>
                            <div class="col-12 col-lg-4 mb-2">
                                <div class="input-group">
                                    <span class="input-group-text">Annee</span>
                                    <input name="" type="number" aria-label="Last name" class="form-control col-3" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mb-2">
                                <div class="input-group">
                                    <span class="input-group-text">Mois</span>
                                    <input name="" type="number" aria-label="Last name" class="form-control col-3">
                                </div>
                            </div>
                            <button class="btn btn-danger" type="submit" x>Filtrer</button>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nom lieu</th>
                                        <th>Total de revenue</th>
                                    </tr>
                                </thead>
                                <tbody id="bodyLieu">
                                    <?php for ($i = 0; $i < count($lieuList); $i++) { ?>
                                        <tr>
                                            <td><?php echo $lieuList[$i]["lieu_nom"] ?></td>
                                            <td><?php echo $lieuList[$i]["total_revenue"] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Stat classe -->
            <div class="row mt-4">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" id="">
                            <h3 class="card-title">Recettes par classe</h3>
                            <div class="col-12 col-lg-4 mb-2">
                                <div class="input-group">
                                    <span class="input-group-text">Annee</span>
                                    <input name="" type="number" aria-label="Last name" class="form-control col-3" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mb-2">
                                <div class="input-group">
                                    <span class="input-group-text">Mois</span>
                                    <input name="" type="number" aria-label="Last name" class="form-control col-3">
                                </div>
                            </div>
                            <button class="btn btn-danger" type="submit" x>Filtrer</button>
                        </form>
                        <div id="pieChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                            camembertClasse()
                        </script>
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
            getRecetteAnnee(new FormData(form), "<?php echo site_url("dashboard/beneficeAnnee") ?>");
        })
        var formPopular = document.getElementById("formPopular")
        formPopular.addEventListener("submit", function(event) {
            event.preventDefault();
            getPopularParking(new FormData(formPopular), "<?php echo site_url("dashboard/popularParking") ?>");
        })
    });
</script>

</html>