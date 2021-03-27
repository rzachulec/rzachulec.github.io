<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    if (empty($message)) {
        $message = "Jestem wstępnie zainteresowany(a) udziałem w projekcie lub mam więcej pytań. Proszę o kontakt.";
    }

    $to = '10Domow@gmail.com';
    $title = '10 Domów message';

    $bodyParagraphs = ["Numer telefonu:", $phone, "Wiadomość:", $message];
    $body = join(PHP_EOL, $bodyParagraphs);

    if (mail($to, $title, $body,)) {
        header("Location: index.php#sent");
    } else {
        header("Location: index.php#unsent");
    }
    ?>
</body>

</html>