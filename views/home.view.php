<?php
session_start();
// Détection du protocole (http ou https)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';

// Nom de l'hôte (domaine)
$host = $_SERVER['HTTP_HOST'];

define("URL", "$protocol://$host/");
/*if (!defined('ACCESS')) {
    // Redirection ou affichage d'une erreur
    header("Location: " . URL . 'error');
    exit();
}
*/ ?>
<?php

$index = true;
$title = "Accueil";
include "./include/header.php";

?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="../public/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8">
                                    <p
                                            class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                        Bienvenue à QMS</p>
                                    <h1 class="display-1 mb-4 animated slideInDown">Decouvrez nos services
                                    </h1>
                                    <a href="<?= URL ?>service" class="btn btn-primary py-3 px-5 animated slideInDown">Decouvrir
                                        plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../public/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <p
                                            class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                        Bienvenue à QMS</p>
                                    <h1 class="display-1 mb-4 animated slideInDown">Beneficier de nos conseils et
                                        astuces</h1>
                                    <a href="<?= URL ?>contact" class="btn btn-primary py-3 px-5 animated slideInDown">Découvrir
                                        plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 align-items-end mb-4">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="../public/img/about.jpg" alt="">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">À propos de nous</p>
                <h1 class="display-5 mb-4">Nous aidons nos clients à développer leur entreprise</h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                    eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                </p>
                <div class="border rounded p-4">
                    <nav>
                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                            <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                    aria-selected="true">Notre histoire
                            </button>
                            <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-mission" type="button" role="tab"
                                    aria-controls="nav-mission"
                                    aria-selected="false">Notre mission
                            </button>
                            <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                    aria-selected="false">Notre vision
                            </button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                             aria-labelledby="nav-story-tab">
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                amet diam et eos labore.</p>
                            <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                Clita erat ipsum et lorem et sit</p>
                        </div>
                        <div class="tab-pane fade" id="nav-mission" role="tabpanel"
                             aria-labelledby="nav-mission-tab">
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                amet diam et eos labore.</p>
                            <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                Clita erat ipsum et lorem et sit</p>
                        </div>
                        <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                amet diam et eos labore.</p>
                            <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                Clita erat ipsum et lorem et sit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-times text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Aucun coût caché</h4>
                                <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                            </div>
                            <div class="border-end d-none d-lg-block"></div>
                        </div>
                        <div class="border-bottom mt-4 d-block d-lg-none"></div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-users text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Équipe dédiée</h4>
                                <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                            </div>
                            <div class="border-end d-none d-lg-block"></div>
                        </div>
                        <div class="border-bottom mt-4 d-block d-lg-none"></div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-phone text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Disponible 24h/24 et 7j/7</h4>
                                <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Facts Start -->
<div class="container-fluid facts my-5 py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-users fa-3x text-white mb-3"></i>
                <h1 class="display-4 text-white" data-toggle="counter-up">100</h1>
                <span class="fs-5 text-white">Clients satisfaits</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-check fa-3x text-white mb-3"></i>
                <h1 class="display-4 text-white" data-toggle="counter-up">200</h1>
                <span class="fs-5 text-white">Projets terminés</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                <h1 class="display-4 text-white" data-toggle="counter-up">200</h1>
                <span class="fs-5 text-white">Personnel dévoué</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-award fa-3x text-white mb-3"></i>
                <h1 class="display-4 text-white" data-toggle="counter-up">100</h1>
                <span class="fs-5 text-white">Récompenses obtenues</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- Features Start -->
<div class="container-xxl feature py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Pourquoi nous choisir
                    ?</p>
                <h1 class="display-5 mb-4">Quelques raisons pour lesquelles les gens nous choisissent !</h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                    eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                </p>
                <a class="btn btn-primary py-3 px-5" href="<?= URL ?>contact">Contactez nous</a>
            </div>
            <div class="col-lg-6">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6">
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="feature-box border rounded p-4">
                                    <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                    <h4 class="mb-3">Engagement envers l'excellence</h4>
                                    <p class="mb-3">Notre équipe vise l'excellence opérationnelle.
                                        Démarquez-vous grâce à la conformité ISO.</p>
                                    <a class="fw-semi-bold" href="<?= URL ?>service">En savoir plus <i
                                                class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="feature-box border rounded p-4">
                                    <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                    <h4 class="mb-3">Engagement envers l'excellence</h4>
                                    <p class="mb-3"> Besoins uniques, solutions sur mesure.
                                        Collaboration étroite pour des résultats précis.</p>
                                    <a class="fw-semi-bold" href="<?= URL ?>service">En savoir plus <i
                                                class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                        <div class="feature-box border rounded p-4">
                            <i class="fa fa-check fa-3x text-primary mb-3"></i>
                            <h4 class="mb-3">Approche personnalisée </h4>
                            <p class="mb-3"> Engagés pour des résultats mesurables.
                                Amélioration notable de processus, sécurité, conformité, réputation.</p>
                            <a class="fw-semi-bold" href="<?= URL ?>service">En savoir plus<i
                                        class="fa fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Service Start -->
<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Nos services</p>
            <h1 class="display-5 mb-5">Des services géniaux pour votre entreprise</h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                        <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>ISO 9001-2015</h5>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                        <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>ISO 22000-2018</h5>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                        <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>ISO 45001-2018</h5>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-0"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                        <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>ISO 27001-2022</h5>
                    </button>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100"
                                         src="../public/img/service-1.jpg"
                                         style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-4">Excellence dans la qualité des prestations</h3>
                                <p class="mb-4">La norme ISO 9001:2015 est un standard international pour les
                                    systèmes de gestion de la qualité. Elle aide les entreprises à garantir la
                                    satisfaction client, à améliorer en continu et à assurer la conformité
                                    réglementaire.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Amélioration de la satisfaction
                                    client.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Optimisation des processus internes.
                                </p>
                                <p><i class="fa fa-check text-primary me-3"></i>Accroissement de la crédibilité et
                                    de la réputation de l'entreprise.</p>
                                <a href="https://www.iso.org/fr/standard/62085.html"
                                   class="btn btn-primary py-3 px-5 mt-3">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100"
                                         src="../public/img/service-2.jpg"
                                         style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-4">Sécurité alimentaire assurée, normes rigoureuses</h3>
                                <p class="mb-4"> Il établit des exigences pour un système de management
                                    de la sécurité des denrées alimentaires dans toute la chaîne
                                    d'approvisionnement. Cela assure la sécurité des produits alimentaires de la
                                    ferme à la table.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Garantie de la sécurité alimentaire.
                                </p>
                                <p><i class="fa fa-check text-primary me-3"></i>Conformité aux réglementations
                                    internationales.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Renforcement de la confiance des
                                    consommateurs.</p>
                                <a href="https://www.iso.org/fr/publication/PUB100454.html"
                                   class="btn btn-primary py-3 px-5 mt-3">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100"
                                         src="../public/img/service-3.jpg"
                                         style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-4">Santé et sécurité au travail prioritaires</h3>
                                <p class="mb-4">Il est un standard pour les systèmes de management de la sécurité de
                                    l'information. Il aide les organisations à protéger leurs informations contre
                                    les menaces telles que le vol, la perte ou la divulgation non autorisée.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Réduction des accidents et des
                                    risques professionnels.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Amélioration du bien-être des
                                    employés.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Diminution des coûts liés aux
                                    accidents du travail.</p>
                                <a href="https://www.iso.org/fr/standard/63787.html"
                                   class="btn btn-primary py-3 px-5 mt-3">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100"
                                         src="../public/img/service-4.jpg"
                                         style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-4">Protection robuste de l'information</h3>
                                <p class="mb-4">Il est un standard pour les systèmes de management de la
                                    sécurité de l'information. Il aide les organisations à protéger leurs
                                    informations contre les menaces telles que le vol, la perte ou la divulgation
                                    non autorisée.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Protection renforcée des données
                                    sensibles.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Réduction des risques de
                                    cyberattaques.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Conformité aux exigences légales en
                                    matière de protection des données.</p>
                                <a href="https://www.iso.org/fr/standard/27001"
                                   class="btn btn-primary py-3 px-5 mt-3">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Callback Start -->
<div class="container-fluid callback my-5 pt-5" id="form">
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="bg-white border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Contactez nous
                        </p>
                        <h1 class="display-5 mb-5">Demander un rappel</h1>
                    </div>


                    <!-- Message -->
                    <?php if (isset($_SESSION['response'])){

                        ?>
                        <div class="alert text-center <?= $_SESSION['response']['status']; ?>" role="alert">
                            <?= $_SESSION['response']['message']; ?>
                        </div>

                        <?php unset($_SESSION['response']); }?>
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
            </div>
        </div>
    </div>
</div>
<!-- Callback End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Notre équipe</p>
            <h1 class="display-5 mb-5">Équipe exclusive</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <img class="img-fluid rounded" src="../public/img/team-1.jpg" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">Kamdem celestin</h4>
                        <div class="team-social d-flex">
                            <a class="btn btn-square rounded-circle mx-1" href="https://www.facebook.com/"><i
                                        class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href="https://www.twitter.com/"><i
                                        class="fab fa-twitter"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href="https://www.instagram.com/"><i
                                        class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <img class="img-fluid rounded" src="../public/img/team-2.jpg" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">Minka</h4>
                        <div class="team-social d-flex">
                            <a class="btn btn-square rounded-circle mx-1" href="https://www.facebook.com/"><i
                                        class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href="https://www.twitter.com/"><i
                                        class="fab fa-twitter"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href="https://www.instagram.com/"><i
                                        class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <img class="img-fluid rounded" src="../public/img/team-3.jpg" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">TIDO Ryan</h4>
                        <div class="team-social d-flex">
                            <a class="btn btn-square rounded-circle mx-1" href="https://www.facebook.com/"><i
                                        class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href="https://www.twitter.com/"><i
                                        class="fab fa-twitter"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href="https://www.instagram.com"><i
                                        class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Témoignage</p>
            <h1 class="display-5 mb-5">Ce que disent nos clients !</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
            <div class="testimonial-item">
                <div class="testimonial-text  rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white  rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    Je tiens à exprimer ma gratitude envers l'équipe de QMS pour leur
                    expertise exceptionnelle dans la mise en œuvre de la norme ISO 22000. Leur soutien précieux et
                    leurs conseils personnalisés ont été cruciaux pour garantir la sécurité alimentaire de notre
                    entreprise.
                </div>
                <img class="rounded-circle mb-3" src="../public/img/testimonial-1.jpg" alt="">
                <h4>Témoignage de Jeanne</h4>
                <span> Directrice Qualité d'une entreprise agroalimentaire</span>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-text  rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white  rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    Je recommande vivement QMS pour leur assistance professionnelle dans
                    l'implémentation de la norme ISO 45001. Leur approche proactive et leur engagement envers la
                    sécurité et la santé au travail ont considérablement amélioré notre environnement de travail
                </div>
                <img class="rounded-circle mb-3" src="../public/img/testimonial-2.jpg" alt="">
                <h4>Témoignage de Ahmed</h4>
                <span> Responsable RH dans une entreprise industrielle</span>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-text  rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white  rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    Un grand merci à l'équipe de QMS pour leur expertise en sécurité de
                    l'information. Leur accompagnement dans l'obtention de la certification ISO 27001 a renforcé la
                    confiance de nos clients et a amélioré notre posture en matière de cybersécurité.
                </div>
                <img class="rounded-circle mb-3" src="../public/img/testimonial-3.jpg" alt="">
                <h4>Témoignage de Marie</h4>
                <span>Responsable Informatique d'une entreprise de services</span>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-text  rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white  rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    Nous sommes reconnaissants envers QMS pour leur soutien inestimable dans
                    la mise en place de la norme ISO 9001. Leur approche collaborative et leur engagement envers
                    l'excellence ont considérablement amélioré nos processus et notre efficacité opérationnelle.
                </div>
                <img class="rounded-circle mb-3" src="../public/img/testimonial-4.jpg" alt="">
                <h4>Témoignage de Thomas</h4>
                <span> Directeur Opérationnel d'une entreprise de fabrication</span>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Footer Start -->
<?php include "./include/footer.php";
?>

