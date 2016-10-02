<form method=POST action=../Formulare/form_eval_systemmenue.php>
	<fieldset>
		<legend>Systemmenü</legend>	
		<label for=speichern>Speichern</label>
		<input type=radio id=speichern name=system>

		<label for=musikan>Musik an</label>
		<input type=radio id=musikan name=system>

		<label for=musikaus>Musik aus</label>
		<input type=radio id=musikaus name=system>
	</fieldset>	

</form>

<form action=login.php>
	<button>Ausloggen</button>
</form>

<br>

<?php 
	$inMainMenu = false;
	include("zurueckzumspiel.php") 
?>