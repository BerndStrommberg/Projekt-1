<form action=startseite.php>
	<button>Spiel Beenden</button>
</form>

	
<?php 	
	$singleplayer = true;

	if ($singleplayer) {
		echo 	
			"<form action=playfieldsingleplayer.php>
				<button>Zurück zum Spiel</button>
			</form>";
	} else {
		"<form action=playfieldmultiplayer.php>
			<button>Zurück zum Spiel</button>
		</form>";
	}
?>
<!--UM nicht ausversehen das Spiel zu beenden, muss der Nutzer die OPtion Spiel Beenden anwählen und diese im Anschluss bestätigen.-->

<!--

Gruppe umgesetzt: 1/1

Allerdings sind hier die Verlinkungen noch falsch, denn die Spielfelder befinden sich ja in einem anderen Verzeichnis.

-->