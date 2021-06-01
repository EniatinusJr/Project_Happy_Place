<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auswahlelemente</title>
</head>
<body>
    <?php
    if(isset($_GET['senden'])){

        $lehrmittel = 'keine Angabe';
        $sprache = 'keine Angabe';
        $format = 'keine Angabe';

        $email = $_GET['email'];

        if (isset($_GET['sprache'])) {
            $sprache = $_GET['sprache'];
        }
    
        if(isset($_GET['dateiformat'])) {
            $format = $_GET['dateiformat'];
        }
    
        if(isset($_GET['lehrmittel'])) {
            $lehrmittel = implode('<br>', $_GET['lehrmittel']);
        }
    
            $zahlungsart = $_GET['zahlungsart'];

        echo '<h2>Bestätigung</h2>';
        echo '<p>Vielen Dank für Ihre Bestellung. Wir werden die Artikel nach dem Zahlungseingang ausliefern.</p>';
        echo '<p>Ihre E-Mail-Adresse:<br>' . $email . '</p>';
        echo '<p>Ihre Bestellung:<br>' . $lehrmittel . '</p>';
        echo '<p>Sprache der Lehrmittel:<br>' . $sprache . '</p>';
        echo '<p>Dateiformat der Lehrmittel:<br>' . $format . '</p>';
        echo '<p>Zahlungsart:<br>' . $zahlungsart . '</p>';
    }else{

    ?>
    <form action="auswahlelemente.php" method="get">
        <input type="text" name="email" placeholder="E-Mail adresse">
        <br>
        <fieldset>
            <legend>Sprache</legend>
            <label for="deutsch">
                Deutsch
                <input type="radio" name="sprache" value="Deutsch" id="deutsch">
            </label>
            <label for="franzoesisch">
                Französisch
                <input type="radio" name="sprache" value="Französisch" id="franzoesisch">
            </label>
            <label for="englisch">
                Englisch
                <input type="radio" name="sprache" value="Englisch" id="englisch">
            </label>
        </fieldset>
        <br>
        <fieldset>
        <legend>Datei-Format</legend>
            <label for="pdf">
                PDF
                <input type="radio" name="dateiformat" value="PDF" id="pdf">
            </label>
            <label for="epub">
                ePUB
                <input type="radio" name="dateiformat" value="ePUB" id="epub">
            </label>
        </fieldset>
        <br>
        <fieldset>
            <legend>Lehrmittel</legend>
            <label for="buch1">
                Buch1
                <input type="checkbox" name="lehrmittel[]" value="Buch1" id="buch1">
            </label>
            <label for="buch2">
                Buch2
                <input type="checkbox" name="lehrmittel[]" value="Buch2" id="buch2">
            </label>
        </fieldset>
        <fieldset>
            <legend>Zahlungsart</legend>
            <select name="zahlungsart">
                <option value="">bitte auswählen
                <option value="Barzahlung">Barzahlung (im Sekretariat)
                <option value="Kreditkarte">Kreditkarte (im Sekretariat)
                <option value="Rechnung">Rechnung
            </select>
        </fieldset>

        <br>
        <input type="submit" name="senden" value="absenden">
    </form>

    <?php
    }
    ?>
</body>
</html>