<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formsend.php" method="POST">
        <label for="name">
            Name
            <input type="text" name="name" value="<?php if(isset($_POST['name'])) {echo $_POST['name'];};?>">
        </label>
        <br>
        <label for="vorname">
            Vorname
            <input type="text" name="vorname" value="<?php if(isset($_POST['vorname'])) {echo $_POST['vorname'];};?>">
        </label>
        <br>
        <label for="email">
            E-Mail
            <input type="text" name="email" value="<?php if(isset($_POST['email'])) {echo $_POST['email'];};?>">
        </label>

        <fieldset>
            <legend>Ich bestelle Informationen zu</legend>
            <label for="php">
                <input type="checkbox" name="programmiersprache1" value="PHP" <?php if (isset($_POST['programmiersprache1'])) {echo 'checked';}  ?>>
                PHP
            </label>
            <br>
            <label for="javascript">
                <input type="checkbox" name="programmiersprache2" value="JavaScript" <?php if (isset($_POST['programmiersprache2'])) {echo 'checked';}  ?>>
                JavaScript
            </label>
            <br>
            <label for="css">
                <input type="checkbox" name="programmiersprache3" value="CSS" <?php if (isset($_POST['programmiersprache3'])) {echo 'checked';}  ?>>
                CSS
            </label>
        </fieldset>
        <fieldset>
            <legend>Ich abonniere den Newsletter</legend>
            <label for="ja">
                <input type="radio" name="newsletter" value="ja" <?php if (isset($_POST['newsletter'])) {echo 'checked';} ?>>
                ja
            </label>
        </fieldset>
        <input type="submit" name="absenden" value="senden"> 
    </form>
</body>
</html>