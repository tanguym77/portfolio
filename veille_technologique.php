<?php
    include 'vue/header.php';
?>

<section class="w-auto d-flex justify-content-center" style="background: url(images/background.webp); background-size: cover; background-position: center; background-attachment: fixed;">
    <div>
        <!-- TITLE -->
        <div class="row text-white text-center pt-5 m-0">
            <h1>Ma veille technologique</h1>
        </div>

        <!-- DEF VEILLE TECHNO -->
        <div class="row text-white justify-content-center p-3 m-0">
            <div class="col-11 border rounded bg-dark p-3">
                <div class="col-12 pb-2">
                    <h3>Mais c'est quoi une veille technologique ?</h3>
                </div>
                <div class="col-12 pt-3 border-top">
                    <p>La veille technologique consiste à s'informer de façon régulière sur un sujet pour être au courant de ses inovations et actualités.</p>
                </div>
                <div class="row border-top p-3">
                    <div class="col-6">
                        Quels sont les outils de la veille technologique ?
                    </div>
                    <div class="col-6">
                        Les outils pouvant être utilisé :
                        <p><img src="images/Feedly-logo.png" class="rounded-circle" style="max-width: 50px; max-height: 50px;"> Feedly</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CARD -->
        <div class="row text-white p-3 m-0">
            <div class="col-md-8 border rounded" style="background-image: url(images/vr.gif); background-size: cover; background-position: center; min-height : 50vh!important;">
            </div>
            <div class="col-md-4 bg-dark p-3 border rounded">
                <div class="col-12">
                    <h3> La réalité virtuelle </h3>
                </div>
                <div class="col-12 p-2 mt-2 border-top">
                    <p>Mon sujet de veille technologique est la réalité virtuelle</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, cupiditate quo ea similique eaque exercitationem harum totam, ratione ipsa aut nam, maiores est architecto? Sequi distinctio doloremque repellendus aut nihil!</p>
                </div>
            </div>
        </div>

        <!-- CAROUSEL -->
        <div class="row m-md-5 m-0 justify-content-center">
            <div class="col-10">
                <div id="carousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner">
                        <!-- ARTICLE 1 -->
                        <div class="carousel-item active" data-bs-interval="5000">
                            <img src="images/vr.webp" class="d-block w-100" alt="article1">
                            <div class="carousel-caption d-none d-md-block text-white">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <!-- ARTICLE 2 -->
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="images/vr.webp" class="d-block w-100" alt="article2">
                            <div class="carousel-caption d-none d-md-block text-white">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <!-- ARTICLE 3 -->
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="images/vr.webp" class="d-block w-100" alt="article3">
                            <div class="carousel-caption d-none d-md-block text-white">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
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