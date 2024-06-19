<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css") ?>">
  <meta name="description" content="<?php echo $description ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/stylecrud.css") ?>">

  <!-- Vendor CSS Files -->
  <link href=" <?php echo base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet">
  <link href=" <?php echo base_url("assets/vendor/bootstrap-icons/bootstrap-icons.css") ?>" rel="stylesheet">
  <link href=" <?php echo base_url("assets/vendor/boxicons/css/boxicons.min.css") ?>" rel="stylesheet">
  <link href=" <?php echo base_url("assets/vendor/quill/quill.snow.css") ?>" rel="stylesheet">
  <link href=" <?php echo base_url("assets/vendor/quill/quill.bubble.css") ?>" rel="stylesheet">
  <link href=" <?php echo base_url("assets/vendor/remixicon/remixicon.css") ?>" rel="stylesheet">
  <link href=" <?php echo base_url("assets/vendor/simple-datatables/style.css") ?>" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href=" <?php echo base_url("assets/css/style.css") ?>" rel="stylesheet">
  <title><?php echo $title ?></title>
</head>

<body class="bg-white ">
    <nav class="navbar navbar-expand-lg head bg-dark">
      
    </nav>

    <!-- ======= Header ======= -->
    <header class="header bg-dark fixed-top">
    <div class="container-fluid justify-content-md-start justify-content-center">
        <a class="navbar-brand brand" href="#">
          <span class=""><img class="rounded" src="<?php echo base_url("assets/image/directions_car_24dp_FILL0_wght400_GRAD0_opsz24.png") ?>" alt=""></span>
          <span>
            <span class="brand-1">IT-</span><span class="brand-2">Park</span>
          </span>
        </a>
      </div>
      <form method="GET" action="<?php echo site_url("accueil/recherche"); ?>">
        <div class="justify-content-center">
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
        

        <div class="mt-2 mb-2 justify-content-center ">
          <p class="d-inline-flex gap-1">
            <center>
              <button class="buttonSearche  toolbox-active " type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2" style="width: 100px;">budget</button>
              <button class="buttonSearche  toolbox-active " type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3" style="width: 100px;">classe</button>
              <button class="btn btn-primary" type="submit" data-bs-target="#multiCollapseExample3" aria-expanded="false" style="width: 100px; ">Valider</button>
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
                      <label class="form-check-label" for="flexCheckChecked">
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