<?php
    include 'vue/header.php';
?>

<section>
    <div class="container-fluid p-md-5 p-2" style="background: url(images/background.webp); background-size: cover;">
    <div class="row justify-content-center">
        <div class="col-xl-6">
        <div class="card border-0 rounded-3 shadow-lg overflow-hidden bg-dark text-dark">
            <div class="card-body p-0">
                <div class="col-sm-12 p-4">
                <div class="text-center text-white">
                    <div class="h3 fw-light">Formulaire de contact</div>
                    <p class="mb-4 text-muted">Merci de remplir correctement les champs</p>
                </div>

                <form id="Form" method="post" action="mail.php" >
                    
                    <div class="row">
                        <div class="col-6">
                            <!-- PRENOM -->
                            <div class="form-floating mb-3">
                                <input name="prenom" class="form-control" id="prenom" type="text" placeholder=" " required />
                                <label for="prenom">Prénom</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <!-- NOM -->
                            <div class="form-floating mb-3">
                                <input name="nom" class="form-control" id="nom" type="text" placeholder=" " required />
                                <label for="nom">Nom</label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- EMAIL -->
                    <div class="form-floating mb-3">
                        <input name="email" class="form-control" id="email" type="email" placeholder=" " required />
                        <label for="email">Adresse Email</label>
                    </div>

                    <!-- Téléphone -->
                    <div class="form-floating mb-3">
                        <input name="phone" class="form-control" id="phone" type="tel" placeholder=" " />
                        <label for="phone">Téléphone <i>(facultatif)</i></label>
                    </div>

                    <!-- MESSAGE -->
                    <div class="form-floating mb-3">
                        <textarea name="message" class="form-control" id="message" type="text" placeholder=" " style="height: 10rem;" required></textarea>
                        <label for="message">Message</label>
                    </div>

                    <!-- Hidden -->
                    <input type="text" class="d-none" id="text" placeholder=" " name="text">
                    <label for="text"></label>

                    <!-- MESSAGE ENVOYE -->
                    <?php
                        if(isset($_GET['success']) && $_GET['success']==1){
                            echo "
                            <div>
                                <div class='text-center mb-3'>
                                    <div class='fw-bolder bg-success rounded p-1 text-white'>Merci ! Le message à bien été envoyé.</div>
                                </div>
                            </div>
                            ";
                        }
                        if (isset($_GET['success']) && $_GET['success']==0) {
                            echo "
                            <div>
                                <div class='text-center mb-3'>
                                    <div class='fw-bolder bg-danger rounded p-1 text-white'>Zut ! Le message n'a pas été envoyé.</div>
                                </div>
                            </div>
                            ";
                        }
                    ?>

                    <!-- Submit button -->
                    <div class="d-grid">
                        <button name="submit" class="g-recaptcha btn btn-primary btn-lg" data-sitekey="6LfSAvklAAAAABmCMT3LIBfO-0PbCVr-TMHtUgHu" data-size="invisible" data-callback='onSubmit' data-action='submit' type="submit">Envoyer</button>
                    </div>

                    
                </form>

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