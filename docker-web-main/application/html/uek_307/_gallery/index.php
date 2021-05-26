<doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dir = 'thumbnails';
        $images = glob($dir.'/*.jpg');

        $path = glob('images'.'/*.jpg');
        $count = 0;
        foreach($path as $link){
            $img = $images[$count];
            $count++;
            echo "<a class = 'item' href =  bild.php?bild=" . $link . " target = '_blank'><img src = " . $img . " height = 200 width = 200></a>";
            $text = substr($img,strlen($dir ) +1 );
            $text = str_replace([".jpeg", ".jpg"], " ", $text);
            $text = str_replace("ae", "ä", $text);
            $text = str_replace("oe", "ö", $text);
            $text = str_replace("ue", "ü", $text);
            $text = str_replace([' ','-','&','_'], " ", $text);
            $text = ucfirst($text);
            echo"<p class = item >". $text ."</p>";
        }
    ?>
</body>
</html>