
<!--<form action=../Formulare/form_eval_multiplayerlobby.php method=POST>
	<fieldset>
		<legend>Multiplayerspiel erstellen</legend>
		<input type=radio id=freunde name=teamerstellen>
		<label for=freunde>Freund einladen</label>
		<!--öffnet Freundesliste-->
		<!--<input type=radio id=random name=teamerstellen>
		<label for=random>Zufälliges Team</label>
		<!-- Es wird nach Spielern gesucht, die online sind und ungefähr auf dem selben Level sind-->
	<!--</fieldset>
	<input type=submit id=submit>	
</form>

<form action=form_eval_multiplayerlobby.php method=POST> 
	<fieldset>
		<input type=checkbox value="Spiel starten">
	</fieldset>

	<input type=submit value=Starten>
</form>-->

<form action=../Formulare/form_eval_teamerstellen.php method=POST>
<fieldset>
	<legend>Team erstellen</legend>

		<?php
			for($i = 0; $i < 4; $i++) {
				echo
					'<label for=freundeinladen>Freund einladen</label>
					<input type=text id=freundeinladen><br>';
			}
		?>
		<button id=random>Zufälliges Team erstellen</button>
		<input type=submit>
</fieldset>
</form>

			<!--Beginnt das Spiel. DIese Option ist nur sichtbar, falls der Spieler das Spiel erstellt hat-->
			


<!--Die Multiplayerlobby erscheint, wenn ein Mehrspielerspiel erstellt wird, oder einem beigetreten wird. VOn hier aus kann der Host das Spiel editieren und starten-->

<!--
===================================
=== Feedback Alpers, 2016-09-01 ===
===================================

Leider ist dieses Dokument gegenüber der strukt.html inkonsistent. Bitte gleichen Sie das an.

0 / 1 Pk.

-->