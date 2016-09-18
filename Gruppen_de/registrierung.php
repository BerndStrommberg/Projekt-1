<form method=POST action=form_eval_registrierung.php>
	<fieldset>
		<legend>Registrierung</legend>

		<label for=username>Benutzername: </label>
		<input type=text id=username name=registrierung required>
		
		<label for=passwort>Passwort:</label>
		<input type=text id=passwort name=registrierung required> 

		<label for=passwort2>Passwort wiederholen:</label>
		<input type=text id=passwort2 name=registrierung required>

		<label for=email>E-Mail Adresse:</label>
		<input type=email id=email name=registrierung required>
		
		<img src=../Bilder/captcha.png>
		<label for=captcha>Captcha eingeben</label>
		<input type=text id=captcha name=registrierung required>
	</fieldset>

	<label for=bestaetigen>Registrieren</label>
	<input type=submit id=bestaetigen>
</form>