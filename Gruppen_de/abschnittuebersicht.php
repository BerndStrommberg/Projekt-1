<?php include("navigationsleiste.php") ?>
<h1>Abschnitt: </h1> <!--Wird entsprechend des Abschnitts ausgegeben, in dem sich der Spieler befindet-->
<form method=POST action=form_eval_abschnittuebersicht.php>
	<!--Für jedes Level gibt es so einen Input-->
	<label for=level1>Level 1 betreten</label>
	<input type=radio id=level1 name=level> 

	<label for=level2>Level 2 betreten</label>
	<input type=radio id=level2 name=level>

	<label for=level3>Level 3 betreten</label>
	<input type=radio id=level3 name=level>

	<label for=level4>Level 4 betreten</label>
	<input type=radio id=level4 name=level>   
	
	<label for=betreten>Betreten</label>
	<input type=submit id=betreten>
</form>
