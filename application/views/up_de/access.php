

<div class="container" style="min-height:77dvh">
        
        <div class="row mt-5 pt-5 justify-content-center">
            <div class="col-lg-4 mt-5 text-start ">
                <div class="border border-input bg-input  border-2 rounded-3 col-4 col-lg-5 ps-4">
                    <a class="" href="<?php echo site_url("dashboard/index") ?>">
                    <span class="fs-4 me-3 color-red"><i class="fa fa-arrow-left"></i></span>
                    <span class="fs-3 color-red">Menu</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4  m-auto rounded-5 mt-5 px-4 bg-light" id="box" >
                
                <h2 class="text-center mt-5">Attribution de proprietaire a un parking</h2>
                <div class="text-center">
                    <p><?php  echo $error ?></p>
                </div>
                <form action="<?php echo site_url("parking/change_owner")?>" method="post">
                    <!-- <p class="mt-4 me-3">Nom:</p>
                    <div class="input-group mb-2">
                        
                        <span class="input-group-text mt-3" id="span">
                            <i class="fas fa-id-badge mt-2"></i>
                        </span>
                       
                        <select name="" id=""></select>
                    </div> -->
                    
                    <p class="mt-4 me-3">proprietaire <i class="fa fa-arrow-right"></i>  parking</p>
                    <?php echo count($owner); ?>
                    <div class="input-group mb-3">
                        <select name="owner" id="" class="form-control mt-3">
                            <option value="">owner</option>
                            <?php for ($i=0; $i < count($owner); $i++) { 
                                $ow = $owner[$i];
                                ?>
                                <option value="<?php echo $ow->id_utilisateur ?>"><?php echo $ow->identifiant ?></option>
                            <?php }?>
                        </select>
                        <select name="parking" id="" class="form-control mt-3">
                            <option value="">parking</option>
                            <?php for ($i=0; $i < count($parking); $i++) {?>
                                <option value="<?php echo $parking[$i]['id_parking'] ?>"><?php echo $parking[$i]['lieu_nom'] ?></option>
                            <?php }?>
                        </select>
                        
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn text-white bg-dark mt-3 mb-3 mr-3">Attribuer</button>
                    </div>

                </form>
            </div>
        </div>
    </div>


