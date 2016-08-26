<h3>Erfahrungspunkte: <!--Hier ein Echo--></h3>

<form method=POST action=form_eval_charaktermenue.php>
	<fieldset>
		<legend>Charaktermenü</legend>

		<!--Hinweis: Die max-Werte bei den Inputs entsprechen immer der Anzahl der Verfügbaren punkte-->
		<p>Leben:</p> <!--Hier ein echo--> 
		<label for=leben>Lebenspunkte erhöhen</label>
		<input type=number id=leben name=charakter min=1 max=10>

		<p>Stärke:</p> <!--Hier ein echo-->
		<label for=staerke>Stärke erhöhen</label>
		<input type=number id=staerke name=charakter min=1 max=10>

		<p>Verteidigung:</p> <!--Hier ein echo-->
		<label for=verteidigung>Vetreidigung erhöhen</label>
		<input type=number id=verteidigung name=charakter min=1 max=10>

		<p>Aktion:</p> <!--Hier ein echo-->
		<label for=aktion>Aktionspunkte erhöhen</label>
		<input type=number id=aktion name=charakter min=1 max=10>

		<p>Gesamt Rüstung:</p> <!--Hier ein echo-->
		<!--Dieser Wert wird nur angezeigt, er kann nur über das Inventar verändert werden-->
		<p>Gesamt Schaden:</p>
	</fieldset>

	<label for=bestaetigen>Bestätigen</label>
	<input type=submit id=bestaetigen>
</form>

<?php include("zurueckzumspiel.php") ?>