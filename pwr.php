<?php


if($_POST["phone"]) {


    $toEmail = 'rzachulec@gmail.com';
    $emailSubject = '10 Domów message';
    $headers = ['From' => 'rzachulec@gmail.com', 'Content-type' => 'text/html; charset=iso-8859-1'];

    $bodyParagraphs = ["Numer telefonu: {$phone}", "Wiadomość: {$subject}"];
    $body = join(PHP_EOL, $bodyParagraphs);

    if (mail($toEmail, $emailSubject, $body, $headers) ) {
        header('Location: thank-you.html');
    } else {
        $errorMessage = 'Oops, something went wrong. Please try again later';

}
}
