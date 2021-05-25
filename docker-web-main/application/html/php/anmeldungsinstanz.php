<?php
require_once "anmeldung.klasse.php";
require_once "database.php";

$anmeldung = new anmeldung($usrname, $pwd);
$create = $anmeldung->create($connection);
?>