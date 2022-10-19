<?php
    include 'vue/header.php';
?>

<section>
    <div class="container-fluid" style="background: url(images/background.webp); background-size: cover; background-position: center; background-attachment: fixed;">

            <!-- TITLE ET PRESENTATION-->
            <div class="row text-white text-center pt-5">
                <h1>Bienvenue sur mon portfolio !</h1>
            </div>
            
            <div class="row text-white p-5">
                <div class="border border-5 border-dark bg-dark rounded pt-1">
                    <div class="p-sm-2 text-center">
                        <p>Bonjour et bienvenue sur mon Portfolio ! <br>
                        Je m'appelle Tanguy Marmier, j'ai 19 ans, et atuellement je suis étudiant en 2ère année de BTS Services Informatiques aux Organisation à l'institution St-Aspais de Melun. <br>
                        Je suis passionné d'informatique et je souhaite déveloper mes compétences en developpement front et back.</p>  
                    </div>
                      
                </div>                
            </div>

            <!-- LE BTS SIO -->
            <div class="row text-white p-5">
                <div class="border border-5 border-dark bg-dark rounded pt-1">
                    <div class="p-3">
                        <h1>Le BTS SIO</h1>
                        <p>Le brevet de technicien supérieur Services informatiques aux organisations est un cursus d'études se déroulant sur deux ans dans des lycées français, des écoles privées ou dans des centres de formation professionnelle. Il peut être préparé en formation continue, en alternance ou en formation initiale.</p>
                        <p>Dès le deuxième semestre de la première année, une option doit être choisie par l'étudiant entre :</p>
                        <li>Solutions Logicielles et Applications Métier (SLAM)</li>
                        <li>Solutions d’Infrastructure, Systèmes et Réseaux (SISR)</li>
                    </div>
                    
                </div>
                <p class="text-center">Vous pouvez cliquer <a href="https://www.reseaucerta.org/sites/default/files/sio/BTS_ServicesInformatiquesOrganisations2019.pdf" target="_blank">ici</a> si vous souhaitez visualiser le référenciel du BTS SIO.</p>
            </div>

            <!-- LE BTS SIO -->
            <div class="row text-white p-5 d-flex justify-content-around">
                <!-- OPTION SLAM -->
                <div class="col-lg-5 mt-2 border border-5 border-dark bg-dark rounded pt-1">
                    <div class="p-3">
                        <h1>L'option SLAM</h1>
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
                <!-- OPTION SISR -->
                <div class="col-lg-5 mt-2 border border-5 border-dark bg-dark rounded pt-1">
                    <div class="p-3">
                        <h1>L'option SISR</h1>
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


    </div>
</section>

</body>

<?php
    include 'vue/footer.php'
?>