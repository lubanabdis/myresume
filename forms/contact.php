<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = 'teamlubanabdi9@gmail.com'; // Ganti dengan alamat email penerima

    $headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);
}
?>
