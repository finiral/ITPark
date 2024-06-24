<script src="<?php echo base_url("assets/js/dashboard.js"); ?>"></script>


</head>
<style>

</style>

<body>

  <div id="header" data-include="header2.html"></div>
  <form id="formBenefice" method="post">

    <div class="main-content ">


      <div class="row justify-content-center mx-0">
        <div class="row mt-4">
          <div class="col-12 col-lg-6">
            <div class="input-group">
              <span class="input-group-text">annee</span>
              <input name="annee" type="number" aria-label="Last name" class="form-control">
              <button class="btn btn-danger" type="submit" id="button-addon1">valider</button>
            </div>

          </div>
        </div>
        <div class="row mt-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">bénéfice</h5>
              <script>
                benefDash();
              </script>
              <!-- Area Chart -->
              <div id="benefChart"></div>
              <!-- End Area Chart -->
            </div>
          </div>

        </div>
      </div>

    </div>

  </form>
  <div id="footer" class="" data-include="footer.html"></div>

  <script src="function.js"></script>
  <!--  -->



  <!-- Vendor JS Files -->
  <script src="<?php echo base_url("assets/vendor/apexcharts/apexcharts.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/vendor/chart.js/chart.umd.js"); ?>"></script>
  <script src="<?php echo base_url("assets/vendor/echarts/echarts.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/vendor/quill/quill.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/vendor/simple-datatables/simple-datatables.js"); ?>"></script>
  <script src="<?php echo base_url("assets/vendor/tinymce/tinymce.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/vendor/php-email-form/validate.js"); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url("assets/js/main.js"); ?>"></script>

</body>

<script src="<?php echo base_url("assets/js/ajax.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/dashboard_ajax.js"); ?>"></script>
<script>
  window.addEventListener("load", function() {
    var form = document.getElementById("formBenefice")
    form.addEventListener("submit", function(event) {
      event.preventDefault(); // évite de faire le submit par défaut
      getRecetteAnnee(new FormData(form), "<?php echo site_url("dashboard/beneficeAnnee") ?>");
    })
  });
</script>

</html>