<?php
// Détection du protocole (http ou https)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';

// Nom de l'hôte (domaine)
$host = $_SERVER['HTTP_HOST'];

define("URL", "$protocol://$host/");
if (!defined('ACCESS')) {
    // Redirection ou affichage d'une erreur
    header("Location: ".URL.'error');
    exit();
}
?>

<?php
$contact = true;
$title = "Contact";
include "./include/header.php";

?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                    <!--                    <li class="breadcrumb-item"><a href="#">Pages</a></li>-->
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

<?php if (isset($_SESSION['response'])){

    ?>
    <div class="alert text-center <?= $_SESSION['response']['status']; ?>" role="alert">
        <?= $_SESSION['response']['message']; ?>
    </div>

<?php unset($_SESSION['response']); }?>
    <!-- Contact Start -->
    <div class="container-xxl py-5" id="form">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Contact</p>
                    <h1 class="display-5 mb-4">Si vous avez des questions, veuillez nous contacter</h1>
                    <form class="row g-5" method="post" name="contactForm" enctype="multipart/form-data">

                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" name="name"
                                       placeholder="Votre Nom">
                                <label for="name">Nom</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="mail" name="email"
                                       placeholder="Entrez votre adresse email">
                                <label for="mail">Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="phone" name="phone"
                                       placeholder="Entrez votre numéro de téléphone">
                                <label for="phone">Mobile</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" name="subject"
                                       placeholder="Sujet">
                                <label for="subject">Sujet</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                    <textarea class="form-control" placeholder="Ecrivez votre message ici " id="message"
                                              name="message" rows="4"
                                              style="height: 100px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <input class="btn btn-primary w-100 py-3" type="submit" value="Envoyer" name="send">
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <!-- <iframe class="position-relative w-100 h-100"
                                 src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7959.2978581294665!2d9.743914263037835!3d4.091672239007315!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1705573816961!5m2!1sfr!2sfr"
                                 frameborder="0" style="min-height: 450px; border:0;" allowfullscreen=""
                                 aria-hidden="false"
                                 tabindex="0"></iframe>-->
                        <iframe class="position-relative w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.824858527825!2d9.742915374587282!3d4.056110146909084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610d9f57e93471%3A0x3b731da84fc81386!2sInstitut%20Universitaire%20De%20Technologies%20De%20Douala!5e0!3m2!1sfr!2sfr!4v1706698762377!5m2!1sfr!2sfr"
                                style="min-height: 450px; border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
<?php include "./include/footer.php"; ?>