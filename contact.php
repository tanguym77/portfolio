<?php
    include 'vue/header.php';
?>

<section>
    <div class="container-fluid p-5" style="background: url(images/background.webp); background-size: cover;">
    <div class="row justify-content-center">
        <div class="col-xl-6">
        <div class="card border-0 rounded-3 shadow-lg overflow-hidden bg-dark text-dark">
            <div class="card-body p-0">
                <div class="col-sm-12 p-4">
                <div class="text-center text-white">
                    <div class="h3 fw-light">Formulaire de contact</div>
                    <p class="mb-4 text-muted">Merci de remplir correctement les champs</p>
                </div>

                <form method="post" action="mail.php" >

                    <!-- NOM -->
                    <div class="form-floating mb-3">
                        <input name="name" class="form-control" id="name" type="text" placeholder="Name" required />
                        <label for="name">Nom Prénom</label>
                    </div>

                    <!-- EMAIL -->
                    <div class="form-floating mb-3">
                    <input name="email" class="form-control" id="emailAddress" type="email" placeholder="Email Address" required />
                    <label for="emailAddress">Adresse Email</label>
                    </div>

                    <!-- Téléphone -->
                    <div class="form-floating mb-3">
                    <input name="phone" class="form-control" id="phone" type="tel" placeholder="Téléphone" />
                    <label for="phone">Téléphone <i>(facultatif)</i></label>
                    </div>

                    <!-- MESSAGE -->
                    <div class="form-floating mb-3">
                    <textarea name="message" class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" required></textarea>
                    <label for="message">Message</label>
                    </div>

                    <!-- MESSAGE ENVOYE -->
                    <?php
                        if(isset($_GET['success'])){
                            echo "
                            <div>
                                <div class='text-center mb-3'>
                                    <div class='fw-bolder bg-success rounded p-1 text-white'>Merci ! Le message à bien été envoyé.</div>
                                </div>
                            </div>
                            ";
                        }
                    ?>

                    <!-- Submit button -->
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                    </div>

                    <br><br><br><br>
                </form>
                <!-- End of contact form -->

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