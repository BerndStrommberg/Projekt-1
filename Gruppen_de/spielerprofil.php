
		<!--alle Konkrete Angaben zu dem Spieler, stammen aus einer Datenbank-->
<h1>Spielerprofil</h1>
<img src=../Bilder/SSJ_Goku.png>
<table>
	<tr>
		<td>Username: <!--Hier ein echo--></td>
	</tr>
	<tr>
		<td>Spielerlevel:<!--Hier ein echo--></td>
	</tr>

	<br>

	<tr>
		<td>
			<form method=POST action=form_eval_handeln.php>
				<label for=handeln>Handeln</label>
				<input type=checkbox id=handeln name=handeln>

				<input type=submit id=bestaetigen>
			</form> 
		</td>
	</tr>

	<tr>
		<td>
			<form method=POST action=form_eval_freundschaftsanfrage.php>
				<label for=freundschaftsanfrage>Freund hinzufügen</label>
				<input type=checkbox id=freundschaftsanfrage name=freundschaftsanfrage>

				<input type=submit id=bestaetigen>
			</form>
		</td>
	</tr>
</table>
	

<footer>
	<h2>Hintergrundgeschichte</h2>
	<p>Dieser Text kommt aus einer Datenbank, jeder Spieler verfasst ihn selber.</p>
</footer>

<?php include("zurueckzumspiel.php") ?>
 


<!--
===================================
=== Feedback Alpers, 2016-07-19 ===
===================================
 
 Hier gilt weitgehend dasselbe wie bei logIn.html.
 
 -->