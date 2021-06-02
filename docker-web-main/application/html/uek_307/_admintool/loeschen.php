<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $ersetzen1 = array('.jpeg' => '', '.jpg' => '', '_' => ' ');

    $ersetzen2 = array('ae' => 'ä', 'oe' => 'ö', 'ue' => 'ü', 'Ae' => 'Ä', 'Oe' =>
    'Ö', 'Ue' => 'Ü');

    $dateien = scandir('../_gallery/thumbnails');

    foreach ($dateien as $datei) {
        if ( is_file('../_gallery/thumbnails/' . $datei) ) {
            $text = strtr($datei, $ersetzen1);
            $text = ucwords($text);
            $text = strtr($text, $ersetzen2);

            echo "<figure>\n";
            echo "<a href=\"../_gallery/images/$datei\" target=\"bild\">\n";
            echo "<img src=\"../_gallery/thumbnails/$datei\" alt=\"$text\">\n";
            echo "</a>\n";
            echo "<figcaption>\n";
            echo "<p>$text</p>\n";
            echo "</figcaption>\n";
            echo "</figure>\n";
            echo "<form>"
            echo "<button type='reset' name='delete'>Löschen</button>";
        }
    }
    ?>
</body>
</html>