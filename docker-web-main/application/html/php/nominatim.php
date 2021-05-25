<?php
            /**
             * Strassenkoordinaten über Nominatim API abfragen.
             * Vorlage für Lernende
             * 
             * Execute this in the cli container:
             *   docker exec cli /usr/local/bin/php /var/www/html/nominatim.php
             */
            // use a cronjob:
            // */1 * * * * docker exec cli /usr/local/bin/php /var/www/html/nominatim.php
            
            include("db.php");
            //$dblink = new mysqli('localhost', 'my_user', 'my_password', 'my_db');

            // CHANGES MADE BELOW THIS LINE ARE AT OWN RISK //

            // Query to fetch randomly one place without coordinates
            $places = "SELECT * FROM Ort ".
                    "WHERE ( latitude is NULL OR latitude='') " .
                    "AND ( longitude is NULL OR longitude='') " .
                    "ORDER BY RAND() LIMIT 20;";

            if ($result = $connection->query($places)) {
                while($row = $result->fetch_object()) {
                    $place_id = $row->OrtID;
                    $coord = nominatimCoordinates($row->Ort . ",Schweiz"); // Restrict to switzerland
                    //echo $coord;
                    if ((!empty($coord)) && ($place_id > 0)) {
                        $update = sprintf("UPDATE Ort SET %s WHERE OrtID=%d", $coord, $place_id);
                        //echo $update;
                        if(!$connection->query($update)) {
                            echo ('Query Error (' . $connection->errno . ') ' . $connection->error);
                        }
                    }
                }
            } else {
                $connection->close();
                die('Query Error (' . $connection->errno . ') ' . $connection->error);
            }


            $connection->close();


            function nominatimCoordinates($search) {
                $sql = "";
                // &osm_type=way => Only fetch roads
                $type = "node";
                $base = "https://nominatim.openstreetmap.org/search?q=%s&format=json&osm_type=".$type;
                $useragent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)';
                $referer   = "https://www.zli.ch";

                $url = sprintf($base, $search);
//echo $url;
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_USERAGENT, $agent);
                curl_setopt($curl, CURLOPT_REFERER, $referer);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

                $response = curl_exec($curl);
                $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
                curl_close($curl);

                if ($httpcode == 200) {
                    $response = json_decode($response, true);
                    // Build SQL UPDATE query;
                    //print_r($response);
                    $sql = "latitude='".$response[0]['lat']."', longitude='".$response[0]['lon']."'";
                } else {
                    echo 'ERROR: ' . $httpcode;
                }
                return $sql;
            }

