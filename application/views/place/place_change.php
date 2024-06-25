<nav class="navbar navbar-expand-lg head bg-dark fixed-top">
    <div class="container-fluid justify-content-md-start justify-content-center">
        <a class="navbar-brand brand" href="#">
            <span class=""><img class="rounded" src="assets/image/directions_car_24dp_FILL0_wght400_GRAD0_opsz24.png"
                    alt=""></span>
            <span>
                <span class="brand-1">IT-</span><span class="brand-2">Park</span>
            </span>
        </a>
    </div>
</nav>
<div class=" row mt-6">
    <div class="body pe-0 pe-md-0 pe-lg-0">
        <div class="row croquis mx-0 pb-3 pe-md-3 pe-lg-3 bg-light">
            <div class="col-lg-8 col-md-12 mx-0 mt-1x` bg-light">
                <div class="row p-3">
                    <img src="<?php echo base_url('assets/image/park.jpg') ?>" class="img-fluid plaque image px-0"
                        alt="">
                </div>
                <div class="row mt-2 mb-2 p-2 ">
                    <div class="col-12 info p-2 detail">
                        <ul class="list-group">
                            <li class="detail list-group-item "><span class="fw-bold">Localisation du parking :
                                </span><span class=""><?php echo $parking['lieu_nom'] ?></span></li>
                            <li class="detail list-group-item "><span class="fw-bold">Nombre de place :</span> <span
                                    class="badge bg-red "><?php echo count($places) ?></span></li>
                            <?php if(!empty($status)) { ?>
                            <li class="detail list-group-item "><span class="fw-bold">Nombre de reservation :</span>
                                <span class="badge bg-red"><?php echo count($reservations) ?></span>
                            </li>
                            <?php } ?>
                            <li class="detail list-group-item "><span class="fw-bold">Nombre de place libre :</span>
                                <span class="badge bg-red"><?php echo count($place_free) ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 mb-5 mb-md-0 mb-lg-0 list py-3 px-4 bg-light">
                <!-- <div class="row text-center title">
                    <div class="col-4  p-1 ">N&deg; Place</div>
                    <div class="col-4  p-1 ">Reserver</div>
                    <div class="col-4  p-1 ">Changer</div>
                </div> -->
                <form action="<?php echo site_url("accueil/recherche");?>" method="POST">
                            <button type="submit" class="btn btn-warning mb-3">Retour</button>
                        </form>
                <?php if(count($place_free) > 0) { ?>
                <?php for($i = 0; $i < count($place_free); $i++) { ?>
                <div class="row text-center sub-title p-2 mb-2">
                    <div class="col-2 colon-1 ">
                        <div class="contenue row justify-content-start h-100">
                            <div class="col-5 bg-dark numero p-2"><?php echo $i+1 ?></div>
                        </div>
                    </div>

                    <div class="col-7  p-1 colon-2 justify-content-center">
                        <form action="<?php echo site_url("paiement/indexe");?>" method="post">
                            <input type="hidden" name="idparking" value="<?php echo $id ?>">
                            <input type="hidden" name="numero_place" value="<?php echo $place_free[$i]['numero_place'] ?>">
                            <button type="submit" class="btn btn-dark bouton w-100" data-bs-toggle="modal"
                                data-bs-target="#modalPayer">Reserver</button>
                        </form>
                    </div>

                    <div class="col-3  p-1 colon-3 d-flex justify-content-end" ng-controller="place">
                        <form action="">
                            <?php if(!empty($status)) { ?>
                            <div class="moov h-100 bg-dark" ng-click="reserve()">
                                <input type="hidden" class="val" ng-model="value" name="val">
                                <div class="boule h-100 bg-light bl-slide"></div>
                            </div>
                            <?php } else { ?>
                            <div class="moov h-100 bg-success" ng-click="reserve()">
                                <input type="hidden" class="val" ng-model="value" name="val">
                            </div>
                            <?php } ?>

                        </form>
                    </div>
                </div>
                <?php } ?>
                <?php } else { ?>
                <div class="row ">
                    <div class="col-12">
                        <h4 class="place" style="color: #E63D36;text-align: center;">Aucune place disponible pour le
                            moment</h4>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url("assets/js/moov-menu.js") ?>"></script>