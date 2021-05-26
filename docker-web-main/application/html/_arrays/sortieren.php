<?php
$place = array('Uetikon am See', 'Adliswil', 'Niederglatt', 'Urdorf', 'Stäfa', 'Zürich', 'Brigels', 'Arosa');

foreach($place as $element){
    echo '<p>'.$element.'</p>';
}
shuffle($place);

echo '<p>shuffle .......</p>';

foreach($place as $element){
    echo '<p>'.$element.'</p>';
}

sort($place);

echo '<p>sort ..........</p>';

foreach($place as $element){
    echo '<p>'.$element.'</p>';
}

?>