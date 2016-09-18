<!--<form method=POST action=../Formulare/form_eval_zurueckzumspiel.php>
	
	<label for=backtogame>Zurück zum Spiel</label>
	<input type=radio id=backtogame name=back>
	<?php
		/*if(!$inMainMenu) {
			echo 
				"<label for=backtomain>Zurück zum Hauptmenü</label>
				<input type=radio id=backtomain name=back>";
		}
*/
	?>

	<input type=submit>
</form>-->

<?php 
	$multiplayer = false;

	if($multiplayer) {
		echo 
			'<form action=playfieldmultiplayer.php>
				<button>Zurück zum Spiel</button>
			</form>';
	} else if (!$multiplayer) {
		echo
			'<form action=playfieldsingleplayer.php>
				<button>Zurück zum Spiel</button>
			</form>';
	}

	$inMainMenu = false;
	if(!$inMainMenu) {
		echo 
			'<form action=mainmenue.php>
				<button>Zurück zum Hauptmenü</button>
			</form>';
	}
?>
