
		<!--DIe Gruppe Charakterstatus wird über PHP importiert-->
	<h1>Kampf</h1>
	<table>
		<tr>
			<td>Spieler Name</td>
			<td>Gegner Name</td>
		</tr>
		<tr>
			<td><?php include("characterstatus.php") ?></td>
			<td><?php include("characterstatus.php") ?></td>
		</tr>
	
		<tr>
			<td><img src=../Bilder/SSJ_Goku.png></td>
			<td><img src=../Bilder/Goku.png></td>
		</tr>
	</table>



<form method=POST action=form_eval_kaempfe.php>
	<table>
		<tr>
			<td>
				<label for=nr1>Fähigkeit 1</label>
				<input type=radio id=nr1 name=kampf>
			</td>

			<td>
				<label for=nr2>Fähigkeit 2</label>
				<input type=radio id=nr2 name=kampf>
			</td>
		</tr>
		<tr>
			<td>
				<label for=nr3>Fähigkeit 3</label>
				<input type=radio id=nr3 name=kampf>
			</td>
		
			<td>
				<label for=nr4>Fähigkeit 4</label>
				<input type=radio id=nr4 name=kampf>
			</td>
		</tr>
		<tr>
			<td>
				<label for=aussetzen>Aussetzen</label>
				<input type=radio id=aussetzen name=kampf>
			</td>
		</tr>
	</table>

	<label for=bestaetigen>Bestätigen</label>
	<input type=submit id=bestaetigen>
</form>
	
		
<!--
===================================
=== Feedback Alpers, 2016-09-01 ===
===================================

Leider ist auch dieses Dokument nicht konsistent gegenüber der Definition in der strukt.html.
Außerdem haben Sie hier nicht ausgenutzt, dass Sie mit PHP die Tabelle sehr effizient generieren können: Die Zeilen für die vier Fähigkeiten brauchen Sie nur einmal in einer Schleife zu programmieren.

0 / 1 Pk.

-->