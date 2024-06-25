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