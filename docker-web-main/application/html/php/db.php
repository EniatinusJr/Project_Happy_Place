<?php
            $servername = "mariadb";
            $user = "root";
            $password = "happyplace";
            $dbname = "happyplace";

            $connection = new mysqli($servername, $user, $password, $dbname);

            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            } else {
                if (isCommandLineInterface()) {
                    //echo "Database connection ready!\n";
                }
            }            


            /*if ($result = $connection->query("SHOW DATABASES;")) {
                while($row = $result->fetch_object()) {
                    print_r($row);
                }
            } else {
                $connection->close();
                die('Query Error (' . $connection->errno . ') ' . $connection->error);
            }*/

            function isCommandLineInterface()
            {
                return (php_sapi_name() === 'cli');
            }