<form>
	<input type=button value="Hauptmenü öffnen" onklick=function()><!--Zeigt die Gruppe hauptmenü an-->
	<input type=button value="Spiel beenden" onklick=function()><!--Zeigt die Gruppe endGame an-->
	<input type=button value="Team ansehen" onklick=function()><!--Zeigt die Gruppe teamübersicht an-->
	<input type=button value="Mehrspielermodus" onklick=function()><!--Das aktuelle Spiel wird gespeichert und verlassen, die Gruppe multplayerStart wird geöffnet-->
</form>

<?php include("multiplayerStart.php") ?>
<?php include("endgame.php") ?>

<!--Die Navigationsleiste soll in der Spielwelt eingeblendet werden. Sie ermöglicht es ein Spiel zu beenden, oder ein Multiplayerspiel zu erstellen-->

