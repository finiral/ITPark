<div class="container vh-100">
    <div class="row mt-1">
        <div class="col-lg-4  m-auto rounded-5  mt-5 px-4c " id="box">
            <h1 class="text-center mt-4"><span style="color: #E63D36;">IT-</span>Park</h1>
            <h2 class="text-center mt-5">Insertion du Class</h2>
     
            <form action="<?php echo site_url('Classe/insert'); ?>" method="post">
                <p class="mt-4 me-3">Intitule:</p>
                <div class="input-group mb-2">
                    <span class="input-group-text mt-3" id="span">
                      <i class="fas fa-heading mt-2"></i>
                    </span>
                    <input type="text" name="intitule" class="form-control mt-3" id="input" placeholder="">
                </div>
                <div class="d-grid mb-3 px-5">
                    <button type="submit" class="btn text-white bg-dark mt-3 mb-3 mr-3">Inserez</button>
                </div>
            </form>
        </div>
    </div>
</div>

    

    