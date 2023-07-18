<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $to = "mostertwesley@gmail.com";
    $headers = "From: $email\r\nReply-To: $email\r\n";
    mail($to, $subject, $message, $headers);
    header("Location: bedankpagina.html");
    exit;
}
?>
