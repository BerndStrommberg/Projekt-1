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
					<?php
						$anzahlFaehigkeiten = 10; //AUs einer Datenbank
						for($i = 0; $i < $anzahlFaehigkeiten; $i++) {
							echo
								'<ul>
							<li>
								<label for=oskill',$i,'>OSkill',$i,'</label>
								<input type=checkbox id=oskill',$i,' name=oskills>
							</li>
						</ul>';		
						}
					?>
				</td>

				<td>
					<?php
						$anzahlFaehigkeiten = 10; //AUs einer Datenbank
						for($i = 0; $i < $anzahlFaehigkeiten; $i++) {
							echo
								'<ul>
							<li>
								<label for=dskill',$i,'>DSkill',$i,'</label>
								<input type=checkbox id=dskill',$i,' name=dskills>
							</li>
						</ul>';		
						}
					?>
				</td>
			</tr>
		</table>

	</fieldset>
	<input type=submit id=bestaetigen>
</form>

<?php include("zurueckzumspiel.php") ?>