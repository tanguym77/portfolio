<?php
    include 'vue/header.php';
?>

<section class="w-auto d-flex justify-content-center pb-5" style="background: url(images/background.webp); background-size: cover; background-position: center; background-attachment: fixed;">
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
                    <p>La veille technologique, c'est s'informer régulièrement sur un sujet dans le domaine de l'informatique pour être au courant de ses inovations et actualités. <br>
                        Étant passionné par l'informatique, il est primordial de se tenir à jour des dernières nouveautés pour faire face aux évolutions rapides.</p>
                </div>
                <div class="row border-top p-3">
                    <div class="col-md-5 rounded d-flex justify-content-center align-items-center text-center bg-secondary">
                        <p class="border rounded p-1 mt-3"> Quels sont les outils de la veille technologique ? </p>
                    </div>

                    <div class="col-md-7 pt-2">
                        <div class="row">
                            <p> Différents outils peuvent être utilisés pour faire une veille technologique. Tout d'abord, j'ai choisi l'outil Feedly, un aggrégateur de flux RSS en ligne qui me permet de me tenir à jour en m'abonnant à des thèmes et journaux. </p>
                            <p><img src="images/veille/Feedly-logo.png" class="rounded-circle" style="max-width: 50px; max-height: 50px;"> <a class="text-white" href="https://feedly.com" target="_blank">Feedly</a></p>
                        </div>
                        <div class="row">
                            <p> Ensuite, je me suis aussi abonné à des créateurs de contenu sur youtube comme <a class="text-white" href="https://www.youtube.com/@ThrillSeekerVR" target="_blank">ThrillSeeker</a> ou <a class="text-white" href="https://www.youtube.com/@DailyVR" target="_blank">DailyVR</a> qui sont spécialisé sur ce sujet et traitent des dernières nouveautés du marché.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CARD -->
        <div class="row text-white p-3 m-0">
            <div class="col-md-7 d-none d-md-block border rounded" style="background-image: url(images/veille/vr.gif); background-size: cover; background-position: center; min-height : 50vh!important;">
            </div>
            <div class="col-md-5 bg-dark p-3 border rounded">
                <div class="col-12 border-bottom">
                    <h3> La réalité virtuelle </h3>
                </div>
                <div class="col-12 p-2 mt-4">
                    <p>Mon sujet de veille technologique est la réalité virtuelle.</p>
                    <p>La réalité virtuelle est une technologie qui connait un très fort essor au cours de ces dernières années. Cela est dû aux
                        nouvelles découvertes technologiques et à l'arrivée du metaverse de Meta (anciennement Facebook) en octobre 2021.
                    </p>
                    <p>Afin de comprendre au mieux cette technologie j'ai moi même décidé de me procurer un Oculus Quest 2 pour tester par moi même les dernières nouveautés (comme le suivi des mains ou la réalité mixte).
                       Au cours de mon expérience j'ai découvert que la réalité virtuelle offrait de grandes possibilités autant pour les entreprises que pour les jeux vidéo.
                    </p>
                    <p>
                       Mais que cette technologie a encore beaucoup de chemin à parcourir, en effet il est possible pour certaines personnes (moi y compris) de ressentir le "Motion Sickness" une sensation de nausée qui peut survenir lorsqu'on se déplace en vr.
                    </p>
                </div>
            </div>
        </div>

        <!-- LES ARTICLES -->
        <div class="row m-0 bg-dark text-white pb-5">
            <div class="text-center p-2 border mb-5">
                <h1>Les dernières nouveautés</h1>
            </div>

            <!-- ARTICLE 1 -->
            <div class="mt-5 mb-5">
                <!-- Titre -->
                <h3 class="text-center">PS VR 2</h3>
                <!-- Sous titre -->
                <h5 class="text-center"><i>Le PS VR 2 dépasserait les ventes de son prédécesseur ?</i></h5>
                <div class="row m-0 justify-content-center">
                    <!-- Image -->
                    <div class="col-5 d-none d-md-block p-0 m-1 border">
                        <img src="images/veille/ps-vr2.png" alt="" class="img-fluid">
                    </div>
                    <!-- TEXTE -->
                    <div class="col-10 col-md-5 p-2 m-1 border bg-secondary">
                        <div class="col-12">
                            <p class="mt-4">
                                Le nouveau casque arrivé récemment sur le marché pour la somme de 600€ serait en bonne voie pour dépasser son prédecesseur vendu à 5 millions d'unités de 2016 à 2019. <br><br>
                                Cependant, seul Sony possède les chiffres des ventes et le média Bloomberg rapportait au contraire un faible nombre de précommande.
                            </p>
                        </div>
                        <!-- Lien -->
                        <div class="col-12 text-center"> <a href="https://www.realite-virtuelle.com/psvr-2-surpasser-psvr-termes-vente/" class="btn btn-primary" target="_blank">Voir l'article</a> </div> 
                    </div>
                </div>    
            </div>
            
            <!-- ARTICLE 2 -->
            <div class="mt-5 mb-5">
                <!-- Titre -->
                <h3 class="text-center">Oculus Quest Pro</h3>
                <!-- Sous titre -->
                <h5 class="text-center"><i>Meta annonce une baisse de prix sur les Quest Pro</i></h5>
                <div class="row m-0 justify-content-center">
                    <!-- TEXTE -->
                    <div class="col-10 col-md-5 p-2 m-1 border bg-secondary">
                        <div class="col-12">
                            <p class="mt-4">
                                Initialement lancé à 1800€, Le casque de Meta a maintenant subit une baisse de 33% en l'espace de 4 mois (le faisant maintenant descendre à 1200€). <br><br>
                                Même si l'on parle souvent d'inflation cela montrerait que Meta ait été un peu gourmande sur un produit qui ne lui revient pas si cher à produire. Cela lui permet également de rivaliser avec le nouveau PS VR 2.
                            </p>
                        </div>
                        <!-- Lien -->
                        <div class="col-12 text-center"> <a href="https://www.clubic.com/casque-vr/actualite-459624-aveu-d-echec-ou-de-gourmandise-la-tres-grosse-baisse-de-prix-du-casque-vr-meta-quest-pro.html" class="btn btn-primary" target="_blank">Voir l'article</a> </div> 
                    </div>
                    <!-- Image -->
                    <div class="col-5 d-none d-md-block p-0 m-1 border">
                    <img src="images/veille/oculus-pro.jpg" alt="" class="img-fluid">
                    </div>
                </div>    
            </div>

            <!-- ARTICLE 3 -->
            <div class="mt-5 mb-5">
                <!-- Titre -->
                <h3 class="text-center">Pico 4</h3>
                <!-- Sous titre -->
                <h5 class="text-center"><i>Un casque qui en met plein la vue</i></h5>
                <div class="row m-0 justify-content-center">
                    <!-- Image -->
                    <div class="col-5 d-none d-md-block p-0 m-1 border">
                    <img src="images/veille/pico-4.jpeg" alt="" class="img-fluid">
                    </div>
                    <!-- TEXTE -->
                    <div class="col-10 col-md-5 p-2 m-1 border bg-secondary">
                        <div class="col-12">
                            <p class="mt-4">
                                Pour se distinguer des grands groupes comme Sony et Meta, Pico se distingue en proposant un casque lancé à 429€. Il est autonome, sans fils et est assez flexibles dans son utilisation avec définition plus nette. <br> <br>
                                Cependant, l'entreprise procède à une importante vague de licenciements justifié par un ralentissement économique du secteur.
                            </p>
                        </div>
                        <!-- Lien -->
                        <div class="col-12 text-center"> <a href="https://siecledigital.fr/2023/02/21/pico-vague-licenciements/" class="btn btn-primary" target="_blank">Voir l'article</a> </div> 
                    </div>
                </div>    
            </div>
            
            <!-- ARTICLE 4 -->
            <div class="mt-5 mb-5">
                <!-- Titre -->
                <h3 class="text-center">Apple VR</h3>
                <!-- Sous titre -->
                <h5 class="text-center"><i>Le casque d'Apple serait enfin dévoilé en Juin</i></h5>
                <div class="row m-0 justify-content-center">
                    <!-- TEXTE -->
                    <div class="col-10 col-md-5 p-2 m-1 border bg-secondary">
                        <div class="col-12">
                            <p class="mt-4">
                                Après son annonce en 2015, le casque d'Apple n'a cessé d'être repoussé à mainte reprise. Mais des sources anonymes ont annoncé qu'il serait finalement dévoilé lors de la Worldwide Conference Developpeur en juin. <br> <br>
                                Sa sortie serait alors toujours prévu pour cette année au prix de 3000€, il comportera des écrans et des caméras pour un suivi précis sans manette.
                            </p>
                        </div>
                        <!-- Lien -->
                        <div class="col-12 text-center"> <a href="https://www.tomsguide.fr/le-casque-vr-dapple-pourrait-finalement-etre-devoile-en-juin-lors-de-la-wdc/" class="btn btn-primary" target="_blank">Voir l'article</a> </div> 
                    </div>
                    <!-- Image -->
                    <div class="col-5 d-none d-md-block p-0 m-1 border">
                    <img src="images/veille/apple-vr.webp" alt="" class="img-fluid">
                    </div>
                </div>    
            </div>

            <!-- ARTICLE 5 -->
            <div class="mt-5 mb-5">
                <!-- Titre -->
                <h3 class="text-center">Skinetic</h3>
                <!-- Sous titre -->
                <h5 class="text-center"><i>La veste haptique Actronika</i></h5>
                <div class="row m-0 justify-content-center">
                    <!-- Image -->
                    <div class="col-5 d-none d-md-block p-0 m-1 border">
                    <img src="images/veille/skinetic.png" alt="" class="img-fluid">
                    </div>
                    <!-- TEXTE -->
                    <div class="col-10 col-md-5 p-2 m-1 border bg-secondary">
                        <div class="col-12">
                            <p class="mt-4">
                                La start-up française Actronika travaille sur une veste haptique appelé Skinetic. Elle utilise des technologies brevetée qui permettent d'améliorer l'immersion des utilisateurs dans leurs expériences. <br> <br>
                                Cela va permettre aux professionnels et aux particuliers de pratiquer ou de vivre des expériences dans un environnement controlé.  
                            </p>
                        </div>
                        <!-- Lien -->
                        <div class="col-12 text-center"> <a href="https://www.jaimelesstartups.fr/actronika-veste-haptique-realite-virtuelle/" class="btn btn-primary" target="_blank">Voir l'article</a> </div> 
                    </div>
                </div>    
            </div>

            <!-- ARTICLE 4 -->
            <div class="mt-5 mb-5">
                <!-- Titre -->
                <h3 class="text-center">KAT walk C2</h3>
                <!-- Sous titre -->
                <h5 class="text-center"><i>Un tapis pour améliorer ses déplacements en vr</i></h5>
                <div class="row m-0 justify-content-center">
                    <!-- TEXTE -->
                    <div class="col-10 col-md-5 p-2 m-1 border bg-secondary">
                        <div class="col-12">
                            <p class="mt-4">
                                Après un Kickstarter qui a rassemblé plus de 2 Millions de dollars, Katvr s'est lancé dans la conception d'un tapis qui combiné avec des chaussures spéciales, permet de se déplacer en réalité virtuelle. <br> <br>
                                Cela pourrait faciliter l'accessibilité à la vr qui peut parfois nous donner la nausé quand on se déplace.
                            </p>
                        </div>
                        <!-- Lien -->
                        <div class="col-12 text-center"> <a href="https://casques-vr.com/kat-walk-c2-nouvelle-version-pour-le-tapis-vr-avec-un-prix-divise-par-deux-20919/" class="btn btn-primary" target="_blank">Voir l'article</a> </div> 
                    </div>
                    <!-- Image -->
                    <div class="col-5 d-none d-md-block p-0 m-1 border">
                    <img src="images/veille/katwalkc.jpg" alt="" class="img-fluid">
                    </div>
                </div>    
            </div>

        </div>
</section>
</body>

<?php
    include 'vue/footer.php'
?>