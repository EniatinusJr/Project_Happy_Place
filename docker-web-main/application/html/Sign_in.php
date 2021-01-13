<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./icons/earth-globe-with-continents-maps.png">
    <title>Sign In</title>
</head>
<body>
    <form action="Sign_in.php" method="POST">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="text" name="pwd" placeholder="Password"><br>
        <button type="submit" name="button" onclick="location.href='userlist.php'">Sign in</button>
    </form>
    <?php
    $servername = "mariadb";
    $username = "root";
    $password = "happyplace";
    $dbname = "happyplace";
    
    // Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $sqlusr = "select username from users";
    $sqlpwd = "select password from users";
    if(isset($_POST["button"])){
        if ($sqlusr == 'username' and $sqlpwd == 'pwd'){
            header("Locatioin: userlist.php");
        } else{
            echo ("BIG FAIL");
        }
    }
    ?>
</body>
</html>