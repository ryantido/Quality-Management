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



<!-- Footer Start -->
<?php include "./include/footer.php";
?>

