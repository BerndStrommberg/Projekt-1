
<ul>
	<?php
	$anzahlFreunde = 10;
	for($i = 0; $i < $anzahlFreunde; $i++) {
		echo	
			'<li><p>Username:</p> 
			<p><a href="Link zu Spielerprofilen">Profil</a></p>
			<p><br>Level:</p> 
			<p><br>Status:</p> 
			

			<p>
				<form method=POST action=../Formulare/form_eval_freundesliste.php>
					<label for=invite>Diesen Spieler einladen</label>
					<input type=checkbox id=invite name=einladen>
				
					<label for=bestaetigen>Einladen</label>
					<input type=submit id=bestaetigen>
				</form>
			</p>
		</li>';	
	}
	
?>
			
</ul>
		<!--DIe Liste soll aus einer Datenbank generiert werden und somit immer so groß, wie die Anzahl der Freunde sein-->
	

<!--
===================================
=== Feedback Alpers, 2016-07-19 ===
===================================

Zur Erinnerung: Das war die Gruppendefinition in der strukt.html:
 
::::::::::::::::::
VII. freundesliste
::::::::::::::::::
	-47- Textfeld / Username
	-48- Link / Spielerprofil
	-49- Textfeld / Spielerlevel
	-69- Textfeld / Status (online/offline)
	-70- Schaltfläche, Option / Diesen Freund einladen

Passen Sie diese Datei bitte entsprechend an.
	
 -->
 
<!--
===================================
=== Feedback Alpers, 2016-09-01 ===
===================================

::::::::::::::::::
VII. freundesliste
::::::::::::::::::
-47- Textfeld / Username
-48- Link / Spielerprofil
-49- Textfeld / Spielerlevel
-69- Textfeld / Status (online/offline)

-91- Formular
	-70- Schaltfläche, Option / Diesen Freund einladen
-93- Button /Submit

Leider sind da immer noch Inkonsistenzen enthalten: 
Ein Textfeld ist ein Feld, in das Nutzer Texte eingeben können.
Eine Schaltfläche ist keine Checkbox.
Wenn Sie die Möglichkeit erzeugen wollen, dass mehrere Spieler eingeladen werden können, dann nutzen Sie dazu bitte eine Schleife.

0 / 1 Pk.
-->