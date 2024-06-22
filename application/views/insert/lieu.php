

    <div class="container ">
        <div class="row mt-5 pt-5">
            <div class="col-lg-4  m-auto rounded-5 mt-5 px-4" id="box">
                
                <h1 class="text-center mt-4"><span style="color: #E63D36;">IT-</span>Park</h1>
                <h2 class="text-center mt-5">Insertion du Lieu</h2>
                <div class="text-center">
                    <p><?php  echo $error ?></p>
                </div>
                <form action="<?php echo site_url("Lieu/insert")?>" method="post">
                    <p class="mt-4 me-3">Nom:</p>
                    <div class="input-group mb-2">
                        
                        <span class="input-group-text mt-3" id="span">
                            <i class="fas fa-id-badge mt-2"></i>
                        </span>
                        <input type="text" class="form-control mt-3" id="input" placeholder="Nom" name="nom">

                    </div>
                    
                    <p class="mt-4 me-3">Coordonnée:</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control me-2" id="input" placeholder="Longitude" name="longitude">
                        <input type="text" class="form-control" id="input" placeholder="Latitude" name="latitude">
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn text-white bg-dark mt-3 mb-3 mr-3">Inserez</button>
                    </div>

                </form>
            </div>
        </div>
    </div>


