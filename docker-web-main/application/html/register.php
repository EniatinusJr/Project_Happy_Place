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
        <input type="text" name="username" placeholder="Username"><br>
        <input type="text" name="pwd" placeholder="Password"><br>
        <button type="submit" name="button" onclick="location.href='Sign_in.php'">Sign up</button>
    </form>
    <?php
    $parameter = $_GET["id"];
    $parameter = $database->escape($parameter);
    require_once("database.class.php");
    $database = new Database("mariadb", "root", "happyplace", "happyplace");

    if(isset($_POST["button"])){
        query($query);
        $query = "INSERT INTO users (username, password) VALUES ('username', 'pwd');";
        $database->query($query);
        
        if ($connection->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
        
        $connection->close();
        header("Location: Sign_in.php");
    }
    ?>
</body>
</html>