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
        <div class="row mx-auto row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 p-3">
            
            <!-- SERIOUS GAME -->
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Serious Game (projet de 1ère année)</h5>
                    </div>
                    <img src="images/projets/AF2.png" class="card-img-top border-bottom">
                    <div class="card-body">
                        <p class="card-text"><u>But</u> : Création d'entreprise L'Atelier Français <br> <u>Langages</u> : HTML, CSS, PHP, SQL <br> <u>Équipe</u> : 12 personnes</p>
                        <p class="card-text">L'objectif fut de monter un site marchand et d'établir son business plan.</p>
                        <!-- J'ai eu la chance d'avoir été élu PDG et a mené l'entreprise à être élue meilleure entreprise du projet. -->
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
                        <h5 class="card-title">Gestion des notes de frais de l'Institution Saint-Aspais (projet de 2ème année)</h5>
                    </div>
                    <img src="images/projets/note_de_frais.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text"><u>But</u> : Numérisation de la gestion des notes de frais <br> <u>Langages</u> : HTML, CSS, PHP, SQL <br> <u>Équipe</u> : 3 personnes</p>
                        <p class="card-text">L'objectif était de créer un site qui va permetre d'informatiser la gestion des notes de frais qui se faisait en version papier.</p>
                    </div>
                    <div class="card-footer">
                        <div class="dropdown text-center">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="Article1" data-bs-toggle="dropdown" aria-expanded="false">En savoir plus</button>
                            <ul class="dropdown-menu" aria-labelledby="Article1">
                                <li><a class="dropdown-item" href="https://github.com/Le-trio-malefique/Projet_note_de_frais" target="_blank">Le projet sur Github</a></li>
                                <li><a class="dropdown-item disabled" target="_blank">Le site (non disponible)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Application C# -->
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Application en C# (projet de 2ème année)</h5>
                    </div>
                    <img src="images/projets/csharp.png" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text"><u>But</u> : Création d'entreprise L'Atelier Français <br> <u>Langages</u> : C#, SQL <br> <u>Équipe</u> : 1 personne</p>
                        <p class="card-text">La tâche à été le développement d'une application qui permet d'importer un CSV pour le comparer à une base de données pour la mettre à jour.</p>
                    </div>
                    <div class="card-footer">
                        <div class="dropdown text-center">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="Article1" data-bs-toggle="dropdown" aria-expanded="false">En savoir plus</button>
                            <ul class="dropdown-menu" aria-labelledby="Article1">
                                <li><a class="dropdown-item disabled" href="https://github.com/Le-trio-malefique/Projet_note_de_frais" target="_blank">Le projet sur Github (non disponible)</a></li>
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