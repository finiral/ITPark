

<!-- Ajouter l'élément de fond flou -->
<!-- <div id="blurBackground" class="blur-background hidden"></div> -->

    <center>
        <?php if(isset($recherche)): ?>
        <div class="main-content">
        <div class="titlePage">
            <h3 style="color: rgb(0, 0, 0);">Liste des parkings</h3>
            <h1 style="font-weight: bold;color:#E63D36 ;"> réduction 10%  </h1> 
            <p style="color: black;">en heure creuse</p>
        </div><!-- End Page Title --> 

        
        <div class="information  col-lg-7">
            <?php foreach ($recherche as $p) { ?>
                <div class="element col-11 col-lg-10 mt-3"> 
                        <div class="element-2">
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <div class="number-place" >
                                        <p><?php echo $p['id_parking'] ?></p>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="row">
                                        <div class="icon-text-inline">
                                            <i class="bi bi-geo-alt-fill"></i> <!-- Exemple d'icône Font Awesome -->
                                            <span class="lieu"><?php echo $p['lieu_nom'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p>Place: <?php echo $p['nombre_place'] ?></p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <h1><?php echo $p['prix'] ?> Ar</h1>
                                </div>
                            </div>   
                        </div>
                </div>
            <?php }?>
        </div>
    
    <?php endif; ?>
    </center>
<br>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script src="<?php echo base_url("assets/js/function.js")?>"> </script> 

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url("assets/vendor/apexcharts/apexcharts.min.js")?>"></script>
  <script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")?>"></script>
  <script src="<?php echo base_url("assets/vendor/chart.js/chart.umd.js")?>"></script>
  <script src="<?php echo base_url("assets/vendor/echarts/echarts.min.js")?>"></script>
  <script src="<?php echo base_url("assets/vendor/quill/quill.min.js")?>"></script>
  <script src="<?php echo base_url("assets/vendor/simple-datatables/simple-datatables.js")?>"></script>
  <script src="<?php echo base_url("assets/vendor/tinymce/tinymce.min.js")?>"></script>
  <script src="<?php echo base_url("assets/vendor/php-email-form/validate.js")?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url("assets/js/main.js")?>"></script>
