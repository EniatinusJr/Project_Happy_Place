<?php
    if(isset($_POST['absenden'])) {

        if(empty($_POST['telefonnumber']) && $_POST['werbeslogan'] == "") {
            echo '<h2>Korrektur</h2>';
            echo '<p>Bitte wählen Sie ein Werbe-Slogan aus</p>';
            echo '<p>Bitte geben Sie nur korrekte Daten als Telefonnummer ein</p>';
            require_once ('index.php');

        }elseif($_POST['werbeslogan'] == ""){
            echo '<h2>Korrektur</h2>';
            echo '<p>Bitte wählen Sie ein Werbe-Slogan aus</p>';
            require_once ('index.php');

        }elseif(empty($_POST['telefonnumber'])){
            echo '<h2>Korrektur</h2>';
            echo '<p>Bitte geben Sie nur korrekte Daten als Telefonnummer ein</p>';
            require_once ('index.php');
        }else{
            $telefonnumber = strip_tags($_POST['telefonnumber']);

            if($_POST['werbeslogan'] == "1"){
                echo '<h2>Bestätigung</h2>';
                echo '<p>Vielen Dank für Ihre Umfrage.</p>';
                echo '<p>Ihre Telefonnummer:<br>' . $telefonnumber . '</p>';
                echo '<p>Ihr ausgewählter Werbe-Slogan:<br> Appenzeller, das Rezept bleibt geheim!</p>';
            }elseif($_POST['werbeslogan'] == "2"){
                echo '<h2>Bestätigung</h2>';
                echo '<p>Vielen Dank für Ihre Umfrage.</p>';
                echo '<p>Ihre Telefonnummer:<br>' . $telefonnumber . '</p>';
                echo '<p>Ihr ausgewählter Werbe-Slogan:<br> Appenzeller - the only secret</p>';
            }elseif($_POST['werbeslogan'] == "3"){
                echo '<h2>Bestätigung</h2>';
                echo '<p>Vielen Dank für Ihre Umfrage.</p>';
                echo '<p>Ihre Telefonnummer:<br>' . $telefonnumber . '</p>';
                echo '<p>Ihr ausgewählter Werbe-Slogan:<br> Appenzeller, da bleibt kein Gaumen cool!</p>';
            }
        }
    }
?>