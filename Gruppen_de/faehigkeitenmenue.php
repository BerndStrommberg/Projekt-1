<form method=POST action=form_eval_faehigkeitenmenue.php>
	<fieldset>
		<legend>Fähigkeiten</legend>
		<table>
			<!--Die Fähigkeiten werden aus einer Datenbank in eine Liste gegegben, es können insgesamt nur 4 Fähigkeiten ausgerüstet werden-->
			<tr>
				<td>Offensive Fähigkeiten</td>
				<td>Defensive Fähigkeiten</td>
			</tr>

			<tr>
				<td>
					<ul>
						<li>
							<label for=oskill1>OSkill 1</label>
							<input type=checkbox id=oskill1 name=oskills>
						</li>

						<li>
							<label for=oskill2>OSkill 2</label>
							<input type=checkbox id=oskill2 name=oskills>
						</li>
					</ul>
				</td>

				<td>
					<ul>
						<li>
							<label for=dskill2>OSkill2</label>
							<input type=checkbox id=dskill2 name=dskills>
						</li>

						<li>
							<label for=dskill3>OSkill3</label>
							<input type=checkbox id=dskill3 name=dskills>
						</li>
					</ul>
				</td>
			</tr>
		</table>

	</fieldset>
	<label for=bestaetigen>Bestätigen</label>
	<input type=submit id=bestaetigen>
</form>

<?php include("zurueckzumspiel.php") ?>