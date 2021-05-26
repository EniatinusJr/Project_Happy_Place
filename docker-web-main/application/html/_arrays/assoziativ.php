<?php
/*
$person = array ();

$person['Name'] = 'Deubelbeiss';
$person['Vorname'] = 'Isabella';
$person['Ort'] = 'Zürich';
*/
$person = array('Name' => 'Deubelbeiss', 'Vorname' => 'Isabella', 'Ort' =>
'Zürich');

foreach ($person as $key => $value) { 
    echo $key ."=> ". $value ."<br/>";
}

?>