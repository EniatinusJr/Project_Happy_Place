<?php
require_once "sign_in.class.php";
require_once "database.php";

$register = new sign_in($username, $pwd);
$create = $sign_in->create($connection);
?>