<?php
require_once "instanz.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./icons/earth-globe-with-continents-maps.png">
    <title>Register</title>
</head>
<body>
<form action="register.php" method="POST">
        <input type="text" name="prename" placeholder="Firstname"><br>
        <input type="text" name="lastname" placeholder="Lastname"><br>
        <input type="text" name="username" placeholder="Username"><br>
        <input type="text" name="pwd" placeholder="Password"><br>
        <button type="submit" name="button" onclick="location.href='Sign_in.php'">Sign up</button>
    </form>
</body>
</html>