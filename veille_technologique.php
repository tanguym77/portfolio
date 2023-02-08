<?php
    include 'vue/header.php';
?>

<section class="w-auto d-flex justify-content-center" style="background: url(images/background.webp); background-size: cover; background-position: center; background-attachment: fixed;">
    <div>
        <!-- TITLE -->
        <div class="row w-100 mx-auto text-white text-center pt-5 m-0">
            <h1>Ma veille technologique</h1>
        </div>

        <!-- DEF VEILLE TECHNO -->
        <div class="row w-100 mx-auto text-white justify-content-center p-0 m-0">
            <div class="col-md-11 border rounded bg-dark p-3">
                <div class="col-12 pb-2">
                    <h3>Mais c'est quoi une veille technologique ?</h3>
                </div>
                <div class="col-12 pt-3 border-top">
                    <p>La veille technologique consiste à s'informer de façon régulière sur un sujet pour être au courant de ses inovations et actualités.</p>
                </div>
                <div class="row border-top p-3">
                    <div class="col-5 border-end d-flex justify-content-center align-items-center">
                        <p> Quels sont les outils de la veille technologique ? </p>
                    </div>
                    <div class="col-7">
                        <p> Différents outils peuvent être utilisés pour faire une veille technologique. J'ai choisi l'outil Feedly, un aggrégateur de flux RSS en ligne qui me permet de me tenir à jour en m'abonnant à des thèmes et journaux. </p>
                        <p><img src="images/Feedly-logo.png" class="rounded-circle" style="max-width: 50px; max-height: 50px;"> <a class="text-white" href="https://feedly.com" target="_blank">Feedly</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CARD -->
        <div class="row text-white p-3 m-0">
            <div class="col-md-7 d-none d-md-block border rounded" style="background-image: url(images/vr.gif); background-size: cover; background-position: center; min-height : 50vh!important;">
            </div>
            <div class="col-md-5 bg-dark p-3 border rounded">
                <div class="col-12">
                    <h3> La réalité virtuelle </h3>
                </div>
                <div class="col-12 p-2 mt-2 border-top">
                    <p>Mon sujet de veille technologique est la réalité virtuelle.</p>
                    <p>La réalité virtuelle est une technologie qui connait un très fort essor au cours de ces dernières années. Cela est dû aux
                        nouvelles découvertes technologiques et à l'arrivée du metaverse de Meta (Facebook).
                    </p>
                    <p>Afin de comprendre au mieux cette technologie j'ai moi même décidé de me procurer un Oculus Quest 2 pour tester les dernières nouveautés (comme le suivi des mains ou la réalité mixte).
                       Au cours de mon expérience j'ai découvert que la réalité virtuelle offrait de grandes possibilités autant pour les entreprises que pour les jeux vidéo.
                    </p>
                    <p>
                       Mais que cette technologie a encore beaucoup de chemin à parcourir, en effet il est possible pour certaines personnes (moi y compris) de ressentir le "Motion Sickness" une sensation de nausée qui peut survenir lorsqu'on se déplace en vr.
                    </p>
                </div>
            </div>
        </div>

        <!-- CAROUSEL -->
        <div class="row m-md-5 m-0 justify-content-center border-5">
            <div class="col-md-6">
                <div id="carousel" class="carousel carousel-dark slide border rounded" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner">
                        <!-- ARTICLE 1 -->
                        <div class="carousel-item active" data-bs-interval="5000">
                            <img src="images/articles/meta-quest-pro.webp" class="d-block w-100" alt="article1">
                            <div class="carousel-caption d-none d-md-block text-white" style="background-color: rgba(44, 44, 44, 0.5);">
                                <h5>Nouveauté - Meta Quest Pro</h5>
                                <p>Le casque VR premium de Meta a beaucoup à offrir.</p>
                                <a class="btn btn-light" href="https://www.blog-nouvelles-technologies.fr/244460/le-meta-quest-pro-est-disponible-des-aujourdhui-les-premiers-tests-aussi/" target="_blank">En savoir plus</a>
                            </div>
                        </div>
                        <!-- ARTICLE 2 -->
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="images/articles/Pico-4.jpg" class="d-block w-100" alt="article2">
                            <div class="carousel-caption d-none d-md-block text-white" style="background-color: rgba(44, 44, 44, 0.5);">
                                <h5>Annonce du casque VR Pico 4 Entreprise</h5>
                                <p>L'appareil axé sur les affaires comprend un suivi des yeux et du visage ainsi qu'une technologie de transmission des couleurs.</p>
                                <a class="btn btn-light" href="https://www.realite-virtuelle.com/pico-4-enterprise/" target="_blank">En savoir plus</a>
                            </div>
                        </div>
                        <!-- ARTICLE 3 -->
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="images/articles/HaptXG1.png" class="d-block w-100" alt="article3">
                            <div class="carousel-caption d-none d-md-block text-white" style="background-color: rgba(44, 44, 44, 0.5);">
                                <h5>Les gants HaptX G1 sont désormais disponibles en pré-commande</h5>
                                <p>Le SDK HaptX permet à tout développeur d'apporter facilement un sens réaliste du toucher à ses jeux et applications VR.</p>
                                <a class="btn btn-light" href="https://vrscout.com/news/haptx-gloves-g1-now-available-for-pre-order/" target="_blank">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev text-white" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>
        
</section>
</body>

<?php
    include 'vue/footer.php'
?>