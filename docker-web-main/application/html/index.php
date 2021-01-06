<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.5.0/css/ol.css" type="text/css">
        <style>
            .map {
            height: 400px;
            width: 100%;
            }
        </style>
        <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.5.0/build/ol.js"></script>
        <meta charset="utf-8">
        <title>OpenLayers example</title>
    </head>
    <body>
        <h2>My Map</h2>
        <div id="map" class="map"></div>
        <?php
        phpinfo();
        ?>
        <script type="text/javascript">
            var map = new ol.Map({
            target: 'map',
            layers: [
                new ol.layer.Tile({
                source: new ol.source.OSM()
                })
            ],
            view: new ol.View({
                center: ol.proj.fromLonLat([37.41, 8.82]),
                zoom: 4
            })
            });
        </script>
    </body>
</html>