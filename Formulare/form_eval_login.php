<!--Hier werden die Daten des Log ins ausgewertet-->
<?php

	$isLoggedIn = false;
	$enteredUsername = $_POST['username'];
	$enteredPassword = $_POST['passwort'];

	$username = "Hanswurst"; //Dieser Wert kommt aus einer Datenbank
	$password = "Leberwurst"; //Dieser Wert kommt aus einer Datenbank

	if ($enter == $username && $enteredPassword == $password) {
		$isLoggedIn = true;
		header("Location:playfieldsingleplayer.php");

	}





?>