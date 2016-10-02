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
			'<form action=mainmenu.php>
				<button>Zurück zum Hauptmenü</button>
			</form>';
	}
?>
