<div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Notre bureau</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Douala, Cameroun, Afrique</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+237 683 447 200</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i><a href="mailto:Contact@QMSconsulting.com">Contact@QMSconsulting.com</a>
                </p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.twitter.com/"
                       target="blank"><i
                                class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.facebook.com/"
                       target="blank"><i
                                class="fab fa-facebook-f"></i></a>

                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.linkedin.com"
                       target="blank"><i
                                class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Liens utiles</h4>
                <a class="btn btn-link" href="<?= URL ?>about">À propos de nous</a>
                <a class="btn btn-link" href="<?= URL ?>contact">Contact</a>
                <a class="btn btn-link" href="<?= URL ?>service">Nos services</a>
                <a class="btn btn-link" href="<?= URL ?>">Conditions générales</a>
            </div>

            <!--           Début New letter-->
            <div class="col-lg-3 col-md-6">

                <h4 class="text-white mb-4">Souscrire à la newsletter</h4>
                <p>Souscrire à la newletter</p>
                <!-- Message -->
                <?php if (isset($_SESSION['response1'])) { ?>
                    <div class="alert text-center <?= $_SESSION['response1']['status']; ?>" role="alert">
                        <?= $_SESSION['response1']['message']; ?>
                    </div>

                    <?php unset($_SESSION['response']);
                } ?>
                <form id="newsletterForm" class="position-relative w-100" method="post">
                    <input type="email" class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5" id="email"
                           name="emailNew" placeholder="Adresse mail" required>
                    <button type="submit"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2" name="newsletterForm">
                        S'abonner
                    </button>
                </form>

            </div>
            <!--            Fin New letter-->
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 copyright" id="copyright">
                <script>
                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                </script> &copy; <a class="border-bottom" href="<?= URL ?>">QMS</a>, Tous droits réservés.
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script>

    $(function () {
        $("form[name='contactForm']").validate({
            // Define validation rules
            rules: {
                name: "required",
                email: "required",
                phone: "required",
                subject: "required",
                message: "required",
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    minlength: 9,
                    maxlength: 9,
                    number: true
                },
                subject: {
                    required: true
                },
                message: {
                    required: true
                }
            },
            // Specify validation error messages
            messages: {
                name: "Veuillez indiquer votre nom.",
                email: {
                    required: "Adresse mail vide",
                    minlength: "Adresse mail nom valide"
                },
                phone: {
                    required: "Numéro de téléphone vide",
                    minlength: "Doit comporter au moins 9 caractères",
                    maxlength: "Ne doit pas comporter plus de 9 caractères."
                },
                subject: "Veuillez saisir le sujet",
                message: "Merci de saisir votre message"
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
</script>

<script src="../src/lib/wow/wow.js"></script>
<script src="../src/lib/easing/easing.js"></script>
<script src="../src/lib/waypoints/waypoints.min.js"></script>
<script src="../src/lib/owlcarousel/owl.carousel.js"></script>
<script src="../src/lib/counterup/counterup.min.js"></script>
<script src="../src/js/main.js"></script>

</body>

</html>