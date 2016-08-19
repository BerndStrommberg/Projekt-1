<form method=POST action=form_eval_navigationsleiste.php>
	<fieldset>
		<label for=hauptmenue>Hauptmenü öffnen</label>
		<input type=radio id=hauptmenue name=navigationsleiste>

		<label for=team>Team ansehen</label>
		<input type=radio id=team name=navigationsleiste>
		
		<label for=endgame>Spiel Beenden</label>
		<input type=radio id=endgame name=navigationsleiste>

	</fieldset>

	<label for=bestaetigen>Bestätigen</label>
	<input type=submit name=bestaetigen>
</form>

<?php include("multiplayerstart.php") ?>

<!--Die Navigationsleiste soll in der Spielwelt eingeblendet werden. Sie ermöglicht es ein Spiel zu beenden, oder ein Multiplayerspiel zu erstellen-->

