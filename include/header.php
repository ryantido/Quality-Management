
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>QMS | <?php echo $title ?? "Titre par défaut"; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../public/logo/logo1.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../src/lib/animate/animate.css" rel="stylesheet">
    <link href="../src/lib/owlcarousel/assets/owl.carousel.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/src/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../src/css/style.css" rel="stylesheet">
</head>

<body>


<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <small><i class="fa fa-map-marker-alt text-primary me-2"></i>Douala, Cameroun, Afrique</small>
            <small class="ms-4"><i class="fa fa-clock text-primary me-2"></i>9.00 - 20.00 </small>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small><i class="fa fa-envelope text-primary me-2"></i><a href="mailto:Contact@QMSconsulting.com"
                                                                      title="Contact@QMSconsulting.com">Contact@QMSconsulting.com</a></small>
            <small class="ms-4"><i class="fa fa-phone-alt text-primary me-2"></i><a href="tel:237683447200">+237 683 447 200</a></small>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="<?= URL ?>" class="navbar-brand ms-4 ms-lg-0">
            <!--            <h1 class="display-5 text-primary m-0"></h1>-->
            <img src="../public/logo/logo.png" style="height: 10vh;" alt="logo">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?= URL ?>" class="nav-item nav-link <?php echo !empty($index) ? "active" : "" ?>">Accueil</a>
                <a href="<?= URL ?>about" class="nav-item nav-link <?php echo !empty($about) ? "active" : "" ?>">À
                    propos</a>
                <a href="<?= URL ?>service" class="nav-item nav-link <?php echo !empty($service) ? "active" : "" ?>">Nos
                    services</a>

                <a href="<?= URL ?>contact" class="nav-item nav-link <?php echo !empty($contact) ? "active" : "" ?>">Contact</a>
            </div>
            <div class="d-none d-lg-flex ms-2">
                <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://www.facebook.com/" target="blank">
                    <small class="fab fa-facebook-f text-primary"></small>
                </a>
                <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://www.twitter.com/" target="blank">
                    <small class="fab fa-twitter text-primary"></small>
                </a>
                <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://linkedin.com/" target="blank">
                    <small class="fab fa-linkedin-in text-primary"></small>
                </a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->

