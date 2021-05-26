<doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php
            for ($index = 0; $index < 5; $index++){
                echo '
                <tr>
                    <td>
                        ', $index + 1, '
                    </td>
                    <td>
                        <p>hello world</p>
                    </td>
                </tr>';
            }
        ?>
    </table>
</body>
</html>