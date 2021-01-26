<?php

class Marker
{
  public $Ort;
  public $latitude;
  public $longitude;
  public $Vorname;
  public $Name;
  
  public function __construct($Vorname, $Name, $Ort)
  {
    $this->Vorname = $Vorname;
    $this->Name = $Name;
    $this->Ort = $Ort;
  }

  public function setCoordinate($lat, $lng) 
  {
    $this->latitude = $lat;
    $this->longitude = $lng;
  }

  public function toJson()
  {
    return json_encode([
      "Ort" => $this->Ort,
      "lat" => $this->latitude,
      "lng" => $this->longitude,
      "Vorname" => $this->Vorname,
      "Name" => $this->Name
    ]);
  }

  public function create($connection)
  {
    $Ort = $connection->real_escape_string($this->Ort);
    $Vorname = $connection->real_escape_string($this->Vorname);
    $Name = $connection->real_escape_string($this->Name);
    $sql = "SELECT OrtID,latitude,longitude FROM `Ort` WHERE Ort = '$Ort' LIMIT 1";
    $result = $connection->query($sql);
    $placesFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($placesFromDatabase as $place) {
      ($place);
      $OrtID = $place['OrtID'];
      $lat = $place['latitude'];
      $lng = $place['longitude'];
    }
    if($OrtID > 0){

      $sql = "INSERT INTO `Lernende` (Vorname, Name, Ort_OrtID) VALUES ('$Vorname', '$Name', $OrtID);";

      $result = $connection->query($sql);

      if (!$result) {
        die($connection->error);
      }
    }
  }

  public static function fetchAll($connection)
  {
    $sql = "SELECT * FROM `Lernende` JOIN Ort ON Lernende.Ort_OrtID = Ort.OrtID";
    $result = $connection->query($sql);

    if (!$result) {
      die($connection->error);
    }

    $markersFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
    $markers = [];

    foreach ($markersFromDatabase as $marker) {
      //print_r($marker);
      $poi = new Marker($marker['Vorname'], $marker['Name'], $marker['Ort']); 
      $poi->setCoordinate($marker['latitude'], $marker['longitude']);
      $markers[] = $poi;
    }

    return $markers;
  }
}
