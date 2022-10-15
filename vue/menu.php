
<nav class="navbar navbar-expand-lg navbar-light bg-white mb-3 shadow">
    <a class="navbar-brand" href="#"><h5><img class="img-fluid" src="vue/images/saintAspais.webp"></img></h5></a>
    <button class="navbar-toggler" style="border-color: #1A4087;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="color: #1A4087;"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <?php 
                if(isset($_SESSION['login'])){
            ?>
            <li class="nav-item ml-auto active">
                <a class="nav-link p-3" style="color: #1A4087;" href="#"><h3>Menu</h3><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ml-auto">
                <a class="nav-link p-3" style="color: #1A4087;" href="#"><h3>Profil</h3></a>
            </li>
            <li class="nav-item ml-auto">
                <a class="nav-link p-3" style="color: #1A4087;" href="#"><h3>Note de frais</h3></a>
            </li>
            <?php
                }
            ?>
            <li class="nav-item mr-0 ml-auto"> 
                <div class="dropdown">
                    <a class="col d-flex justify-content-end" style="margin-right: 0px;"role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <i style="font-size : 3em; color: #1A4087;" class="bi bi-person-circle"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <?php
                            if(isset($_SESSION['login'])){
                        ?>
                            <li><a class="dropdown-item" href="index.php?ctl=utilisateur&action=formDeconnect">Deconnexion</a></li>
                        <?php
                            }
                            else{
                        ?>
                            <li><a class="dropdown-item" href="index.php?ctl=utilisateur&action=formConnect">Connexion</a></li>
                        <?php
                            }
                        ?>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="index.php?ctl=utilisateur&action=formNew">Inscription</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>