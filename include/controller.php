<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include('./include/database.php');

require './vendor/autoload.php';  // Assurez-vous d'avoir inclus PHPMailer dans votre projet

// Détection du protocole (http ou https)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';

// Nom de l'hôte (domaine)
$host = $_SERVER['HTTP_HOST'];

define("URL", "$protocol://$host$_SERVER[REQUEST_URI]");


if (!empty($_POST["send"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Recipient email
    $toMail = "jiordikengne@gmail.com";

    // Build email header
    $header = "From: " . $name . " <" . $email . ">\r\n";

    // Utilisez PHPMailer pour envoyer l'e-mail
    $mail = new PHPMailer(true);

    try {
        // Paramètres SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'jiordikengne@gmail.com';
        $mail->Password = 'qbgemuwilerzipdc';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Paramètres supplémentaires pour l'e-mail
        $mail->setFrom($email, $name);
        $mail->addAddress($email);
        $mail->Subject = $subject;
        $mail->Body = $message;

        // Envoi de l'e-mail
        $mail->send();

        // Utilisation de requêtes préparées avec PDO pour éviter les injections SQL
        $sql = $connection->prepare("INSERT INTO contacts_list (name, email, phone, subject, message, sent_date) VALUES (?, ?, ?, ?, ?, NOW())");
        $sql->execute([$name, $email, $phone, $subject, $message]);

        // Réponse en cas de succès

        $_SESSION['response'] = [
            "status" => "alert-success",
            "message" => "Nous avons reçu votre demande et enregistré vos informations. Nous vous contacterons bientôt."
        ];

    } catch (Exception $e) {
        // Réponse en cas d'échec
        $_SESSION['response'] = [
            "status" => "alert-danger",
            "message" => "Le message n'a pas pu être envoyé. Erreur du gestionnaire de messagerie : {$mail->ErrorInfo}"
        ];
    }
    header('Location:' . URL . '#form');
}


// Traitement du formulaire
if (isset($_POST["newsletterForm"])) {
    $email = $_POST["emailNew"];
    try {
        // Validation de l'email (ajoutez des validations supplémentaires selon vos besoins)
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Préparation et exécution de la requête d'insertion
            $stmt = $connection->prepare("INSERT INTO newsletter (email) VALUES (:email)");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $_SESSION['response'] = [
                "status" => "alert-success",
                "message" => "Envoyé avec succès !!"
            ];

        }
    } catch (Exception $e) {
        $_SESSION['response1'] = [
            "status" => "alert-danger",
            "message" => "Une erreur est subvenue lors de l'envoi du mail à la base de données"
        ];
    }

    header('Location:' . URL . '#newsletterForm');
}



