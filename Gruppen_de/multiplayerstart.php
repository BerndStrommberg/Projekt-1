

<form action=lobby.php>
	<button> Multiplayerspiel erstellen</button>
	<button>Multiplayerspiel Beitreten</button>
</form>
<!--Hier soll die Möglichkeit gegeben sein ein Mehrspielerspiel erstellt zu werden, das aktuelle Einzelspielerspiel beendet sich dadurch automatisch-->

<!--
===================================
=== Feedback Alpers, 2016-09-01 ===
===================================

Leider haben Sie hier (und bei den übrigen Formularen) die Verlinkung zum Auswertungsskript (form_eval_...) unvollständig programmiert. Die Auswertungsskripte befinden sich alle in einem anderen Verzeichnis.

Ansonsten gibt es noch einige Inkonsistenzen bezüglich der strukt.html, die ich schon an anderer Stelle genannt habe.

0 / 1 Pk.

===================================
=== Feedback Alpers, 2016-11-02 ===
===================================

Aktuell hätten Sie folgenden Ablauf: Wenn eine der Schaltflächen angewählt wird, wird die Ansicht Lobby gewählt. Diese Datei wird aber bereits in der Lobby included. Es kann also passieren, dass Spieler eine der Schaltflächen betätigen und (scheinbar) passiert nichts.
-->