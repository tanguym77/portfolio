
<!DOCTYPE html>
<html class="h-100">
    <head>

        <meta name='viewport' content='width=device-width, initial-scale=1.0'/>

             <!-- Title -->
            <title>Portfolio - Marmier Tanguy</title>
        
        <!-- BOOTSTRAP 5 -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- ICONS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <!-- JAVASCRIPT -->
        <script src="js/bootstrap.js"></script>
        <script src="js/script.js"></script>

        <!-- FONTAWESOME -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">

        <!-- CSS PERSO -->
        <script src="css/style.css"></script>

    </head>

<!-- BODY -->
<body class="h-100">
    <!-- LOADER ? -->
    <div id="loading">
        <div class="load-circle"><span class="one"></span></div>
    </div>
    <!-- NAVBAR -->
    <section>
        <nav  class="navbar navbar-expand-md bg-dark navbar-dark" aria-label="Fourth navbar example">
            <img src="images/logo.webp" alt="Logo TM" style="width : 180px;">

            <button class="navbar-toggler m-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">

                    <li class="nav-item mx-auto">
                        <a class="nav-link active h2" aria-current="page" href="index.php?page=Accueil">Accueil</a>
                    </li>

                    <li class="nav-item dropdown mx-auto">
                        <a class="nav-link dropdown-toggle text-center h2" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown04">
                        <li><a class="dropdown-item" href="competences.php?page=Compétences">Compétences</a></li>
                        <li><a class="dropdown-item" href="projets.php?page=Projets">Projets</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="files/CV_Tanguy_MARMIER.pdf" target="_blank">Curriculum vitae</a></li>
                        <li><a class="dropdown-item" href="files/Lettre_motivation_Tanguy_MARMIER.pdf" target="_blank">Lettre de motivation</a></li>
                        </ul>
                    </li>

                    <li class="nav-item mx-auto">
                        <a class="nav-link h2" href="veille_technologique.php?page=Veille technologique">Veille technologique</a>
                    </li>
                    
                    <li class="nav-item mx-auto">
                        <a class="nav-link h2" href="contact.php?page=Contact">Contact</a>
                    </li>
                    
                </ul>
            </div>
        </nav>
    </section>


<?php //if($_GET['page'] == "Accueil"){echo "active";}else{echo " ";}?>