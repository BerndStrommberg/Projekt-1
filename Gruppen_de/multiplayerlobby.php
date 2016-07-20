<!doctype html>

<html lang=de>

	<head>
		<title>Lobby</title>
		<meta charset=utf-8>
		<link rel=srylesheet href=../styles.css>

	</head>

	<body>
		<!-- chat Gruppe-->
		<?php include (chat.php) ?>
		<!-- teamübersicht Gruppe -->
		<!-- freundesliste-->
		<form>
			<input type=button value="Freund einladen" onklick=function()>
			<!--öffnet Freundesliste-->
			<input type=button value="Zufälliges Team" onklick=function()>
			<!-- Es wird nach Spielern gesucht, die online sind und ungefähr auf dem selben Level sind-->
			<input type=button value="Spiel starten" onklick=function()>
			<!--Beginnt das Spiel. DIese Option ist nur sichtbar, falls der Spieler das Spiel erstellt hat-->

		</form>
	</body>


</html>

<!--Die Multiplayerlobby erscheint, wenn ein Mehrspielerspiel erstellt wird, oder einem beigetreten wird. VOn hier aus kann der Host das Spiel editieren und starten-->