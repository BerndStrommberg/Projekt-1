<form method=POST action=../Formulare/form_eval_systemmenue.php>
	<fieldset>
		<legend>Systemmenü</legend>	
		<label for=speichern>Speichern</label>
		<input type=radio id=speichern name=system>

		<label for=musikan>Musik an</label>
		<input type=radio id=musikan name=system>

		<label for=musikaus>Musik aus</label>
		<input type=radio id=musikaus name=system>

		<label for=logout>Ausloggen</label>
		<input type=radio id=logout name=system>
	</fieldset>	

</form>

<?php 
	$inMainMenu = false;
	include("zurueckzumspiel.php") 
?>