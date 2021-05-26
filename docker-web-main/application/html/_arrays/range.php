<?php

$years = range(2017,2020);

echo '<p>'.$years.'</p>';
print_r ($years);
var_dump ($years);

foreach($years as $elements){
    echo $elements;
}

?>