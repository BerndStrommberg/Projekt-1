<h1>Aktuelles Team</h1>
	<!--Die Einträge der Tabelle sollen aus einer Datenbank importiert werden-->
	<!-- Der Input zur Freundschaftsanfrage wird über eine cho ausgegeben, falls noch keine Freundschaftsanfrage vorliegt-->
	<table>
	
	<?php
		$teammember = 4;
	 	for($i=1; $i<=$teammember; $i++) {
	 		echo '<tr>
			<td>Username:<!--Hier ein echo--></td>
			<td><a href=spielerprofil.html>Spielerprofil</a></td>
			<td>Spielerlevel:<!--Hier ein echo--> </td>
			<td>Status:<!--Hier ein echo--></td>

			<td>
				<form method=POST action=../Formulare/form_eval_teamuebersicht.php>
					<label for=handel>Handel</label>
					<input type=checkbox id=handel name=handel>

					<label for=freundschaftsanfragen>Freund hinzufügen</label>
					<input type=checkbox id=freundschaftsanfrage name=freundschaftsanfrage>

					
					<input type=submit>
				</form>
			</td>
		</tr>';	
	 	}
	 ?> 
		
	</table>
	<?php
		$inMainMenu = false;
		include("zurueckzumspiel.php");
	?>


<!--
===================================
=== Feedback Alpers, 2016-07-19 ===
===================================

Zur Erinnerung: Das war die Gruppendefinition in der strukt.html:
 
:::::::::::::::::::
VIII. teamübersicht
:::::::::::::::::::
	-47- Textfeld / Username
	-48- Link / Spielerprofil
	-49- Textfeld / Spielerlevel
	-76- Schaltfläche, Option / Handeln
	-50- Schaltfläche, Option / Freundschaftsanfrage

Passen Sie diese Datei bitte entsprechend an.
	
 -->
 
<!--
===================================
=== Feedback Alpers, 2016-09-01 ===
===================================

Auch hier haben Sie wieder jeden Eintrag manuell programmiert, anstatt eine Schleife zu nutzen. Bitte passen Sie das an.

0 / 1 Pk.


-->