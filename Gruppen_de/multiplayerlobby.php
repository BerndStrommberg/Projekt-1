
<form action=form_eval_multiplayerlobby.php method=POST>
	<fieldset>
		<legend>Multiplayerspiel erstellen</legend>
		<input type=radio id=freunde name=teamerstellen>
		<label for=freunde>Freund einladen</label>
		<!--öffnet Freundesliste-->
		<input type=radio id=random name=teamerstellen>
		<label for=random>Zufälliges Team</label>
		<!-- Es wird nach Spielern gesucht, die online sind und ungefähr auf dem selben Level sind-->
	</fieldset>
	<input type=submit id=submit>	
</form>

<form action=form_eval_multiplayerlobby.php method=POST> 
	<fieldset>
		<input type=checkbox value="Spiel starten">
	</fieldset>

	<label for=starten>Starten</label>
	<input type=submit id=starten>
</form>
			<!--Beginnt das Spiel. DIese Option ist nur sichtbar, falls der Spieler das Spiel erstellt hat-->
			


<!--Die Multiplayerlobby erscheint, wenn ein Mehrspielerspiel erstellt wird, oder einem beigetreten wird. VOn hier aus kann der Host das Spiel editieren und starten-->