<style>
    .input-group-append {
        cursor: pointer;
        }
</style>
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
        <div class="col-lg-4  m-auto rounded-5 mt-5 px-4 bg-light" id="box">

            <h2 class="text-center mt-5">Attribution des gardien</h2>
            <div class="text-center">
                <p><?php  echo $error ?></p>
            </div>
            <form action="<?php echo site_url("Mouvement_gardien/insert")?>" method="post">
                <input type="hidden" name="type" value="<?php echo $type ?>">
                <p class="mt-4 me-3">Date</p>
                <div class="input-group mb-2">
                    <div class="col-12">
                        <div class="input-group date" id="datepicker">
                            <input type="date" class="form-control" id="date" name="date" />
                            <span class="input-group-append">
                            </span>
                        </div>
                    </div>
                </div>

                <p class="mt-4 me-3">Coordonnée:</p>
                <div class="input-group mb-3">
                    <input type="number" class="form-control me-2" id="input" placeholder="Numero gard-0000" name="gardien" value="<?php if(isset($guard) && $guard != null){ echo $guard; } ?>">
                    <select name="parking" id="" class="form-control me-2">
                        <option value="">parking</option>
                        <?php for ($i=0; $i < count($parking); $i++) { ?>
                            <option value="<?php echo $parking[$i]['id_parking'] ?>"><?php echo $parking[$i]['lieu_nom'] ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="d-grid mb-3">
                    <button type="submit" class="btn text-white bg-dark mt-3 mb-3 mr-3">Inserez</button>
                </div>

            </form>
        </div>
    </div>
</div>