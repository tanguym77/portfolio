<!DOCTYPE html>
<html class="h-100">
    <head>

        <meta name='viewport' content='width=device-width, initial-scale=1.0'/>

        <!-- DESCRIPTION SEO-->
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


        <!-- POPPER -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>

        <!-- ICONS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <!-- JAVASCRIPT -->
        <script type="text/javascript" src="js/script.js"></script>

    </head>

    <!-- PAGE -->
    <body>
            <!-- NAVBAR -->
            <section class="bg-dark sticky-top" style="height:10vh;">
                <div class="row m-0 h-100 text-white d-flex align-items-center" style="background-color: rgba(0, 0, 0, 0.2);">
                    
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
                        <a class="nav-link d-none d-md-block p-2" href="contact.php">Contact</a>   
                        </div>

                        <!-- BURGER -->
                        <div class="d-md-none">
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
                                        <div class="col-12 text-center"><a class="btn btn-outline-primary pt-3 text-white" href="veille_technologique.php" style="width: 105.6px;height: 93.6px;"><i class="bi bi-headset-vr fs-3"></i><br>Veille</a></div>
                                    </div>
                                    
                                    <div class="row m-0 mt-3">
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