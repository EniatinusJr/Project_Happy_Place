<nav>
    <ul>

<?php
$links = array(
    array(
        'Linktext' => 'Computer',
        'Dateiname' => 'computer.php',
        'Flag' => './computer.php'
    ),
    array(
        'Linktext' => 'Sport',
        'Dateiname' => 'sport.php',
        'Flag' => './sport.php'
    ),
    array(
        'Linktext' => 'Cartoons',
        'Dateiname' => 'cartoon.php',
        'Flag' => './cartoon.php'
    ),
    array(
        'Linktext' => ' >Eva',
        'Dateiname' => 'eva.php',
        'Flag' => './eva.php'
    ),
    array(
        'Linktext' => ' >Hägar',
        'Dateiname' => 'haegar.php',
        'Flag' => './haegar.php'
    ),
    array(
        'Linktext' => ' >Emil',
        'Dateiname' => 'emil.php',
        'Flag' => './emil.php'
    ),
    array(
        'Linktext' => 'Home',
        'Dateiname' => 'index.php',
        'Flag' => './index.php'
    )
    );

foreach($links as $link){
    echo "<li><a href=".$link['Dateiname'].">". $link['Linktext'] . "</a></li>";
}


?>

</ul>
</nav>