

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

===================================
=== Feedback Alpers, 2016-11-02 ===
===================================

Die verlinkte Datei zur Auswertung des Formulars existiert noch nicht.

Ansonsten wie in strukt.html umgesetzt: 1/1
-->