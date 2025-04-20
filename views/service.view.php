<?php
// Détection du protocole (http ou https)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';

// Nom de l'hôte (domaine)
$host = $_SERVER['HTTP_HOST'];

define("URL", "$protocol://$host/");
if (!defined('ACCESS')) {
    // Redirection ou affichage d'une erreur
    header("Location: " . URL . 'error');
    exit();
}
?>

<?php
$service = true;
$title = "Services";
include "./include/header.php";
?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="<?= URL ?>">Accueil</a></li>
                    <!--                    <li class="breadcrumb-item"><a href="#">Pages</a></li>-->
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


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
                                    <p><i class="fa fa-check text-primary me-3"></i>Amélioration de la satisfaction client.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Optimisation des processus internes.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Accroissement de la crédibilité et de la réputation de l'entreprise.</p>
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
                                    <p><i class="fa fa-check text-primary me-3"></i>Garantie de la sécurité alimentaire.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Conformité aux réglementations internationales.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Renforcement de la confiance des consommateurs.</p>
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
                                    <p><i class="fa fa-check text-primary me-3"></i>Réduction des accidents et des risques professionnels.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Amélioration du bien-être des employés.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Diminution des coûts liés aux accidents du travail.</p>
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
                                    <p><i class="fa fa-check text-primary me-3"></i>Protection renforcée des données sensibles.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Réduction des risques de cyberattaques.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Conformité aux exigences légales en matière de protection des données.</p>
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





    <!-- Footer Start -->
<?php include "./include/footer.php"; ?>