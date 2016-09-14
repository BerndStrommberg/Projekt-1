<form method=POST action=../Formulare/form_eval_zurueckzumspiel.php>
	
	<label for=backtogame>Zurück zum Spiel</label>
	<input type=radio id=backtogame name=back>
	<?php
		if(!$inMainMenu) {
			echo 
				"<label for=backtomain>Zurück zum Hauptmenü</label>
				<input type=radio id=backtomain name=back>";
		}

	?>

	<input type=submit>
</form>