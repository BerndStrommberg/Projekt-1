
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



<form method=POST action=form_eval_kaempfe.php>
	<table>
		<tr>
			<td>
				<label for=nr1>Fähigkeit 1</label>
				<input type=radio id=nr1 name=kampf>
			</td>

			<td>
				<label for=nr1>Fähigkeit 1</label>
				<input type=radio id=nr1 name=kampf>
			</td>
		</tr>
		<tr>
			<td>
				<label for=nr1>Fähigkeit 1</label>
				<input type=radio id=nr1 name=kampf>
			</td>
		
			<td>
				<label for=nr1>Fähigkeit 1</label>
				<input type=radio id=nr1 name=kampf>
			</td>
		</tr>
	</table>

	<label for=bestaetigen>Bestätigen</label>
	<input type=submit id=bestaetigen>
</form>
	
		

