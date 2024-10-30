<body>
    <div class="main-content">
        <div class="backimg">
            <div class="row justify-content-center mx-0">
                <center>
                    <h1 class="mytext-info" style="color:black;">Paiement</h1>
                    <h1 class="Title-resa" style="color: rgb(255, 255, 255);">Transaction par mobile money</h1>
                    <div class="col-8 col-lg-3 col-md-3 col-md-2" style="color: white;">
                        <form action="<?php echo site_url('paiement/insert'); ?>" method="post">
                       
                        <div class="row mt-4">
                            <input type="hidden" name="idparking" value="<?php echo $idparking; ?>" class="elementinput">
                        </div>
                        
                        <div class="row mt-4">
                            <input type="hidden" name="numero_place" value="<?php echo $numero_place ?>" class="elementinput">
                        </div>
                        
                        <div class="row mt-4">
                            <span>numero</span>
                            <input type="number" name="numero" class="elementinput">
                        </div>

                        <div class="row mt-4">
                            <span>immatriculation</span>
                            <input type="text" name="immatriculation" class="elementinput">
                        </div>

                        <div class="row mt-4">
                            <span>date</span>
                            <input type="date" name="date" class="elementinput">
                        </div>

                        <div class="row mt-4">
                            <span>duree</span>
                            <input type="number" name="duree" class="elementinput">
                        </div>
                        
                        <div class="row mt-4 button-resa">
                            <button type="submit" class="form-control">
                                <span>Payé via </span>
                                <span>
                                    <img src="<?php echo base_url('assets/img/mvola.png'); ?>" alt="Profile" class="rounded-circle" style="height: 100%; width:30px;">
                                </span>
                            </button>
                        </div>
                    </form>
                    </div>
                </center>
            </div>
        </div>
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>
