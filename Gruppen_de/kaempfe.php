<!doctype html>

<html lang=de>
	<head>
		<title>Kämpfe</title>
		<meta charset=utf-8>
		<link rel=stylesheet href=../styles.css>
	</head>

	<body>
		<!--DIe Gruppe Charakterstatus wird über PHP importiert-->
		<h1>Kampf</h1>

		<table>
			<tr>
				<td>Spieler Name</td>
				<td>Gegner Name</td>
			</tr>
			<tr>
				<td><?php include("characterstatus.php") ?></td>
				<td><?php include("characterstatus.php") ?></td>
			</tr>
		

			<tr>
				<td><img src=../Bilder/SSJ_Goku.png></td>
				<td><img src=../Bilder/Goku.png></td>
			</tr>
		</table>


		

	</body>
</html>