<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email recipient
    $to = 'romain.gough@example.com';
    // Subject of the email
    $subject = 'Nouveau message de ' . $name;
    // Message body
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo 'Votre message a été envoyé avec succès.';
    } else {
        echo 'Désolé, une erreur s\'est produite. Veuillez réessayer plus tard.';
    }
} else {
    echo 'Méthode de requête non autorisée.';
}
?>
