
<!DOCTYPE html>
<html class="h-100 w-100">
    <head>

        <meta name='viewport' content='width=device-width, initial-scale=1.0'/>

             <!-- Title -->
            <title>Portfolio - Marmier Tanguy</title>
            <!-- ICON -->
            <link rel="icon" type="image/x-icon" href="images/favicon/favicon.ico">
        
        <!-- CSS PERSO -->
        <link rel="stylesheet" href="css/style.css">

        <!-- BOOTSTRAP 5 -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- POPPER -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>

        <!-- ICONS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <!-- JAVASCRIPT -->
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

    </head>

<!-- BODY -->
<body class="h-100 w-100" style="background-color: black">

    <!-- LOADER ? -->
    <div id="loading">
        <div class="load-circle"><span class="one"></span></div>
    </div>

    <!-- NAVBAR -->
<!-- ANIMATION -->
<section class="m-0" style="z-index:1;height:140vh">
    <div class="animation h-100" style="z-index:1; position:relative;">
        <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
        
        <nav  class="navbar navbar-expand-md navbar-dark" aria-label="Fourth navbar example" style="z-index:3">
            <img src="images/logo.webp" alt="Logo TM" style="width : 180px;">

            <button class="navbar-toggler m-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <div class="navbar-toggler-icon"></div>
            </button>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav me-auto border border-dark bg-dark rounded mb-2 mb-md-0">
                    
                    <!-- ACCUEIL -->
                    <li class="nav-item mx-auto">
                        <a class="nav-link active h4 text-nowrap" aria-current="page" href="index.php">Accueil</a>
                    </li>

                    <!-- PROFIL -->
                    <li class="nav-item d-flex  dropdown mx-auto">
                        <a class="nav-link dropdown-toggle text-center h4 text-nowrap" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown04">
                        <li><a class="dropdown-item" href="competences.php">Compétences</a></li>
                        <li><a class="dropdown-item" href="projets.php">Projets</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="stages.php">Stages</a></li>
                        <li><a class="dropdown-item" href="files/CV_Marmier_Tanguy.pdf" target="_blank">Curriculum vitae</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item mx-auto">
                        <a class="nav-link h4 text-nowrap" href="services.php">Services</a>
                    </li>

                    <!-- VEILLE TECHNO -->
                    <li class="nav-item mx-auto">
                        <a class="nav-link h4 text-nowrap" href="veille_technologique.php">Veille technologique</a>
                    </li>
                    
                    <!-- CONTACT -->
                    <li class="nav-item mx-auto">
                        <a class="nav-link h4 text-nowrap" href="contact.php">Contact</a>
                    </li>
                    
                </ul>
            </div>
        </nav>

    <!-- TITLE -->
    <div class="d-flex align-items-center justify-content-center text-center text-white" style="position:absolute; top:0; left:0; right:0; bottom:0">
        <h1>Bienvenue sur mon portfolio</h1>
    </div>
        
    </div>
</section>

<!-- BODY -->
<section style="background: url(images/background-couper.png); background-size: cover; background-position: center; z-index:2; position:relative; top:-50vh">
    
    <div class="h-100" style="position: relative; top:45vh">

        <!-- LE BTS SIO -->
        <div class="row w-100 mx-auto mt-5 d-flex justify-content-center pt-5">
                <div class="col-md-10 border rounded text-white bg-dark">
                    <div class="p-3">
                        <h1>Le BTS SIO</h1>
                        <p>Le brevet de technicien supérieur Services informatiques aux organisations est un cursus d'études se déroulant sur deux ans. Il peut être préparé en formation continue, en alternance ou en formation initiale.</p>
                        <p>Dès le deuxième semestre de la première année, une option doit être choisie par l'étudiant entre :</p>
                        <li>Solutions Logicielles et Applications Métier (SLAM)</li>
                        <li>Solutions d’Infrastructure, Systèmes et Réseaux (SISR)</li>
                    </div>
                </div>
                <p class="text-center text-white mt-2">Vous pouvez cliquer <a class="btn btn-secondary"href="https://www.reseaucerta.org/sites/default/files/sio/BTS_ServicesInformatiquesOrganisations2019.pdf" target="_blank">ici</a> si vous souhaitez visualiser le référenciel du BTS SIO.</p>
        </div>

        <!-- LES OPTIONS -->
        <div class="row w-100 mx-auto mt-3 d-flex justify-content-center pb-5">
            <div class="col-md-5 border rounded text-white bg-dark mt-3 me-md-3">
                <div class="p-3">
                    <h1 class="border-bottom pb-1">L'option SLAM</h1>
                    <p>
                        L'option Solutions logicielles et applications métier (SLAM)<br>
                        Le titulaire du diplôme participe à la production et à la fourniture de services en développant,
                        en adaptant ou en maintenant des solutions applicatives.<br>
                        Il intervient plus particulièrement dans :<br>
                        <li>la définition des spécifications techniques à partir de l’expression des besoins des utilisateurs et des contraintes de l’organisation préalablement recensées.</li>
                        <li>la réalisation ou l’adaptation puis la validation de solutions applicatives à l’aide des environnements de développement retenus.</li>
                        <li>la gestion du patrimoine applicatif.</li>
                        <li>la rédaction de la documentation d’une solution applicative et la formation des utilisateurs.</li>
                        <li>la recherche de réponses adaptées à des problèmes liés à la fourniture des services informatiques.</li>
                        <li>l’accompagnement et l’assistance des utilisateurs;</li>
                        <li>le maintient de la qualité des services informatiques.</li><br>
                    </p>
                </div>
            </div>
            <div class="col-md-5 border rounded text-white bg-dark mt-3">
                <div class="p-3">
                    <h1 class="border-bottom pb-1">L'option SISR</h1>
                    <p>
                        L'option Solutions d’infrastructure, systèmes et réseaux (SISR)<br>
                        Le titulaire du diplôme participe à la production et à la fourniture de services en réalisant ou en adaptant des solutions d’infrastructure et en assurant le fonctionnement optimal des équipements.<br>
                        Il intervient plus particulièrement dans :<br>
                        <li>l’installation, l’intégration, l’administration, la sécurisation des équipements et des services informatiques.</li>
                        <li>l’exploitation, la supervision et la maintenance d'une infrastructure.</li>
                        <li>la définition et la configuration des postes clients, des serveurs et des équipements d’interconnexion, leur déploiement et leur maintenance.</li>
                        <li>la gestion des actifs de l’infrastructure.</li>
                        <li>la recherche de réponses adaptées à des besoins d’évolution de l’infrastructure ou à des problèmes liés à la mise à disposition des services informatiques.</li>
                        <li>la résolution des incidents et l’assistance aux utilisateurs.</li>
                        <li>le maintient de la qualité des services informatiques.</li>
                    </p>
                </div>
            </div>
        </div>
        
</section>

</body>

<?php
    include 'vue/footer.php'
?>