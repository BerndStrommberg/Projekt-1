
		<!--DIe Gruppe Charakterstatus wird über PHP importiert-->
	<h1>Kampf</h1>
	<table>
		<tr>
			<td>Spieler Name</td>
			<td>Gegner Name</td>
		</tr>
		<tr>
			<!--für die Spieler-->
			<?php 
				$anzahlSpieler = 4;
				for($i=0; $i < $anzahlSpieler; $i++ ) {
					echo '<td><?php include("characterstatus.php") ?></td>';


				}
			?>
			<td><?php include("characterstatus.php") ?></td> <!--Für den Gegner -->
		</tr>
	
		<tr>
			<td><img src=../Bilder/SSJ_Goku.png></td>
			<td><img src=../Bilder/Goku.png></td>
		</tr>
	</table>

<h2>Aktiver Spieler</h2>

<?php
//ausgabe des aktiven Spielers

?>
<form method=POST action=form_eval_kaempfe.php>
	<table>
		<tr>
			<?php 
				$anzahlFaehigkeiten = 4;
				for($i=0; $i< $anzahlFaehigkeiten; $i++) {
				
				echo 
				"<td>
					<label for=nr",($i+1),">Fähigkeit",($i+1),"</label>
					<input type=radio id=nr",($i+1),"name=kampf>
				</td>";
					
				}
			?>
			<!--Mit der Schleife funktionieren aber die Radio-Buttons nicht mehr.. Oder übersehe ich da etwas?-->
			<td>
				<label for=aussetzen>Aussetzen</label>
				<input type=radio id=aussetzen name=kampf>
			</td>
		</tr>
	</table>

	<label for=verlassen>Level verlassen</label>
	<input type=checkbox id=verlassen>

	<label for=neustarten>Level neustarten</label>
	<input type=checkbox id=neustarten>

	<label for=bestaetigen>Bestätigen</label>
	<input type=submit id=bestaetigen>
</form>

<?php include("zurueckzumspiel.php") ?>
	
		
<!--
===================================
=== Feedback Alpers, 2016-09-01 ===
===================================

Leider ist auch dieses Dokument nicht konsistent gegenüber der Definition in der strukt.html.
Außerdem haben Sie hier nicht ausgenutzt, dass Sie mit PHP die Tabelle sehr effizient generieren können: Die Zeilen für die vier Fähigkeiten brauchen Sie nur einmal in einer Schleife zu programmieren.

0 / 1 Pk.

-->