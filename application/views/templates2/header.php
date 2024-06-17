  <!-- ======= Header ======= -->
  <header class="header" >

  <form method="GET" action="<?php echo site_url("recherche/recherche");?>">
  <div class="row justify-content-center">
        <div class="container d-flex justify-content-center align-items-center">

          <div class="col-8 col-md-6">
              <div class="input-group">
                  <input type="text" class="form-control personalSearch" placeholder="recherche" name="localisation">
                  <span class="input-group-text" style="border-bottom-right-radius: 50px; border-top-right-radius: 50px; background-color : #DCDCDC ; color : black ;  ">
                      <i class="bi bi-search"></i>
                  </span>
              </div>
          </div>
        </div>
    </div>

    <div class="row mt-2 mb-2 justify-content-center " >
        <p class="d-inline-flex gap-1">
          <center>
          <button class="buttonSearche  toolbox-active " type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2" style="width: 100px;">budget</button>
          <button class="buttonSearche  toolbox-active " type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3" style="width: 100px;">classe</button>
          <button class="btn btn-primary" type="submit"  data-bs-target="#multiCollapseExample3" aria-expanded="false"  style="width: 100px; " >Valider</button>
            
        </center>
        </p>
      
        <div class="justify-content-center " id="toolbox">
          <center>
            <div class="row mt-2 justify-content-center">
              <div class="col col-md-4">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                  <div class="card card-body">
                    <div class="form-check">
                      <input class="personalSearch" type="text" placeholder="rechercher" style="color:black; ">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </center>

            <div class="row mt-2 justify-content-center">
              <div class="col col-md-4">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                  <div class="card card-body">
                    <div class="input-group">
                      <span class="input-group-text">min</span>
                      <input type="text" aria-label="First name" class="form-control" name="min">
                      <span class="input-group-text">max</span>
                      <input type="text" aria-label="Last name" class="form-control" name="max">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-2 justify-content-center">
              <div class="col col-md-4">
                <div class="collapse multi-collapse" id="multiCollapseExample3">
                  <div class="card card-body" style="color: black;">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="VIP" id="flexCheckChecked" name="classe[]" checked>
                      <label class="form-check-label" for="flexCheckChecked" >
                        Haute de gamme
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="Moyen" id="flexCheckChecked" name="classe[]" checked>
                      <label class="form-check-label" for="flexCheckChecked">
                        Moyen
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="Intermediaire" id="flexCheckChecked" name="classe[]" checked>
                      <label class="form-check-label" for="flexCheckChecked">
                        Entree de gamme
                      </label>
                    </div>
                  </div>
                </div>
              </div>  
            </div>

        
           
        </div>
    </div>
  </form>
   

   <script src="effect.js"></script>
  
  </header><!-- End Header -->
