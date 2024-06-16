<div class="main-content">
    <div class="card " style="border: none;">
        <img src="assets/img/parking.jpg" class="card-img" alt="..." style="opacity:0.39;">
        <div class="card-img-overlay">
            <center>
                <h1 class="mytext-info"><?php echo $parking['description'] ?></h1>
            </center>
            <div class="row justify-content-center ">
                <p class="card-text" style="color: black;">
                    <div class="col-7 col-md-2">
                        <div class="row mt-4">
                            <div class="icon-text-inline">
                                <i class="bi bi-geo-alt-fill"></i> <!-- Exemple d'icône Font Awesome -->
                                <span>Lieu : <?php echo $parking['lieu_nom'] ?></span>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="icon-text-inline">
                                <i class="bi bi-list"></i> <!-- Exemple d'icône Font Awesome -->
                                <span>Classe : <?php echo $parking['classe_nom'] ?></span>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="icon-text-inline">
                                <i class="bi bi-cash"></i> <!-- Exemple d'icône Font Awesome -->
                                <span>Budget : <?php echo $parking['prix'] ?></span>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <p>heure creuse : 8h-10h</p>
                            <p>heure de point : 12h-14h</p>
                        </div>

                    </div>
                </p>
                <center>
                    <h3 class="place">Nombre de place dispo : <?php echo $parking['nombre_place'] ?></h3>
                    <button class="personal-button">Réservé</button>
                </center>
                <p><a href="<?php echo site_url("place/change");?>" >Place_change</a></p>
            </div>
        </div>
    </div>
</div>