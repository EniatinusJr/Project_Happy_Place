<?php
require_once "sign_instanz.php";
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
    <form action="Sign_in.php" method="POST">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="text" name="pwd" placeholder="Password"><br>
        <button type="submit" name="button" onclick="location.href='userlist.php'">Sign in</button>
    </form>
</body>
</html>