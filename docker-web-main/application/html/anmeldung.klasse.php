<?php
require_once "database.class.php";
class anmeldung{

    public $usrname;
    public $pwd;

    public function __constructor($usrname, $pwd){
        $this->username = $usrname;
        $this->pwd = $pwd;
    }

    public function create($connection){
        if(isset($_POST["button"])){

            $usrname = $connection->real_escape_string($this->usrname);
            $pwd = $connection->real_escape_string($this->pwd);
            $usrname = $_POST['usrname'];
            $pwd = $_POST['pwd'];

            $sqlusr = "SELECT username, password FROM users";

            $result = $connection->query($sqlusr);
            $usersFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
            $loginok = 0;
            foreach ($usersFromDatabase as $users) {
                ($users);
                $username = $users['username'];
                $password = $users['password'];
                if($username == $usrname && $password == $pwd){
                    $loginok = 1;
                }   
            }
/*
            $sqlpwd = "SELECT password FROM users";

            $result = $connection->query($sqlpwd);
            $password = $result->fetch_all(MYSQLI_ASSOC);
*/
            print_r($password);
            print_r ($username);
            print_r($usrname);
            print_r($pwd);

            if($loginok == 1){
                
                $connection->close();
                header("Location: userlist.php");
            } else {
                echo ("big fail");
            }
        }
    }

    public static function fetchAll($connection)
    {
        $sql = "SELECT * FROM `users`";
        $result = $connection->query($sql);

        if (!$result) {
        die($connection->error);
        }

        $usersFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
        $users = [];

        foreach ($usersFromDatabase as $users) {
        //print_r($marker);
        $poi = new anmeldung($users['username'], $users['password']); 
        $users[] = $poi;
        }

        return $users;
    }
}
?>