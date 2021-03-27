<?php

use PHPMailer;

require 'C:\Users\LENOVO\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require 'C:\Users\LENOVO\vendor\phpmailer\phpmailer\src\SMTP.php';

$errors = [];
$errorMessage = '';

$to = 'rzachulec@gmail.com';
$title = '10 Domów message';

if (!empty($_POST)) {
    $phone = $_POST['phone'];
    $message = $_POST['message'];
}

if (empty($message)) {
    $message = "Jestem wstępnie zainteresowany(a) udziałem w projekcie lub mam więcej pytań. Proszę o kontakt";
}

$mail = new PHPMailer();

//smtp credentails
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'rzachulec@gmail.com;';
$mail->Password = 'Grabowski11';
$mail->SMTPSecure = 'tls';
$mail->Port = 465;

$mail->setFrom($to, 'Me');
$mail->addAdress($to, 'Me');
$mail->Subject = $title;

$mail->isHTML(true);

$bodyParagraphs = ["Numer telefonu:", $phone, "Wiadomość:", $message];
$body = join(PHP_EOL, $bodyParagraphs);

$mail->Body = $body;

echo $body;

if ($mail->send()) {
    header("Location: index.php/sent");
    $hidden = 1;
    #print_r($_POST);
} else {
    $hidden = 0;
    header("Location: index.php#unsent");
}
