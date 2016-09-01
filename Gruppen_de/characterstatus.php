
<main class=hud>	
	<!--Werden dann Später über ein echo ausgegeben. Die Werte der Variablen werden aus einer Datenbank ausgelesen-->
	
	<p>Spielerlevel:</p>
	<p>Benutzername:</p>
	<p>Lebenspunkte:</p>
	<p>Aktionspunkte:</p>
	<p>Level:</p> 

</main>	

<!--
===================================
=== Feedback Alpers, 2016-06-17 ===
===================================

Der <main>-Container ist an dieser Stelle falsch; achten Sie bitte darauf, nur diejenigen Elemente einzufügen, die in der Gruppendefinition vorgegeben sind.

Das führt auch direkt zu einer Schwäche der Gruppendefinition von III. characterstatus in der strukt.html: Dort haben Sie -76- Anzeige / Lebenspunkte, -77- Anzeige / Aktionspunkte, -49- Textfeld / Spielerlevel und -47- Textfeld / Username vorgegeben. Und hier zeigt sich der Nachteil: (Fast) jeder Container bewirkt auch eine Anzeige, also ist die Definition eines strukturellen Elements "Anzeige" zu ungenau.

Dazu kommt, dass Sie hier vier Absatz-Container programmiert haben, obwohl Sie in der strukt.html keine Absätze vorgegeben haben. Bitte überarbeiten Sie die Definition in der strukt.html und setzen Sie dann die Änderungen hier um.

0 / 1 Pk.

-->