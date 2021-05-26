<?php

$projekt = array('Projektleiter' => 'Sorg Hubert', 'Datenbank-Spezialist' => 'Horter Iris', 'Programmierer' => 'Friedlos Armin', 'Tester' => 'Bünzli Reto', 'Grafik-Designerin' => 'Schön Helen');

ksort($projekt);

foreach($projekt as $key => $value){
    echo '<p>'.$key.', '.$value.'</p>';
}
echo '<p>next</p>';

krsort($projekt);

foreach($projekt as $key => $value){
    echo '<p>'.$key.', '.$value.'</p>';
}
echo '<p>next</p>';

asort($projekt);

foreach($projekt as $key => $value){
    echo '<p>'.$key.', '.$value.'</p>';
}
echo '<p>next</p>';

arsort($projekt);

foreach($projekt as $key => $value){
    echo '<p>'.$key.', '.$value.'</p>';
}
echo '<p>next</p>';
?>