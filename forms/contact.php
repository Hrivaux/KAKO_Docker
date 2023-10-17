<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "hrivaux@sfr.fr"; // Adresse e-mail où vous souhaitez recevoir les messages
    $subject = $_POST["Object"];
    $message = "Nom: " . $_POST["Nom"] . "\n";
    $message .= "Prénom: " . $_POST["Prenom"] . "\n";
    $message .= "Téléphone: " . $_POST["Tel"] . "\n";
    $message .= "Email: " . $_POST["Email"] . "\n";
    $message .= "Message: " . $_POST["Message"];
    $headers = "De: " . $_POST["Email"];

    if (mail($to, $subject, $message, $headers)) {
        echo "success"; // Réponse pour indiquer que le message a été envoyé avec succès
    } else {
        echo "error"; // Réponse en cas d'erreur d'envoi
    }
} else {
    echo "invalid request";
}
?>
