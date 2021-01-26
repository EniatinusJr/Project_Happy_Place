<?php
require_once "database.php";
class sign_in{


    public function __constructor($username, $pwd){
        $this->username = $username;
        $this->pwd = $pwd;
    }

    public function create($connection){
        require_once("database.php");

        $usrname = $_POST['username'];
        $pwd = $_POST['pwd'];

        $sqlusr = "SELECT username FROM users";

        $result = $connection->query($sqlusr);
        $usersFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($usersFromDatabase as $users) {
            ($users);
            $username = $users['username'];
        }

        $sqlpwd = "SELECT password FROM users";

        $result = $connection->query($sqlpwd);
        $pwdFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($pwdFromDatabase as $pwd) {
            ($pwd);
            $password = $pwd['password'];
        }

        if($usrname == $username && $pwd == $password){
            header("Location: userlist.php");
        }
    }
}
?>