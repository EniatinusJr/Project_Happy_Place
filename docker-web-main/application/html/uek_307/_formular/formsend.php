<?php
    if(isset($_POST['absenden'])) {

        if(empty($_POST['vorname'])) {
            echo '<h2>Korrektur</h2>';
            echo '<p>Bitte geben Sie nur korrekte Daten als Vornamen ein</p>';
            require_once ('index.php');

        }elseif(empty($_POST['name'])){
            echo '<h2>Korrektur</h2>';
            echo '<p>Bitte geben Sie nur korrekte Daten als Namen ein</p>';
            require_once ('index.php');

        }elseif(empty($_POST['email']) || preg_match("/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", htmlspecialchars($_POST['email'])) == 0){
            echo '<h2>Korrektur</h2>';
            echo '<p>Bitte geben Sie nur korrekte Daten als E-Mail Adresse ein</p>';
            require_once ('index.php');

        }elseif(empty($_POST['programmiersprache1']) && empty($_POST['programmiersprache2']) && empty($_POST['programmiersprache3'])){
            echo '<h2>Korrektur</h2>';
            echo '<p>Bitte wählen Sie ein Produkt aus</p>';
            require_once ('index.php');

        }else{
            $vorname = strip_tags($_POST['vorname']);
            $name = strip_tags($_POST['name']);

            $email = 'keine Angabe';
            $sprache = 'keine Angabe';
            $newsletter = 'keine Angabe';


            $email = strip_tags($_POST['email']);

            $sprache = strip_tags($_POST['programmiersprache1'] . " " .$_POST['programmiersprache2']. " " .$_POST['programmiersprache3']);

            $newsletter = strip_tags($_POST['newsletter']);

            echo '<h2>Bestätigung</h2>';
            echo '<p>Vielen Dank für Ihre Bestellung. Wir werden die Artikel nach dem Zahlungseingang ausliefern.</p>';
            echo '<p>Ihr Name:<br>' . $name . '</p>';
            echo '<p>Ihr Vornamen:<br>' . $vorname . '</p>';
            echo '<p>Ihre E-Mail-Adresse:<br>' . $email . '</p>';
            echo '<p>Ihre Bestellung:<br>' . $sprache . '</p>';
            echo '<p>Newsletter:<br>' . $newsletter . '</p>';

            mail(/*$email*/ "maurin@schucan.ch", "Your Product", "Your Product ". $sprache ." wird ihnen ". $vorname . $name ."zugestellt", "From: maurin@schucan.ch \r\n");
        }
    }


    


?>