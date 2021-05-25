<?php
require_once 'marker.class.php';
require_once 'database.php';

if (isset($_REQUEST['Vorname']) && isset($_REQUEST['Name']) && isset($_REQUEST['Ort'])) {
  $newMarker = new Marker($_REQUEST['Vorname'], $_REQUEST['Name'], $_REQUEST['Ort']);
  $newMarker->create($connection);
}

header('Location: /');
