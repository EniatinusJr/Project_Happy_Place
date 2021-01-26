<?php

class Marker
{
  public $id;
  public $lat;
  public $lng;
  public $prename;
  public $lastname;

  public function __construct($prename, $lastname, $lat, $lng, $id = null)
  {
    $this->prename = $prename;
    $this->lastname = $lastname;
    $this->lat = $lat;
    $this->lng = $lng;
    $this->id = $id;
  }

  public function toJson()
  {
    return json_encode([
      "id" => $this->id,
      "lat" => $this->lat,
      "lng" => $this->lng,
      "prename" => $this->prename,
      "lastname" => $this->lastname
    ]);
  }

  public function create($connection)
  {
    $lat = $connection->real_escape_string($this->lat);
    $lng = $connection->real_escape_string($this->lng);
    $prename = $connection->real_escape_string($this->prename);
    $lastname = $connection->real_escape_string($this->lastname);
    $coordsla = "SELECT latitude FROM `Ort`";
    $coordslo = "SELECT longitude FROM `Ort`";

    if($coordsla == $lat && $coordslo == $lng){
      $sql = "INSERT INTO `Lernende` (Vorname, Name) VALUES ('$prename', '$lastname');";
      $placeid = "SELECT OrtID FROM `Ort` WHERE latitude = $lat AND longitude = $lng";
      $place = "INSERT INTO `Lernende` (OrtID) VALUES ('$placeid')";
    }

    $result = $connection->query($sql);

    if (!$result) {
      die($connection->error);
    }
  }

  public static function fetchAll($connection)
  {
    $sql = "SELECT * FROM `Lernende`";
    $result = $connection->query($sql);

    if (!$result) {
      die($connection->error);
    }

    $markersFromDatabase = $result->fetch_all(MYSQLI_ASSOC);
    $markers = [];

    foreach ($markersFromDatabase as $marker) {
      $markers[] = new Marker($marker['id'], $marker['lat'], $marker['lng'], $marker['prename'], $marker['lastname']);
    }

    return $markers;
  }
}
