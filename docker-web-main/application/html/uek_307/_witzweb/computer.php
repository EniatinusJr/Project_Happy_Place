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
			<h1>Die lieben Computer</h1>
			
			<p>Lisa: "Papa, was ist denn ein Kosmopolit?"<br>
			"Keine Ahnung, aber schauen wir doch mal im Lexikon nach", sagt der Vater und zieht ein Buch aus dem Regal.<br>
			Die kleine Lisa schaut ganz verdutzt und sagt: "Ach, gibt es Wikipedia auch als Buch?"</p>

			<p>Dialog zwischen Computer und Anwender:<br>
			Gib ein Passwort ein.<br>
			ananas<br>
			Entschuldigung. Dein Passwort ist zu kurz.<br>
			geschaelte ananas<br>
			Entschuldigung. Dein Passwort muss mindestens eine Ziffer enthalten.<br>
			1 geschaelte ananas<br>
			Entschuldigung. Dein Passwort darf keine Leerzeichen enthalten.<br>
			50geschaelteananas<br>
			Entschuldigung. Dein Passwort muss Grossbuchstaben enthalten.<br>
			50GROSSEgeschaelteananas<br>
			Entschuldigung. Dein Passwort darf nur Grossbuchstaben enthalten, die nicht aufeinander folgend sind.<br>
			50GrosseGeschaelteAnanas,DieIchDirUmDieOhrenHaue,WennDuNichtEndlichDiesesDoofePasswortNimmst!!!<br>
			Entschuldigung. Dein Passwort darf Keine Satzzeichen enthalten.<br>
			JetztWerdeIchLangsamRichtigSauer50GrosseGeschaelteAnanasDieIchDirUmDieOhrenHaueWennDuNichtEndlichDiesesDoofePasswortNimmst<br>
			Entschuldigung. Das Passwort ist bereits vergeben. Bitte wähle ein anderes!</p>

			<p>Was ist der Unterschied zwischen einem Informatiker und einem Physiker?<br>
			Der Physiker glaubt, ein Kilobyte sind 1000 Byte. Der Informatiker glaubt, ein Kilometer sind 1024 Meter.</p>

			<p>Anruf beim Helpdesk<br>
			Kunde: "Mein Monitor geht nicht."<br>
			Helpdesk: "Ist er denn eingeschaltet?"<br>
			Kunde: "Ja."<br>
			Helpdesk: "Schalten Sie ihn doch bitte mal aus."<br>
			Kunde: "Ah, jetzt geht’s…"</p>

			<p>Linux wird nie das meistinstallierte Betriebssystem sein, wenn man bedenkt, wie oft man Windows neu installieren muss!</p>

			<p>Anruf bei der Hotline<br>
			Kunde: "Ich benutze Windows…"<br>
			Hotline: "Ja…?"<br>
			Kunde: "…mein Computer funktioniert nicht richtig."<br>
			Hotline: "Das sagten Sie bereits …" </p>
		</section>

		<?php
			include('fusszeile.html');
		?>
	</div>
</body>
</html>
