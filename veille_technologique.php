<?php
    include 'vue/header.php';
?>

<section>
    <div class="container-fluid" loading="lazy" style="background: url(images/background.webp); background-size: cover; background-position: center; background-attachment: fixed;">

        <!-- TITLE -->
        <div class="row text-white text-center pt-5">
            <h1>Ma veille technologique</h1>
        </div>

        <!-- CARD -->
        <div class="row text-white p-3">
            <div class="col-lg-6 border border-1" style="background-image: url(images/vr.gif); background-size: cover;">
            </div>
            <div class="col-lg-6 border border-1 p-3">
                <div class="row border border-1">
                    <h1> La réalité virtuelle </h1>
                </div>
                <div class="row border border-1 p-2 mt-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a mi at velit luctus laoreet et semper sapien. Mauris tempus sit amet lacus luctus ullamcorper. Aenean in bibendum felis. Aenean eu arcu eget justo tincidunt porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer scelerisque sodales rhoncus. Maecenas placerat pharetra semper. Maecenas a neque pretium, volutpat enim mollis, viverra ante. Vivamus venenatis elit accumsan sem euismod, lobortis facilisis erat fermentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut tincidunt eros at felis gravida, aliquam imperdiet erat tincidunt.

                Duis vehicula, lorem id laoreet dignissim, mi urna vehicula mi, eu sodales lectus ligula sed tellus. Maecenas nec luctus ante, vitae gravida erat. Nullam a tellus augue. In lorem augue, tincidunt quis faucibus sit amet, pharetra vel orci. Morbi velit eros, fermentum non ante sed, iaculis molestie est. Ut vel convallis velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum vitae congue lacus. Vivamus elementum ornare condimentum.
                </div>
            </div>
        </div>

        <!-- CAROUSEL -->
        <div class="row text-white p-3">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="#" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="#" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="#" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>

</section>

</body>

<?php
    include 'vue/footer.php'
?>