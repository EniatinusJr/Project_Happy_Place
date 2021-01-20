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
    $parameter = $_GET["id"];
    $parameter = $database->escape($parameter);
    require_once("database.class.php");
    $database = new Database("mariadb", "root", "happyplace", "happyplace");

    $sqlusr = "select username from users";
    $sqlpwd = "select password from users";
    $query = "SELECT username FROM users WHERE id = 1";
    $result = $database->query($query);
    while($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["name"];
    }
    ?>
</body>
</html>