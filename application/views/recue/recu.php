<body>
    <div id="header" data-include="header.html"></div>
    <div class="mt-8 p-3 ">
        <div class="row justify-content-center my-3">
            <div class="col-10 col-md-4 col-lg-4">
                <a href="<?php echo site_url("accueil/index") ?>" class="btn btn-danger" >Home</a>
            </div>
        </div>
        <div class="row justify-content-center">    
            <div class="col-10 col-md-4 col-lg-4 bg-light border border-dark border-1 rounded-3  p-3 pt-0" id="receipt">
                <div class="row text-center bg-dark mb-3">
                    <h1><span class="brand-1">IT-</span><span class="brand-2">PARK</span></h1>
                </div>
                <div class="row text-center">
                    <p> <b>Lieu</b> : <?php echo $parking_lieu ?></p>
                    <p> <b>Date de reservation </b> : <?php echo $date ?></p>
                    <p> <b>voiture mlle </b> : <?php echo $immatriculation ?></p>
                    <p> <b>Num tel </b> : <?php echo $numero ?></p>
                    <p> <?php echo $prix_parking ?> / heure</p>
                    <p> <b>place n&deg;</b> <?php echo $numero_place ?></p>
                    <p> <?php echo $duree ?> heure </p>
                    <p> <b>Montant total a payer </b> : <?php echo $montant_total ?></p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center">
                <button id="downloadBtn" class="btn btn-success">Télécharger le reçu</button>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div id="footer" class="" data-include="footer.html"></div>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script>
    document.getElementById('downloadBtn').addEventListener('click', function() {
        // Sélectionne l'élément du reçu
        var receiptElement = document.getElementById('receipt');

        // Utilise html2canvas pour capturer l'élément du reçu comme une image
        html2canvas(receiptElement).then(function(canvas) {
            // Convertit le canvas en URL de données
            var dataURL = canvas.toDataURL('image/png');

            // Crée un élément de lien pour le téléchargement
            var downloadLink = document.createElement('a');
            downloadLink.href = dataURL;
            downloadLink.download = 'recu.png';

            // Simule un clic sur le lien pour déclencher le téléchargement
            downloadLink.click();
        });
    });
    </script>
    <script src="function.js"></script>
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