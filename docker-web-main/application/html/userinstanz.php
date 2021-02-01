<?php
$entity = array();
require_once ('database.class.php');
require_once ('userlist.class.php');
$dbms = new Database("mariadb", "root", "happyplace", "happyplace");
$entity = new Entity($dbms->getConnection(), "Ort");

print_r($entity->columns);
/*
$new = new stdClass();
$new->name = "Unbekannte Ortschaft";
$entity->save($new);

$update = $entity->load(9556);
$update->name = "Affeltrangen OOOOO";
$entity->save($update);
*/

?>