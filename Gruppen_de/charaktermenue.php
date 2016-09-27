<?php 
	$ep = 50; //Diese Variable aus Datenbank 
	echo "Erfahrungspunkte: ",$ep;
?>

<form method=POST action=form_eval_charaktermenue.php>
	<fieldset>
		<legend>Charaktermenü</legend>

		<!--Hinweis: Die max-Werte bei den Inputs entsprechen immer der Anzahl der Verfügbaren punkte-->
		<p>Leben:</p> <!--Hier ein echo--> 
		<label for=leben>Lebenspunkte erhöhen</label>
		<input type=number id=leben name=charakter min=1 max=<?php echo $ep;?>>

		<p>Stärke:</p> <!--Hier ein echo-->
		<label for=staerke>Stärke erhöhen</label>
		<input type=number id=staerke name=charakter min=1 max=<?php echo $ep;?>>

		<p>Verteidigung:</p> <!--Hier ein echo-->
		<label for=verteidigung>Vetreidigung erhöhen</label>
		<input type=number id=verteidigung name=charakter min=1 max=<?php echo $ep;?>>

		<p>Aktion:</p> <!--Hier ein echo-->
		<label for=aktion>Aktionspunkte erhöhen</label>
		<input type=number id=aktion name=charakter min=1 max=<?php echo $ep;?>>

		<p>Gesamt Rüstung:</p> <!--Hier ein echo-->
		<!--Dieser Wert wird nur angezeigt, er kann nur über das Inventar verändert werden-->
		<p>Gesamt Schaden:</p>
	</fieldset>

	<input type=submit>
</form>

<?php 
	$inMainMenu = false;
	include("zurueckzumspiel.php") 

?>