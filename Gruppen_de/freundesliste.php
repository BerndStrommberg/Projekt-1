
<li>
	<ul>Username:<!--Hier ein echo--> 
		<br><a href="Link zu Spielerprofilen">Profil</a>
		<br>Level:<!--Hier ein echo--> 
		<br>Status:<!--Hier ein echo--> 
		<br>

		<form method=POST action=form_eval_freundesliste.php>
			<label for=invite>Spieler einladen</label>
			<input type=checkbox id=invite name=einladen>
			<br>
			<label for=bestaetigen>Einladen</label>
			<input type=submit id=bestaetigen>
		</form>
	</ul>

	<ul></ul>
	<ul></ul>
	<ul></ul>
	<ul></ul>
	<ul></ul>
	<ul></ul>			
</li>
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