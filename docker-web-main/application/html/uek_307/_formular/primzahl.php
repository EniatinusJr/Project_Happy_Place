

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
    if(isset($_GET['senden'])){
        $primzahlen = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97);

        $zahl = $_GET['zahl'];

        if (in_array($zahl, $primzahlen)){
            echo '<p>Dies ist eine Primzahl</p>';
        }
        

    }


    ?>
    <form method="get" action="primzahl.php" accept-charset="utf-8">
        <p><label>Natürliche Zahl: <input type="text" name="zahl" autofocus></label></p>
        <p>
        <input type="submit" name="senden" value="absenden">
        </p>
    </form>
</body>
</html>