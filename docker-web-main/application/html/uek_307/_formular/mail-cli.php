<?php
$empfaenger = 'niemand@example.com';
$betreff = 'Der Betreff';
$nachricht = 'Hallo';
$header = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($empfaenger, $betreff, $nachricht, $header);
