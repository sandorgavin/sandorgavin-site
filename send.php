<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = strip_tags($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = strip_tags($_POST["message"]);

    $to = "sandorgavin@gmail.com";   // ← CHANGE THIS
    $subject = "New Contact Form Submission";

    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email";

    mail($to, $subject, $body, $headers);

    header("Location: thankyou.html");
    exit;
}
?>