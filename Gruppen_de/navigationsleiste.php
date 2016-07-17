<!doctype html>

<html lang=de>
	<head>
		<title>Navigationsleiste</title>
		<meta charset=utf-8>
		<link rel=stylesheet href=../styles.css>
	</head>
	
	<body>
		<form>
			<input type=button value="Hauptmenü öffnen" onklick=function()><!--Zeigt die Gruppe hauptmenü an-->
			<input type=button value="Spiel beenden" onklick=function()><!--Zeigt die Gruppe endGame an-->
			<input type=button value="Team ansehen" onklick=function()><!--Zeigt die Gruppe teamübersicht an-->
			<input type=button value="Mehrspielermodus" onklick=function()><!--Das aktuelle Spiel wird gespeichert und verlassen, die Gruppe multplayerStart wird geöffnet-->
		</form>

		<?php include("multiplayerStart.php") ?>
		<?php include("endgame.php") ?>

	</body>

</html>
