<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Werbe-Slogan Umfrage</h2><br>
    <form action="auswerten.php" method="POST">
        <fieldset>
            <legend>Werbe-Slogan</legend>
            <select name="werbeslogan">
                <option value="">bitte Auswählen</option>
                <option value="1" <?php if (isset($_POST['werbeslogan']) && $_POST['werbeslogan'] == 1) {echo 'selected';} ?>>Appenzeller, das Rezept bleibt geheim!</option>
                <option value="2" <?php if (isset($_POST['werbeslogan']) && $_POST['werbeslogan'] == 2) {echo 'selected';} ?>>Appenzeller - the only secret</option>
                <option value="3" <?php if (isset($_POST['werbeslogan']) && $_POST['werbeslogan'] == 3) {echo 'selected';} ?>>Appenzeller, da bleibt kein Gaumen cool!</option>
            </select>
        </fieldset>
        <fieldset>
            <legend>Telefonnummer</legend>
            <input type="text" name="telefonnumber" value="<?php if(isset($_POST['telefonnumber'])) {echo $_POST['telefonnumber'];};?>">
        </fieldset>
        <input type="submit" name="absenden" value="senden">
    </form>
</body>
</html>