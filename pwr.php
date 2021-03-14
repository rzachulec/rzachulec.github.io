<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>congrats</title>
  <link rel="icon" src="logo1.png" type="image/x-icon">
  <link rel="stylesheet" href="pwr.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <?php
    
    echo $to = 'rzachulec@gmail.com';
    echo $subject = '10 Domów message';
    echo $headers = ['From' => 'rzachulec@gmail.com', 'Content-type' => 'text/html; charset=iso-8859-1'];
    
    $bodyParagraphs = ["Numer telefonu: {$phone}", "Wiadomość: {$subject}"];
    $body = join(PHP_EOL, $bodyParagraphs);
    
    mail($to, $subject, $body, $headers );
    
    if (mail($to, $subject, $body, $headers ) ) {
        header('Location: thank-you.html');
        echo 'sent successfuly';
    } else {
        $errorMessage = 'Oops, something went wrong. Please try again later';
        echo 'not sent :(';
        
    }
}
?>

</body>
</html>