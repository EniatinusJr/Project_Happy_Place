<?php
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Die ultimativen Witzseiten</title>
	<link href="layout.css" type="text/css" rel="Stylesheet" />
</head>
<body>
	<div id="wrapper">
			<?php
				include('titel.html');
				include('navigation.php');
			?>

		<section>
			<img src="images/intro.jpg" width="200" height="220" border="0" alt="Cartoon: Werbung am Telefon">
		</section>

		<?php
			include('fusszeile.html');
		?>
	</div>
</body>
</html>
