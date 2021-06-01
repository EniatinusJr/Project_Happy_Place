<?php
    if(isset($_POST['absenden'])) {

        $vorname = strip_tags($_POST['vorname']);
        $name = strip_tags($_POST['name']);

        $email = 'keine Angabe';
        $sprache = 'keine Angabe';
        $newsletter = 'keine Angabe';

        if(isset($_POST['email'])) {
            $email = strip_tags($_POST['email']);
        }
        if(isset($_POST['programmiersprache'])) {
            $sprache = implode('<br>', $_POST['programmiersprache']);
        }
        if(isset($_POST['newsletter'])) {
            $newsletter = strip_tags($_POST['newsletter']);
        }

        echo '<h2>Bestätigung</h2>';
        echo '<p>Vielen Dank für Ihre Bestellung. Wir werden die Artikel nach dem Zahlungseingang ausliefern.</p>';
        echo '<p>Ihr Name:<br>' . $name . '</p>';
        echo '<p>Ihr Vornamen:<br>' . $vorname . '</p>';
        echo '<p>Ihre E-Mail-Adresse:<br>' . $email . '</p>';
        echo '<p>Ihre Bestellung:<br>' . $sprache . '</p>';
        echo '<p>Newsletter:<br>' . $newsletter . '</p>';

        mail("maurin@schucan.ch", "Your Product", "Your Product ". $sprache ." wird ihnen ". $vorname $name ."zugestellt", "From: maurin@schucan.ch \r\n");
        
        
    }


    


?>