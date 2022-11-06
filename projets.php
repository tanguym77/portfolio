<?php
    include 'vue/header.php';
?>

<section class="w-auto d-flex justify-content-center" style="background: url(images/background.webp); background-size: cover; background-position: center; background-attachment: fixed; min-height : 100vh!important;">
    <div>
        <!-- TITLE -->
        <div class="row w-100 mx-auto text-white text-center pt-5">
            <h1>Mes Projets</h1>
        </div>

        <!-- CARD -->
        <div class="row w-100 mx-auto row-cols-1 row-cols-md-2 g-4 p-3">
            <div class="col">
                <!-- SERIOUS GAME -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Serious Game (projet de 1ère année)</h5>
                    </div>
                    <img src="images/projets/AF.png" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">Un projet de création d'entreprise en 1e année de bts sio.</p>
                        <p class="card-text">L'objectif étant de monter un site marchand et d'établir son business plan, j'ai pu être le pdg de cette entreprise qui a remporté le concours.</p>
                    </div>
                    <div class="card-footer">
                        <div class="dropdown text-center">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="Article1" data-bs-toggle="dropdown" aria-expanded="false">En savoir plus</button>
                            <ul class="dropdown-menu" aria-labelledby="Article1">
                                <li><a class="dropdown-item" href="files/projets/Rapport_Atelier_Francais.pdf" target="_blank">Documentation</a></li>
                                <li><a class="dropdown-item" href="https://atelier-francais.alwaysdata.net/index.php" target="_blank">Le site</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gestion des notes de frais -->
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Gestion des notes de frais de l'Institution Saint-Aspais (projet de 2e année)</h5>
                    </div>
                    <img src="images/projets/note_de_frais.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">L'objectif est de créer un site qui va permetre d'informatiser la gestion des notes de frais qui se faisait en version papier.</p>
                    </div>
                    <div class="card-footer">
                        <div class="dropdown text-center">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="Article1" data-bs-toggle="dropdown" aria-expanded="false">En savoir plus</button>
                            <ul class="dropdown-menu" aria-labelledby="Article1">
                                <li><a class="dropdown-item" href="https://github.com/Le-trio-malefique/Projet_note_de_frais" target="_blank">Le projet sur Github</a></li>
                                <li><a class="dropdown-item disabled" target="_blank">Le site</a></li>
                            </ul>
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