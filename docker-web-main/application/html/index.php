<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.5.0/css/ol.css" type="text/css">
        <style>
        * {
            margin: 0;
            padding: 0;
        }
        .map {
            height: 100vh;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -9;
        }
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        button {
            width: 200px;
            background-color: #BEBEBE;
        }
        .name {
            border: white;
            background-color: #BEBEBE;
        }
        </style>
        <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.5.0/build/ol.js"></script>
        <title>Project Happy Place</title>
    </head>
    <body>
        <?php
        if (!empty($_POST["personsearch"]) && !empty($_POST["personsearch-last"])) {
            $searchPrename = $_POST["personsearch"];
            $searchLastname = $_POST["personsearch-last"];
        } else {
            $searchPrename = '';
            $searchLastname = '';
        }
        ?>
        <form action="index.php" method="POST">
            <input type="text" name="personsearch" placeholder="Firstname" value="<?php echo ($searchPrename); ?>">
            <input type="text" name="personsearch-last" placeholder="Lastname" value="<?php echo ($searchLastname); ?>">
            <button type="submit" name="submit-search">search</button>
        </form>
        <!-- <input type="number" step="any" name="lat" placeholder="Latitude" value="<?php echo($_POST["latitude"]);?>">
            <input type="number" step="any"  name="long" placeholder="Longitude" value="<?php echo($_POST["longitude"]);?>"> -->
        <div id="map" class="map"></div>
        <script type="text/javascript">
        var map = new ol.Map({
            target: 'map',
            layers: [
            new ol.layer.Tile({
                /*
                ["http://a.tile2.opencyclemap.org/transport/{z}/{x}/{y}.png","http://b.tile2.opencyclemap.org/transport/{z}/{x}/{y}.png","http://c.tile2.opencyclemap.org/transport/{z}/{x}/{y}.png"]
                ["http://a.tile3.opencyclemap.org/landscape/{z}/{x}/{y}.png","http://b.tile3.opencyclemap.org/landscape/{z}/{x}/{y}.png","http://c.tile3.opencyclemap.org/landscape/{z}/{x}/{y}.png"]
                ["http://a.tile.openstreetmap.org/{z}/{x}/{y}.png","http://b.tile.openstreetmap.org/{z}/{x}/{y}.png","http://c.tile.openstreetmap.org/{z}/{x}/{y}.png"]
                ["http://otile1.mqcdn.com/tiles/1.0.0/osm/{z}/{x}/{y}.png","http://otile2.mqcdn.com/tiles/1.0.0/osm/{z}/{x}/{y}.png","http://otile3.mqcdn.com/tiles/1.0.0/osm/{z}/{x}/{y}.png","http://otile4.mqcdn.com/tiles/1.0.0/osm/{z}/{x}/{y}.png"]
                ["http://a.tile.stamen.com/watercolor/{z}/{x}/{y}.png","http://b.tile.stamen.com/watercolor/{z}/{x}/{y}.png","http://c.tile.stamen.com/watercolor/{z}/{x}/{y}.png","http://d.tile.stamen.com/watercolor/{z}/{x}/{y}.png"]
                ["http://a.tile2.opencyclemap.org/transport/{z}/{x}/{y}.png","http://b.tile2.opencyclemap.org/transport/{z}/{x}/{y}.png","http://c.tile2.opencyclemap.org/transport/{z}/{x}/{y}.png"]
                */
                source: new ol.source.XYZ({
                    urls : ["http://a.tile.openstreetmap.org/{z}/{x}/{y}.png","http://b.tile.openstreetmap.org/{z}/{x}/{y}.png","http://c.tile.openstreetmap.org/{z}/{x}/{y}.png"]
                })

                /*source: new ol.source.OSM()*/
            }),
            /*new ol.layer.Vector({
                source: new ol.source.Vector({
                format: new ol.format.GeoJSON(),
                url: './assets/data/countries.geojson' // GeoCountries file from github
                })
            })*/
            ],
            view: new ol.View({
            center: ol.proj.fromLonLat([8.5208324, 47.360127]),
            zoom: 10
            })
            });
            function add_map_point(lng, lat) {
            var vectorLayer = new ol.layer.Vector({
                source: new ol.source.Vector({
                features: [new ol.Feature({
                    geometry: new ol.geom.Point(ol.proj.transform([parseFloat(lng), parseFloat(lat)], 'EPSG:4326', 'EPSG:3857')),
                })]
                }),
                style: new ol.style.Style({
                image: new ol.style.Icon({
                    anchor: [0.5, 0.5],
                    anchorXUnits: "fraction",
                    anchorYUnits: "fraction",
                    src: "http://localhost/icons/chevron_down.svg"
                })
                })
            });
            map.setView(new ol.View({
                center: ol.proj.transform([lng, lat], 'EPSG:4326', 'EPSG:3857'),
                zoom: 10
            }));
            map.addLayer(vectorLayer);
            }
        </script>
        <?php
            include("db.php");

            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }

            $herkunft = "SELECT * FROM Lernende JOIN Ort ON Lernende.Ort_OrtId = Ort.OrtId JOIN Marker ON Lernende.Marker_MarkerID = Marker.MarkerId";   
            if (!empty($_POST["personsearch"]) && !empty($_POST["personsearch-last"])) {
                $herkunft .= sprintf(" WHERE Vorname='%s' AND Name='%s'", $searchPrename, $searchLastname) ;
            }  
            $ausgabe = $connection->query($herkunft);
            if ($ausgabe->num_rows <= 0) {
                echo "<p id='result-id' class='result'>0 results</p>";
            }
            echo "
            <script type='text/javascript'>
                add_map_point(" .$row->longitude. ", " . $row->latitude . ");
                console.log(" .$row->longitude. ", " . $row->latitude . ");
            </script>";
            $connection->close();
        ?>
    </body>
</html>