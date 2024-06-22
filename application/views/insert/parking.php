

<div class="container">
    <div class="row mt-1">
        <div class="col-lg-3 m-auto rounded-5 mt-5 px-4" id="box">
            <h1 class="text-center mt-4"><span style="color: #E63D36;">IT-</span>Park</h1>
            <h2 class="text-center mt-5">Insertion de Parking</h2>
            <?php if (!empty($error)) { ?>
                    <div class="alert alert-danger">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>
            <form action="<?php echo site_url('Parking/insert'); ?>" method="post">
                <div class="input-group mb-2">
                    <p class="mt-4 me-3">Nom:</p>
                    <span class="input-group-text mt-3" id="span">
                        <i class="fas fa-id-badge mt-2"></i>
                    </span>
                    <input type="text" class="form-control mt-3" id="input" placeholder="Nom" name="nom">
                </div>
                
                <div class="input-group mb-3">
                <p class="mt-4 me-3">Classe:</p>
                    <select name="classe" id="classe" class="form-control mt-3">
                        <?php foreach($classe as $c) { ?>
                            <option value="<?php echo $c['id_classe']; ?>"><?php echo $c['intitule']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                
                <div class="input-group mb-3">
                <p class="mt-4 me-3">Lieu:</p>
                    <select name="lieu" id="lieu" class="form-control mt-3">
                        <?php foreach($lieu as $l) { ?>
                            <option value="<?php echo $l['id_lieu']; ?>"><?php echo $l['nom']; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <p class="mt-4 me-3">Nombre de place:</p>
                    <input type="number" class="form-control me-2 mt-3" id="input" placeholder="Nombre de place" name="nombre_place">
                </div>

                <div class="input-group mb-3">
                    <p class="mt-4 me-3">Prix:</p>
                    <input type="number" class="form-control me-2 mt-3" id="input" placeholder="Prix" name="prix">
                </div>

                <div class="input-group mb-3">
                    <p class="mt-4 me-3">Description:</p>
                    <textarea class="form-control me-2 mt-3" id="input" placeholder="Description" name="description"></textarea>
                </div>

                <div class="d-grid mb-3">
                    <button type="submit" class="btn text-white bg-black mt-3 mb-3">Inserez</button>
                </div>

               
            </form>
        </div>
    </div>
</div>
