<form method=POST action=form_eval_main_menue.php>
	<fieldset>
		<legend>Hauptmenü</legend>
		<label for=charaktermenue>Charaktermenü</label>
		<input type=radio name=main_menu id=charaktermenue>

		<label for=inventar>Inventar</label>
		<input type=radio name=main_menu id=inventar>

		<label for=faehigkeitenmenue>Fähigkeitenmenü</label>
		<input type=radio name=main_menu id=faehigkeitenmenue>

		<label for=system>Systemmenü</label>
		<input type=radio name=main_menu id=system>

	</fieldset>
	
		<label for=bestaetigen>Bestätigen</label>
		<input type=submit name=main_menu id=bestaetigen>
</form>

<!--Über das Hauptmenü kann der Spieler in vier Untermenüs gelangen-->

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