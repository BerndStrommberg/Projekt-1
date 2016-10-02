<?php include("navigationsleiste.php") ?>
<h1>Abschnitt: </h1> <!--Wird entsprechend des Abschnitts ausgegeben, in dem sich der Spieler befindet-->
<!--<form method=POST action=form_eval_abschnittuebersicht.php>-->
	<!--Für jedes Level gibt es so einen Input-->
	<?php 
		$anzahlLevel = 4;//Dieser Wert kommt aus einer Datenbank
		for($i = 0; $i < $anzahlLevel; $i++){
			echo '
			<form action=fight.php>
				<button>Level ',$i+1,' betreten</button>
			</form>';
		}	
	?>
<!--
	
	<input type=submit name=level>
</form>-->