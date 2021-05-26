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
			<h1>Eva</h1>
			
			<p class="cartoon"><img border="0" src="images/eva_cartoon.jpg" width="500" height="141"></p>
		</section>

		<?php
			include('fusszeile.html');
		?>
	</div>
</body>
</html>
