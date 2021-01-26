<?php
require_once"register.class.php";
require_once"database.php";

$register = new register($prename, $lastname, $username, $pwd);
$create = $register->create($connection);
?>