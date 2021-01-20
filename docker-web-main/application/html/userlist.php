<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" size="32x32" href="./icons/earth-globe-with-continents-maps.png">
    <title>PHP CRUD: Overview</title>
</head>
<body>

    <?php
    if ($result->num_rows > 0) {

        echo "<table>";
        echo " <thead>";
        echo "  <tr>";
        echo "    <th>Nachname</th>";
        echo "    <th>Vorname</th>";
        echo "    <th>Ortschaft</th>";
        echo "    <th>Icon</th>";
        echo "    <th>Farbe</th>";
        echo "    <th>&nbsp;</th>";
        echo "  </tr>";
        echo " </thead>";
        echo " <tbody>";

        while ($row = $result->fetch_object()) {
            echo "  <tr>";
            echo "    <td>" . $row->lastname . "</td>";
            echo "    <td>" . $row->prename . "</td>";
            echo "    <td>" . $row->name . "</td>";
            echo "    <td>" . $row->icon . "</td>";
            echo "    <td>" . $row->color . "</td>";
            echo "    <td>";
            echo "      <a href='update.php?id=" . $row->id . "'>Update</a>";
            echo "      <a href='delete.php?id=" . $row->id . "'>Delete</a>";
            echo "    </td>";
            echo "  </tr>";
        }
        echo " </tbody>";
        echo "</table>";
        // Free result set
        $result->free();
    } else {
        echo "<p><em>No records were found.</em></p>";
    }
    $link->close();
    ?>
</body>
</html>