<?php
require_once 'marker.class.php';
require_once 'database.php';

if (isset($_REQUEST['lat']) && isset($_REQUEST['lng']) && isset($_REQUEST['prename']) && isset($_REQUEST['lastname'])) {
  $newMarker = new Marker($_REQUEST['lat'], $_REQUEST['lng'], $_REQUEST['prename'], $_REQUEST['lastnae']);
  $newMarker->create($connection);
}

header('Location: /');
