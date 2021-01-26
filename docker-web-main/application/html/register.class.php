<?php
require_once "database.php";
class register{

    public $prename;
    public $lastname;
    public $username;
    public $pwd;

    public function __constructor($prename, $lastname, $username, $pwd){
        $this->prename = $prename;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->pwd = $pwd;
    }

    public function create($connection){
        if(isset($_POST["button"])){
            $prename = $_POST['prename'];
            $lastname = $_POST['lastname'];
            $username = $_POST['username'];
            $pwd = $_POST['pwd'];

            $query = "INSERT INTO users (prename, lastname, username, password) VALUES ('$prename', '$lastname', '$username', '$pwd');";
            $result = $connection->query($query);

            if (!$result) {
                die($connection->error);
            }
            
            if ($connection->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $connection->error;
            }
            
            $connection->close();
            header("Location: Sign_in.php");
        }
    }
}
?>