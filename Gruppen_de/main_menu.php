

<!--<form method=POST action=form_eval_main_menue.php>
	<fieldset>
		<legend>Hauptmenü</legend>
	<?php
	/*	$titelUndId = array(
			array("Charaktermenü","charaktermenue"),
			array("Inventar","inventar"),
			array("Fähigkeitenmenü","faehigkeitenmenue"),
			array("Systemmenü","system")
		);
		for($i = 0; $i < 4; $i++){
			for($j = $i; $j < $i+1; $j++) {
				echo'
					<label for=',$titelUndId[$i][($j+1)],'>',$titelUndId[$i][$j],'</label>
					<input type=radio name=main_menu id=',$titelUndId[$i][($j+1)],',>';
			}
		}
	*/	
	?> 
	</fieldset>
		<input type=submit name=main_menu id=bestaetigen>
</form>

<?php 
	//$inMainMenu = true;
	//include("zurueckzumspiel.php") 
?>

<!--Über das Hauptmenü kann der Spieler in vier Untermenüs gelangen-->


<form action=charmenue.php>
	<button>Charaktermenü</button>
</form>

<form action=inventar.php>
	<button>Inventar</button>
</form>

<form action=faehigkeitenmenue.php>
	<button>Fähigkeitenmenü</button>
</form>

<form action=systemmenue.php>
	<button>Systemmenü</button>
</form>

<br>

<?php include("zurueckzumspiel.php") ?>
<!--
===================================
=== Feedback Alpers, 2016-07-19 ===
===================================
 
 Hier gilt weitgehend dasselbe wie bei logIn.html.
 
 -->

<!--
===================================
=== Feedback Alpers, 2016-06-17 ===
===================================

Auch hier sollten Sie die einzelnen inputs/labels mit einer Schleife erzeugen: Sie müssen dazu lediglich ein zweidimensionales Array programmieren, in dem die id und der deutsche Titel steht.

Sie haben in der strukt.html die Überschrift nicht als strukturelles Element definiert. Bitte holen Sie das nach.

Noch ein wichtiger Hinweis bezüglich submit-Buttons: Die beinhalten automatisch eine Beschriftung. Ein Label ist hier also unnötig. Die nötige Lokalisierung wird im Browser des Nutzers erzeugt. name und id sind in dem Fall unnötig.

0 / 1 Pk.

-->