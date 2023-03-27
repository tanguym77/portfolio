<!DOCTYPE html>
<html class="h-100">
    <head>

        <meta name='viewport' content='width=device-width, initial-scale=1.0'/>

        <!-- DESCRIPTION -->
        <meta name="description" content="Portfolio - Marmier Tanguy / Etudiant - Auto entrepreneur">

             <!-- Title -->
            <title>Portfolio - Marmier Tanguy</title>
            <!-- ICON -->
            <link rel="icon" type="image/x-icon" href="images/favicon/favicon.ico">
        
        <!-- CSS PERSO -->
        <link rel="stylesheet" href="css/style.css">

        <!-- BOOTSTRAP 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        <!-- ANIMATIONS -->
        <link rel="stylesheet" href="css/animations.css">

        <!-- POPPER -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>

        <!-- ICONS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <!-- JAVASCRIPT -->
        <script type="text/javascript" src="js/script.js"></script>

    </head>

    <!-- PAGE -->
    <body class="h-100">

        <section class="h-100 background">
            <div class="animation">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>

            <!-- NAVBAR -->
            <section style="height:10vh; position: relative; z-index: 2;">
                <div class="row m-0 h-100 text-white d-flex align-items-center">
                    
                <nav class="navbar navbar-dark">
                    <div class="container-fluid">
                        <!-- TITRE -->
                        <a class="navbar-brand" href="#"><img src="images/logo.webp" alt="logo" style="height: 50px; width: 60px"> Tanguy Marmier</a>

                        <!-- NAV MENU PC -->
                        <div class="d-flex justify-content-evenly">
                        <a class="nav-link d-none d-md-block p-2"  href="index.php">Accueil</a>
                        <a class="nav-link d-none d-md-block p-2" href="bts-sio.php">Etudes</a>
                        <li class="nav-item dropdown list-unstyled d-none d-md-block p-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profil
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="competences.php">Certifications</a></li>
                                <li><a class="dropdown-item" href="projets.php">Projets</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="stages.php">Stages</a></li>
                                <li><a class="dropdown-item" href="files/CV_Marmier_Tanguy.pdf" target="_blank">Curriculum vitae</a></li>
                            </ul>
                        </li>
                        <a class="nav-link d-none d-md-block p-2" href="veille_technologique.php">Veille technologique</a>
                        <!-- <a class="nav-link d-none d-md-block p-2" href="services.php">Services</a> -->
                        <a class="nav-link d-none d-md-block p-2" href="contact.php">Contact</a>   
                        </div>

                        <!-- BURGER -->
                        <div class="d-md-none" style="position: relative; z-index:3">
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>

                        <!-- NAV MENU TEL / OFF CANVA -->
                        <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <!-- TITRE OFFCANVAS -->
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Marmier Tanguy</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <!-- Etude et accueil -->
                                    <div class="row m-0">
                                        <div class="col-6 text-center"><a class="btn btn-outline-primary pt-3 text-white" href="index.php" style="width: 105.6px;height: 93.6px;"><i class="bi bi-house fs-3"></i><br>Accueil</a></div>
                                        <div class="col-6 text-center"><a class="btn btn-outline-primary pt-3 text-white" href="bts-sio.php" style="width: 105.6px;height: 93.6px;"><i class="bi bi-book fs-3"></i><br>Etudes</a></div>
                                    </div>
                                    
                                    <!-- Profil -->
                                    <div class="row m-0 mt-3">
                                        <div class="text-center">
                                            <li class="nav-item dropdown">
                                                <a class="col-12 p-3 btn btn-outline-primary dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-person-bounding-box fs-3"></i>
                                                    <br>Profil
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="competences.php">Certifications</a></li>
                                                    <li><a class="dropdown-item" href="projets.php">Projets</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="stages.php">Stages</a></li>
                                                    <li><a class="dropdown-item" href="files/CV_Marmier_Tanguy.pdf" target="_blank">Curriculum vitae</a></li>
                                                </ul>
                                            </li>
                                        </div>
                                    </div>
                                    
                                    <div class="row m-0 mt-3">
                                        <div class="col-6 text-center"><a class="btn btn-outline-primary pt-3 text-white" href="services.php" style="width: 105.6px;height: 93.6px;"><i class="bi bi-braces fs-3"></i><br>Services</a></div>
                                        <div class="col-6 text-center"><a class="btn btn-outline-primary pt-3 text-white" href="veille_technologique.php" style="width: 105.6px;height: 93.6px;"><i class="bi bi-headset-vr fs-3"></i><br>Veille</a></div>
                                    </div>
                                    
                                    <div class="row m-0 mt-5">
                                        <div class="text-center">
                                            <a class="btn col-12 btn-outline-primary pt-2 text-white" href="contact.php"><i class="bi bi-envelope fs-3"></i><br>Contact</a>
                                        </div>
                                    </div>
                                  

                                    <div class="row m-0 fixed-bottom">
                                        <div class="col-12 text-end">© 2023 Copyright</div>
                                    </div>

                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

                </div>
            </section>
            

            <!-- Container -->
            <section class="text-white" style="height:90vh; position: relative; z-index: 1;">
                <div class="h-100 row text-white m-0 d-flex justify-content-around">
                    <div class="col-10 col-md-4 my-auto text-center upDown">
                        <a class="text-white text-decoration-none upDown fs-2">B</a>
                        <a class="text-white text-decoration-none upDown fs-3">I</a>
                        <a class="text-white text-decoration-none upDown fs-3">E</a>
                        <a class="text-white text-decoration-none upDown fs-3">N</a>
                        <a class="text-white text-decoration-none upDown fs-3">V</a>
                        <a class="text-white text-decoration-none upDown fs-3">E</a>
                        <a class="text-white text-decoration-none upDown fs-3">N</a>
                        <a class="text-white text-decoration-none upDown fs-3">U</a>
                        <a class="text-white text-decoration-none upDown fs-3">E</a>
                        <br><br>
                        <a class="text-white text-decoration-none upDown fs-3">S</a>
                        <a class="text-white text-decoration-none upDown fs-3">U</a>
                        <a class="text-white text-decoration-none upDown fs-3">R</a>
                        &nbsp
                        <a class="text-white text-decoration-none upDown fs-3">M</a>
                        <a class="text-white text-decoration-none upDown fs-3">O</a>
                        <a class="text-white text-decoration-none upDown fs-3">N</a>
                        <br><br>
                        <a class="text-white text-decoration-none upDown fs-3">P</a>
                        <a class="text-white text-decoration-none upDown fs-3">O</a>
                        <a class="text-white text-decoration-none upDown fs-3">R</a>
                        <a class="text-white text-decoration-none upDown fs-3">T</a>
                        <a class="text-white text-decoration-none upDown fs-3">F</a>
                        <a class="text-white text-decoration-none upDown fs-3">O</a>
                        <a class="text-white text-decoration-none upDown fs-3">L</a>
                        <a class="text-white text-decoration-none upDown fs-3">I</a>
                        <a class="text-white text-decoration-none upDown fs-3">O</a>
                    </div>
                    <!-- PHOTO / RECHERCHE ALTERNANCE -->
                    <div class="my-auto col-5 d-none d-md-block text-center">
                        <p class="upDown2 border-top border-bottom p-2">Recherche une entreprise pour faire une alternance en tant que développeur web à partir de Septembre 2023</p>
                        <!-- <img class="upDown rounded-5 p-2 border" style="height: 184px; width: 252px" src="" alt="Photo"> -->
                    </div>
                </div>
            </section>
        
        </section>    
    </body>
    
</html>