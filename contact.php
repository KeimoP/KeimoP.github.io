<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    
    $to = "your-email@example.com";
    $subject = "Contact Form Submission";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    echo "Thank you! Your message has been sent.";
}
?>