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
        <button name="button">Sign up</button>
    </form>
    <?php
    $servername = "mariadb";
    $username = "root";
    $password = "happyplace";
    $dbname = "happyplace";
    
    // Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if(isset($_POST["button"])){
        $sql = "INSERT INTO users (username, password)
        VALUES ('username', 'pwd')";
        
        if ($connection->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
        
        $connection->close();
    }
    $connection->close();
    ?>
</body>
</html>