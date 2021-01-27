<?php
require_once "anmeldungsinstanz.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" size="32x32" href="./icons/earth-globe-with-continents-maps.png">
    <title>Sign in</title>
</head>
<body>
    <form action="anmeldung.php" method="POST">
        <input id="usrname" name="usrname" placeholder="Username"><br>
        <input id="pwd" name="pwd" placeholder="Password"><br>
        <button type="submit" name="button" onclick="location.href='userlist.php'">Sign in</button>
    </form>
</body>
</html>