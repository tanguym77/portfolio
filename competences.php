<?php
    include 'vue/header.php';
?>

<section class="w-auto d-flex justify-content-center" style="background: url(images/background.webp); background-size: cover; background-position: center; background-attachment: fixed; min-height : 100vh!important;">
    <div>
        <!-- TITLE -->
        <div class="row w-100 mx-auto text-white text-center pt-5">
            <h1>Mes Compétences</h1>
        </div>

        <!-- CARD -->
        <div class="row w-100 mx-auto row-cols-1 row-cols-md-2 g-4 p-3">
            
            <!-- MOOC ANSSI -->
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">MOOC de l'ANSSI</h5>
                    </div>
                    <img src="images/certifications/logo_secnum.png" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">Initiation aux principes de la cybersécurité et approfondir ses connaissances pour agir efficacement sur la protection de nos outils numériques.</p>
                    </div>
                    <div class="card-footer">
                        <div class="dropdown text-center">
                            <a class="btn btn-primary" href="files/certifications/MOOC_ANSSI.pdf" target="_blank">La certification</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PHP OPENCLASSROOM -->
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">PHP & MySQL Openclassroom</h5>
                    </div>
                    <img src="images/certifications/logo_php.png" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">Se former aux essentiels de PHP et MySQL.</p>
                    </div>
                    <div class="card-footer">
                        <div class="dropdown text-center">
                            <a class="btn btn-primary" href="files/certifications/Certification_PHP.PNG" target="_blank">La certification</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- API PYTHON CISCO-->
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">API Pyton - Cisco</h5>
                    </div>
                    <img src="images/certifications/logo_api.png" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">Formation proposé par CISCO qui permet de se former aux API avec WEBEX, Postman et Python.</p>
                    </div>
                    <div class="card-footer">
                        <div class="dropdown text-center">
                            <a class="btn btn-primary" href="files/certifications/TANGUYMARMIER-API-certificate.pdf" target="_blank">La certification</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
</body>

<?php
    include 'vue/footer.php'
?>