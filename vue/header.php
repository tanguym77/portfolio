
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
<body class="h-100 w-100">
    <!-- LOADER ? -->
    <div id="loading">
        <div class="load-circle"><span class="one"></span></div>
    </div>

    <!-- NAVBAR -->
    <section class="h-25 bg-dark">
        <nav  class="navbar navbar-expand-md bg-dark navbar-dark" aria-label="Fourth navbar example" style="z-index:3">
            <img src="images/logo.webp" alt="Logo TM" style="width : 180px;">

            <button class="navbar-toggler m-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    
                    <!-- ACCUEIL -->
                    <li class="nav-item mx-auto">
                        <a class="nav-link active h4 text-nowrap" aria-current="page" href="index.php">Accueil</a>
                    </li>

                    <!-- PROFIL -->
                    <li class="nav-item dropdown mx-auto">
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
    </section>